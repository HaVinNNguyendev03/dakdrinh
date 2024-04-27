<?php
namespace App\Controllers\Client\ThuVien;
use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
use App\Models\Mmenu;
use App\Models\Mdanhmuc;
use App\Models\Mtruycap;
use App\Services\CauhinhwebService;
class CThuVienAnh extends BaseController
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
        $thuvienanhModel = new Mthuvienanh();
        $danhmuc = new Mdanhmuc();
        $data['thuvienanh'] = $thuvienanhModel->groupByDanhMucNam();
        $cauhinhwebservices = new CauhinhwebService;
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
        $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
        $idmenu = $danhmuc->getIdmenuByIddanhmuc($iddanhmuc);
        $menu = new Mmenu();
        $data['menu'] = $menu->getMenu($idmenu);
        $data['danhmuc'] = $danhmuc->getDanhmucByMenu($idmenu);
        return view('Client/ThuVien/ThuVienAnh',$data); 
    }
    public function apigetthuvienanh(): string
    {
        $thuvienanhModel = new Mthuvienanh();
        $result = $thuvienanhModel->apigetthuvienanh();
         // Khởi tạo mảng kết quả
    $groupedData = [];


    // Nhóm dữ liệu theo danh mục năm
    foreach ($result as $row) {
        $groupedData[$row['danhmucnamanh']][] = $row;
    }
        if ($groupedData) {
            return json_encode(['status' => 'success','message' => ' thành công','data' => $groupedData]);
        } else {
            return json_encode(['status' => 'error','message' => ' thất bại']);
        }
    }
}
