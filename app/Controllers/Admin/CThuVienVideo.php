<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class CThuVienVideo extends BaseController
{
    public function index(): string
    {
        return view('Admin/ThuVienVideo');
    }
   
}