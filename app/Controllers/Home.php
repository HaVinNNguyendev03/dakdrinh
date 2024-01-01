<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function pagedetail(): string
    {
        return view('pagedetail');
    }
}
