<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mthuvienvideo;
use App\Services\CauhinhwebService;
class CThuVienVideo extends BaseController
{
    public function index(): string
    {
        $thuvienvideo = new Mthuvienvideo();
        $result = $thuvienvideo->getAllVideo();
        $data['video'] = $result;
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThuVienVideo',$data);
    }
    public function ViewAddVideo(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/DangVideo',$data);
    }
    public function AddVideo(){
        $thuvienvideo = new Mthuvienvideo();
        $datavideo = $this->request->getPost();
        $result = $thuvienvideo->addVideo($datavideo);
        if($result){
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $result]);
        }
        else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $result]);
        }
    }
    public function EditVideo($idvideo)
    {
        $thuvienvideo = new Mthuvienvideo();
        $data['video'] =  $thuvienvideo->find($idvideo);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SuaVideo',$data);
    }
}