<?php
namespace App\Controllers\Client\ThuVien;
use App\Controllers\BaseController;
use App\Models\Mthuvienvideo;
class CThuVienVideo extends BaseController
{
    public function index(): string
    {
        $thuvienvideo = new Mthuvienvideo();
        $data['thuvienvideo'] = $thuvienvideo->getAllVideo();

        return view('Client/ThuVien/ThuVienVideo',$data); 
    }
}
