<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Models\Mthongtinduan;
class CBaivietchitiet extends BaseController 
{
    public function index($idbaiviet): string
    {
        
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->find($idbaiviet);
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        if (!$baiviet) {
            // return view('errors/html/error_404');
        }

        $data = [
            'baivietmoinhat' => $result,
           'baiviet' => $baiviet,
       ];

        return view('Client/baivietchitiet', $data);
    }
    public function thongtinduan($idthongtinduan): string
    {
        
        $baivietModel = new Mbaiviet();
        $thongtinduanmodel = new Mthongtinduan(); 
        $baiviet = $thongtinduanmodel->find($idthongtinduan);
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        if (!$baiviet) {
            // return view('errors/html/error_404');
        }

        $data = [
            'baivietmoinhat' => $result,
           'baiviet' => $baiviet,
       ];

        return view('Client/duanchitiet', $data);
    }
}