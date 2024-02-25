<?php

namespace App\Controllers\Client\ThongBao;

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CHome extends BaseController
{
    public function index()
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang

        // Lấy dữ liệu bài viết phân trang
        $iddanhmuc = [401,402,403];
        $baiviets = $baivietModel->getBaivietByDanhMucsPagianted($iddanhmuc, $page, $perPage);
        $total = $baivietModel->whereIn('iddanhmuc', $iddanhmuc)->countAllResults();
        $data = [
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,      
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        return view('Client/ThongBao/Home',$data);
    }
}
