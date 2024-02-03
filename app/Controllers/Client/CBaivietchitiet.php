<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CBaivietchitiet extends BaseController
{
    public function index($idbaiviet): string
    {
        
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->find($idbaiviet);

        if (!$baiviet) {
            // return view('errors/html/error_404');
        }

        $data['baiviet'] = $baiviet;

        return view('Client/baivietchitiet', $data);
    }
}