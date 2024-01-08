<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
class CGioiThieuChung extends BaseController
{
    public function index(): string
    {
        return view('Client/GioiThieu/GioiThieuChung');
    }
}