<?php
namespace App\Controllers\Client\ThuVien;
use App\Controllers\BaseController;
class CThuVienAnh extends BaseController
{
    public function index(): string
    {
        return view('Client/ThuVien/ThuVienAnh');
    }
}
