<?php
namespace App\Controllers\Client\GioiThieu;
use App\Controllers\BaseController;
use App\Models\Mthongtinduan;
use App\Models\Mbaiviet;
class CDuAn extends BaseController
{
    public function index(): string
    {
        $baivietModel = new Mbaiviet();
        $thongtinduanmodel = new Mthongtinduan();
        $sobaiviet = 5;
        $result =  $baivietModel->getTinMoiNhat($sobaiviet);
        $baiviets = $thongtinduanmodel->findAll();
        $data = [
             'baivietmoinhat' => $result,
            'baiviet' => $baiviets,
        ];
        return view('Client/GioiThieu/DuAn',$data);
    }
}