<?php


namespace App\Controllers\Client;
use App\Controllers\BaseController;
class CHome extends BaseController
{
    public function index(): string
    {
        return view('Client/home');
    }
}
