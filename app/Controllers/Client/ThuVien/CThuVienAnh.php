<?php
namespace App\Controllers\Client\ThuVien;
use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
class CThuVienAnh extends BaseController
{
    public function index(): string
    {
        $thuvienanhModel = new Mthuvienanh();
        $data['thuvienanh'] = $thuvienanhModel->groupByDanhMucNam();

        return view('Client/ThuVien/ThuVienAnh',$data); 
    }
}
