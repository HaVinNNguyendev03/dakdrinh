<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\MSlogan;
use App\Services\CauhinhwebService;
class CSlogan extends BaseController
{
    public function index(): string
    {
        $slogan = new MSlogan();
        $data['slogan'] = $slogan->getAllslogan();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SloganHome',$data);
    }
    public function ViewAddSlogan(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThemSlogan',$data);
    }
    public function AddSlogan(){
        $slogan = new MSlogan();
        $dataslogan = $this->request->getPost();
        $result = $slogan->addslogan($dataslogan);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công']);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại']);
        }
    }
    public function ViewEditSlogan($id)
    {
        $slogan = new MSlogan();
        $data['slogan'] =  $slogan->find($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Suasloganhome',$data);
    }
    public function DeleteSlogan($id)
    {
        $slogan = new MSlogan();
        // Kiểm tra xem có tồn tại không
        $sliderhome = $slogan->find($id);
        if (!$sliderhome) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($slogan->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
        }
    }
}