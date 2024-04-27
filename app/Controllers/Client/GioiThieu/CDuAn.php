<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Models\Mthongtinduan;
use App\Models\Mbaiviet;
use App\Models\Mmenu;
use App\Models\Mdanhmuc;
use App\Models\Mtruycap;
use App\Services\CauhinhwebService;
class CDuAn extends BaseController
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
        $thongtinduanmodel = new Mthongtinduan();
        $danhmuc = new Mdanhmuc();
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $baiviets = $thongtinduanmodel->findAll();
        $data = [
             'baivietmoinhat' => $result,
            'baiviet' => $baiviets,
        ];
        $cauhinhwebservices = new CauhinhwebService;
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
        $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        $idmenu = $danhmuc->getIdmenuByIddanhmuc($iddanhmuc);
        $menu = new Mmenu();
        $data['menu'] = $menu->getMenu($idmenu);
        $data['danhmuc'] = $danhmuc->getDanhmucByMenu($idmenu);
        return view('Client/GioiThieu/DuAn',$data);
    }
}