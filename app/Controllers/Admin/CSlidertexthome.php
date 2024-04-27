<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mslidertexthome;
use App\Services\CauhinhwebService;
class CSlidertexthome extends BaseController
{
    public function index(): string
    {
        $slidertexthome = new Mslidertexthome();
        $data['slidertexthome'] = $slidertexthome->getAllslidertexthome();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/slidertexthome',$data);
    }
    public function ViewAddslidertext(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Themslidertexthome',$data);
    }
    public function Addslidertexthome(){
        $slidertexthomemodel = new Mslidertexthome();
        $dataslidertexthome = $this->request->getPost();
        $anhPath = $this->uploadImage('anhtext');
        if($anhPath){
            $dataslidertexthome['anhtext'] = $anhPath;
        }
        $result = $slidertexthomemodel->addslidertexthome($dataslidertexthome);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $dataslidertexthome['anhtext']]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $dataslidertexthome]);
        }
    }
    public function ViewEditslidertexthome($id)
    {
        $slidertexthomemodel = new Mslidertexthome();
        $data['slidertexthome'] =  $slidertexthomemodel->getslidertexthome($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Suaslidertexthome',$data);
    }
    public function Deleteslidertexthome($id)
    {
        $slidertexthomemodel = new Mslidertexthome();
        // Kiểm tra xem có tồn tại không
        $slidertexthome = $slidertexthomemodel->find($id);
        if (!$slidertexthome) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($slidertexthomemodel->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
        }
    }
    private function uploadImage($fieldName)
    {
        $file = $this->request->getFile($fieldName);

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH  . 'uploads', $newName); // Thư mục để lưu trữ ảnh
            return base_url('uploads/' . $newName); // Đường dẫn đến ảnh
        }
        return null; // Trả về null nếu có lỗi
    }
}