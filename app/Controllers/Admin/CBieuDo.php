<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class CBieuDo extends BaseController
{
    public function index(): string
    {
        return view('Admin/BieuDo');
    }
}