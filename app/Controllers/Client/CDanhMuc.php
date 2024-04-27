<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Models\Mmenu;
use App\Models\Mdanhmuc;
use App\Models\Mtruycap;
use App\Services\CauhinhwebService;
class CDanhMuc extends BaseController
{
    public function index($iddanhmuc): string
    {
        
        $baivietModel = new Mbaiviet();
        $danhmuc = new Mdanhmuc();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang
        $sobaiviet = 5;
        // Lấy dữ liệu bài viết phân trang
        $baiviets = $baivietModel->getBaivietByDanhMucPaginated($iddanhmuc, $page, $perPage);
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $total = $baivietModel->where('iddanhmuc', $iddanhmuc)->countAllResults();
        $data = [
             'baivietmoinhat' => $result,
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        $idmenu = $danhmuc->getIdmenuByIddanhmuc($iddanhmuc);
        $menu = new Mmenu();
        $data['menu'] = $menu->getMenu($idmenu);
        $danhmuc = new Mdanhmuc();
        $data['danhmuc'] = $danhmuc->getDanhmucByMenu($idmenu);
        $cauhinhwebservices = new CauhinhwebService;
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
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
        return view('Client/DanhMuc', $data);
    }
}