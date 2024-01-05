<?php
namespace App\Controllers\Client\TinTucSuKien;
use App\Controllers\BaseController;
class CTinTucPVPowerDHC extends BaseController
{
    public function index(): string
    {
        return view('Client/TinTucSuKien/TinTucPVPowerDHC');
    }
}