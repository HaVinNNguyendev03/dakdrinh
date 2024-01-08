<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
class CThongTinDoanhNghiep extends BaseController
{
    public function index(): string
    {
        return view('Client/GioiThieu/ThongTinDoanhNghiep');
    }
}