<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CThongTinDoanhNghiep extends BaseController
{
    public function index(): string
    {
        $baivietModel = new Mbaiviet();
        $baiviets = $baivietModel->getbaivietByDanhMuc(101);
        $data['baiviet'] = $baiviets;
        return view('Client/GioiThieu/ThongTinDoanhNghiep',$data);
    }
}