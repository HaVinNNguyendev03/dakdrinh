<?php

namespace App\Controllers\Client\HoatDongSXKD;

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Services\CauhinhwebService;
class CTinhHinhSX extends BaseController
{
    public function index()
    {
        $baivietModel = new Mbaiviet();
        $pager =  \Config\Services::pager();
        $page = $this->request->getVar('page') ?? 1; // Lấy trang hiện tại từ query string, mặc định là 1
        $perPage = 4; // Số bài viết trên mỗi trang
        $sobaiviet = 5;
        // Lấy dữ liệu bài viết phân trang
        $baiviets = $baivietModel->getBaivietByDanhMucPaginated(302, $page, $perPage);
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $total = $baivietModel->where('iddanhmuc', 302)->countAllResults();
        $data = [
             'baivietmoinhat' => $result,
            'baiviet' => $baiviets,
            'pager'   => $baivietModel->pager,
            'currentPage' => $page, // Truyền số trang hiện tại
            'perPage' => $perPage, // Truyền số bài viết trên mỗi trang
            'total' => $total, // Truyền tổng số bài viết
        ];
        $cauhinhwebservices = new CauhinhwebService;
        $data['cauhinhweb'] = $cauhinhwebservices->getAllCauhinhweb();
        return view('Client/HoatDongSKKD/tinhhinhsanxuatkinhdoanh', $data);
    }
}
