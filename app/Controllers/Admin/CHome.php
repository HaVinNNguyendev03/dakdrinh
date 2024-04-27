<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Services\CauhinhwebService;
class CHome extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function test(): string
    {
        return view('Admin/test');
    }
}