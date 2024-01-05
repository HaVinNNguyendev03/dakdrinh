<?php
namespace App\Controllers\Client\TinTucSuKien;
use App\Controllers\BaseController;
class CHoatDongNganhDien extends BaseController
{
    public function index(): string
    {
        return view('Client/TinTucSuKien/HoatDongNganhDien');
    }
}