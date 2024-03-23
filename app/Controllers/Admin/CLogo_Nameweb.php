<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CLogo_Nameweb extends BaseController
{
    public function index(): string
    {
        return view('Admin/Logo_Nameweb');
    }
    public function ViewAddSliderHome(): string
    {
        return view('Admin/ThemSliderHome');
    }
    public function AddSliderHome(){
        $sliderhomemodel = new MSliderhome();
        $datasliderhome = $this->request->getPost();
        $result = $sliderhomemodel->addslider($datasliderhome);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công']);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại']);
        }
    }
    public function ViewEditSliderHome($id)
    {
        $sliderhomemodel = new MSliderhome();
        $data[''] =  $sliderhomemodel->find($id);
        return view('Admin/SuaSliderHome',$data);
    }
    public function DeleteSliderHome($id)
    {
        $sliderhomemodel = new MSliderhome();
        // Kiểm tra xem có tồn tại không
        $sliderhome = $sliderhomemodel->find($id);
        if (!$sliderhome) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($sliderhomemodel->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
        }
    }
}