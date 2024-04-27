<?php
namespace App\Controllers\Client\TinTucSuKien;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CMenu extends BaseController
{
    public function index($idmenu): string
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang
        $sobaiviet = 5;
        // Lấy dữ liệu bài viết phân trang
        $baiviets = $baivietModel->getBaivietByDanhMucsPagianted($idmenu, $page, $perPage);
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $total = $baivietModel->where('idmenu', $idmenu)->countAllResults();
        $data = [
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,      
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        return view('Client/TinTucSuKien/home',$data);
    }
}