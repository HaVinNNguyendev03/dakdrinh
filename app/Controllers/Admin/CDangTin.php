<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class CDangTin extends BaseController
{
    public function index(): string
    {
        return view('Admin/DangTin');
    }
}