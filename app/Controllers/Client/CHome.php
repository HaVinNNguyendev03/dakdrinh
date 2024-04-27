<?php
namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Models\Mmenu;
use App\Models\MSliderhome;
use App\Models\Mthongtinduan;
use App\Models\Mcauhinhweb;
use App\Models\MSlogan;
use App\Models\Mthuvienanh;
use App\Models\Mthuvienvideo;
use App\Models\Mslidertexthome;
use App\Models\Mtruycap;
use App\Models\Msliderlogo;
class CHome extends BaseController
{
    public function index(): string
    {
        $session = \Config\Services::session();
        if (!$session->has('ci_session')) {
            // Bật phiên
            $session->start();
        }
        $data['online'] = $session->get('online');
        // Tăng số lượt truy cập
    $accessCounterModel = new Mtruycap();
    $accessCounterModel->increaseCurrentAccess();
    $accessCounterModel->calculatePreviousDayAccess();
    $accessCounterModel->calculateWeeklyAccess();
    // Lấy số lượt truy cập hiện tại
    $currentAccess = $accessCounterModel->getCurrentAccess();
    $currentDay = $accessCounterModel->getCurrentDay();
    $currentWeek = $accessCounterModel->getTruycaptuan();
    $currentAll = $accessCounterModel->tinhtongtruycap();
    // Các xử lý khác trong trang chủ
    $data['currentAccess'] = $currentAccess;
    $data['currentDay'] = $currentDay;
    $data['currentWeek'] = $currentWeek;
    $data['totalAccess'] = $currentAll;
        $baivietmodels = new Mbaiviet();
        $data['baivietmoinhat'] = $baivietmodels->getTinMoiNhat(4);
        $iddanhmuctintuc = 2;
        $tintuc = $baivietmodels->getbaivietByMenu($iddanhmuctintuc);
        $data['tintucsukien'] = $tintuc;
        $iddanhmuchd = 3;
        $hd = $baivietmodels->getbaivietByMenu($iddanhmuchd);
        $data['hoatdong'] = $hd;
        $iddanhmuctb = 4;
        $tb = $baivietmodels->getbaivietByMenu($iddanhmuctb);
        $data['thongbao'] = $tb;
        $iddanhmucatsk = 5;
        $atsk = $baivietmodels->getbaivietByMenu($iddanhmucatsk);
        $data['atsk'] = $atsk;
        //carousel
        $sliderhome = new MSliderhome;
        $data['sliderhome'] = $sliderhome->getAllSlider();
        //thongtinduan
        $thongtinduan = new Mthongtinduan(); 
        $data['thongtinduan'] = $thongtinduan->getAllthongtinduan();
        //cauhinhweb
        $cauhinhweb = new Mcauhinhweb(); 
        $data['cauhinhweb'] = $cauhinhweb->getAllcauhinhweb();
        //slogan
        $slogan = new MSlogan();
        $data['slogan'] = $slogan->getAllslogan();
        //thu vien anh
        $thuvienanh = new Mthuvienanh();
        $data['thuvienanh'] = $thuvienanh->getAllHinhAnh();
        //thuvienvideo
        $thuvienvideo = new Mthuvienvideo();
        $data['thuvienvideo'] = $thuvienvideo->getFirstVideo();
        //logo footer
        $sliderlogo = new Msliderlogo();
        $data['sliderlogo'] = $sliderlogo->getAllsliderlogo();
        //slider text home
        $slidertexthome = new Mslidertexthome();
        $data['slidertexthome'] = $slidertexthome->getAllslidertexthome();
        $menu = new Mmenu();
        $data['menuhome'] = $menu->joinMenuVaDanhMuc();
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
