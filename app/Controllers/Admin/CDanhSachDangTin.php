<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class CDanhSachDangTin extends BaseController
{
    public function index(): string
    {
        return view('Admin/DanhSachDangTin');
    }
}