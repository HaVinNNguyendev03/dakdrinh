<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Models\Mthongtinduan;
use App\Models\Mmenu;
use App\Models\Mtruycap;
use App\Services\CauhinhwebService; 
class CBaivietchitiet extends BaseController 
{
    public function index($idbaiviet): string
    {
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->find($idbaiviet);
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        if (!$baiviet) {
            // return view('errors/html/error_404');
        }
        $data = [
            'baivietmoinhat' => $result,
           'baiviet' => $baiviet,
       ];
       $cauhinhwebService = service('cauhinhwebService');
       $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
       $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        $session = \Config\Services::session();
        if (!$session->has('ci_session')) {
            // Bật phiên
            $session->start();
        }
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
        return view('Client/baivietchitiet', $data);
    }
    public function thongtinduan($idthongtinduan): string
    {
        
        $baivietModel = new Mbaiviet();
        $thongtinduanmodel = new Mthongtinduan(); 
        $baiviet = $thongtinduanmodel->find($idthongtinduan);
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        if (!$baiviet) {
            // return view('errors/html/error_404');
        }

        $data = [
            'baivietmoinhat' => $result,
           'baiviet' => $baiviet,
       ];
       $cauhinhwebService = service('cauhinhwebService');
       $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
       $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        return view('Client/duanchitiet', $data);
    }
}