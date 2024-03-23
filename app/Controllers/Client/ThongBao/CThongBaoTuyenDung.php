<?php

namespace App\Controllers\Client\ThongBao;

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CThongBaoTuyenDung extends BaseController
{
    public function index()
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang
        $sobaiviet = 5;
        // Lấy dữ liệu bài viết phân trang
        $baiviets = $baivietModel->getBaivietByDanhMucPaginated(402, $page, $perPage);
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $total = $baivietModel->where('iddanhmuc', 402)->countAllResults();
        $data = [
             'baivietmoinhat' => $result,
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        return view('Client/ThongBao/thongbaotuyendung',$data);
    }
}
