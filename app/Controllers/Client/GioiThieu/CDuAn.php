<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
class CDuAn extends BaseController
{
    public function index(): string
    {
        return view('Client/GioiThieu/DuAn');
    }
}