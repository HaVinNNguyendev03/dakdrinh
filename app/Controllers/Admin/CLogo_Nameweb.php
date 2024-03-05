<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CLogo_Nameweb extends BaseController
{
    public function index(): string
    {
        return view('Admin/Logo_Nameweb');
    }
}