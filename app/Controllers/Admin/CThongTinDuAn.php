<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CThongTinDuAn extends BaseController
{
    public function index(): string
    {
        return view('Admin/ThongTinDuAn');
    }
}