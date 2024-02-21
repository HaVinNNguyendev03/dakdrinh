<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CThongTinDoanhNghiep extends BaseController
{
    public function index(): string
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang

        // Lấy dữ liệu bài viết phân trang
        $baiviets = $baivietModel->getBaivietByDanhMucPaginated(101, $page, $perPage);
        $total = $baivietModel->where('iddanhmuc', 101)->countAllResults();
        $data = [
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        return view('Client/GioiThieu/ThongTinDoanhNghiep', $data);
    }
}