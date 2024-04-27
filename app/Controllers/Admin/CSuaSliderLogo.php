<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Msliderlogo;
use App\Services\CauhinhwebService;
class CSuaSliderLogo extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getsliderlogo($idsliderlogo)
    {
        $sliderlogoModel = new Msliderlogo();
        $sliderlogo = $sliderlogoModel->getsliderlogo($idsliderlogo);
        if (!$sliderlogo) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($sliderlogo);
    }
    public function updatesliderlogo($idsliderlogo)
    {
        $sliderlogoModel = new Msliderlogo();
        // lấy dữ liệu từ view
        $data = [
           'chuthich' => $this->request->getPost('chuthich'),
            'anhlogo' => $this->request->getPost('anhlogo'),
            'tenlogo' => $this->request->getPost('tenlogo'),
        ];
        //kiểm tra anh
        $anh = $this->request->getFile('anhlogo');
        if ($anh->isValid() && !$anh->hasMoved()) {
            $data['anhlogo'] = $this->uploadImage('anhlogo');
        } else{
            $data['anhlogo'] = null;
        }
        //cập nhật dữ liệu
        $updated = $sliderlogoModel->updatesliderlogo($idsliderlogo,$data);
        // validation
        if ($updated) {
            return $this->response->setJSON(['success' => true]);
        } else {
            
            return $this->response->setJSON(['success' => false]);
        }
    }
    
    private function uploadImage($fieldName)
    {
        $file = $this->request->getFile($fieldName);

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $newName); // Thư mục để lưu trữ ảnh
            return base_url('uploads/' . $newName); // Đường dẫn đến ảnh
        }
        return null; // Trả về null nếu có lỗi
    }
    public function xoasliderlogo($idsliderlogo)
    {
        $sliderlogoModel = new Msliderlogo();
        if ($sliderlogoModel->deletesliderlogo($idsliderlogo)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(500)->setBody('Xóa thất bại');
        }
    }
}