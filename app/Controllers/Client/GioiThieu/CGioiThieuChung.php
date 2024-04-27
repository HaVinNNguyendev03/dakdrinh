<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Services\CauhinhwebService;
use App\Models\Mdanhmuc;
use App\Models\Mmenu;
use App\Models\Mbaiviet;
use App\Models\Mtruycap;
class CGioiThieuChung extends BaseController
{
    public function index($iddanhmuc): string
    {
        $session = \Config\Services::session();
        $session->start();
        $data['online'] = $session->get('online');
        // Tăng số lượt truy cập
    $accessCounterModel = new Mtruycap();
    $accessCounterModel->increaseCurrentAccess();
    $accessCounterModel->calculatePreviousDayAccess();
    $accessCounterModel->calculateWeeklyAccess();
    // Lấy số lượt truy cập hiện tại
    $currentAccess = $accessCounterModel->getCurrentAccess();
    $currentDay = $accessCounterModel->getCurrentDay();
    $currentWeek = $accessCounterModel->getTruycaptuan();
    $currentAll = $accessCounterModel->tinhtongtruycap();
    // Các xử lý khác trong trang chủ
    $data['currentAccess'] = $currentAccess;
    $data['currentDay'] = $currentDay;
    $data['currentWeek'] = $currentWeek;
    $data['totalAccess'] = $currentAll;
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->findIdDanhMuc($iddanhmuc);
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        if (!$baiviet) {
            // return view('errors/html/error_404');
        }

        $data = [
            'baivietmoinhat' => $result,
           'baiviet' => $baiviet,
       ];
        $cauhinhwebservices = new CauhinhwebService;
        $danhmuc = new Mdanhmuc();
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
        $idmenu = $danhmuc->getIdmenuByIddanhmuc($iddanhmuc);
        $menu = new Mmenu();
        $data['menu'] = $menu->getMenu($idmenu);
        $danhmuc = new Mdanhmuc();
        $data['danhmuc'] = $danhmuc->getDanhmucByMenu($idmenu);
        $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        return view('Client/baivietchitiet',$data);
    }
}