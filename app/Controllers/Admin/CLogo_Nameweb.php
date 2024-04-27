<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mcauhinhweb;
use App\Services\CauhinhwebService;
class CLogo_Nameweb extends BaseController
{
    public function index(): string
    {
        $Logowebmodel = new Mcauhinhweb();
        $data['logoweb'] =  $Logowebmodel->getAllcauhinhweb();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Logonameweb',$data);
    }
    public function ViewAddLogoweb(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThemLogonameweb',$data);
    }
    public function AddLogoweb(){
        $Logowebmodel = new Mcauhinhweb();
        $dataLogoweb = $this->request->getPost();
        $result = $Logowebmodel->addslider($dataLogoweb);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công']);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại']);
        }
    }
    public function ViewEditLogoweb($id)
    {
        $Logowebmodel = new Mcauhinhweb();
        $data['logoweb'] =  $Logowebmodel->find($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SuaLogoweb',$data);
    }
    public function DeleteLogoweb($id)
    {
        $Logowebmodel = new Mcauhinhweb();
        // Kiểm tra xem có tồn tại không
        $Logoweb = $Logowebmodel->find($id);
        if (!$Logoweb) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($Logowebmodel->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
        }
    }
}