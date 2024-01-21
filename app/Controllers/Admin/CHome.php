<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class CHome extends BaseController
{
    public function index(): string
    {
        return view('Admin/Home');
    }
    public function test(): string
    {
        return view('Admin/test');
    }
}