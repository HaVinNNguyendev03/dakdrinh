<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CSliderHome extends BaseController
{
    public function index(): string
    {
        return view('Admin/SliderHome');
    }
}