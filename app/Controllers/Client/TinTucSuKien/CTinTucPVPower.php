<?php
namespace App\Controllers\Client\TinTucSuKien;
use App\Controllers\BaseController;
class CTinTucPVPower extends BaseController
{
    public function index(): string
    {
        return view('Client/TinTucSuKien/TinTucPVPower');
    }
}