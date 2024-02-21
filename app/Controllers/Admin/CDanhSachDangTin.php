<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CDanhSachDangTin extends BaseController
{
    public function index(): string
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 16; // Số bài viết trên mỗi trang
        // Lấy dữ liệu bài viết phân trang
        $iddanhmuc = [101,201,202,203,204,301,302,303,401,402,403,501,502,503,601,602,203];
        $baiviets = $baivietModel->getBaivietByDanhMucsPagianted($iddanhmuc, $page, $perPage);
        $total = $baivietModel->whereIn('iddanhmuc', $iddanhmuc)->countAllResults();
        $data = [
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,  
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên    mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        return view('Admin/DanhSachDangTin',$data);
    }
}