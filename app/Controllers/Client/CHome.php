<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CHome extends BaseController
{
    public function index(): string
    {
        $baivietmodels = new Mbaiviet();
        $data['baivietmoinhat'] = $baivietmodels->getTinMoiNhat(4);
        $iddanhmuctintuc = ['201','202','203','204'];
        $tintuc = $baivietmodels->getbaivietDanhMuc($iddanhmuctintuc);
        $data['tintucsukien'] = $tintuc;
        $iddanhmuchd = ['301','302','303'];
        $hd = $baivietmodels->getbaivietDanhMuc($iddanhmuchd);
        $data['hoatdong'] = $hd;
        $iddanhmuctb = ['401','402','403'];
        $tb = $baivietmodels->getbaivietDanhMuc($iddanhmuctb);
        $data['thongbao'] = $tb;
        $iddanhmucatsk = ['501','502','503'];
        $atsk = $baivietmodels->getbaivietDanhMuc($iddanhmucatsk);
        $data['atsk'] = $atsk;
        return view('Client/home',$data);
    }
    public function tinmoinhat()
    {
        $baivietmodels = new Mbaiviet();
        $data = $baivietmodels->getTinMoiNhat(4);
        if ($data){
            return json_encode(['status' => 'success', 'data' => $data]);
        }
        else{
            
            return json_encode(['status' => 'flase', 'message' => 'khong co bai viet']);
        }
    }
}
