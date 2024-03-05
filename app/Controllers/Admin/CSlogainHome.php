<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CSlogainHome extends BaseController
{
    public function index(): string
    {
        return view('Admin/SlogainHome');
    }
}