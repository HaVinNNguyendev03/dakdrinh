<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Models\Mmenu;
use App\Models\Mtruycap;
use App\Services\CauhinhwebService;
class CBanLanhDao extends BaseController
{
    public function index(): string
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
        $cauhinhwebservices = new CauhinhwebService;
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
        $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        return view('Client/GioiThieu/BanLanhDao',$data);
    }
}