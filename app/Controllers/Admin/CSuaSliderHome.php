<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\MSliderhome;
use App\Services\CauhinhwebService;
class CSuaSliderHome extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getsliderhome($idsliderhome)
    {
        $sliderhomeModel = new MSliderhome();
        $sliderhome = $sliderhomeModel->find($idsliderhome);

        if (!$sliderhome) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('không tồn tại');
        }

        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($sliderhome);
    }
    public function updatesliderhome($idsliderhome)
    {
        $sliderhomeModel = new MSliderhome();
        // lấy dữ liệu từ view
        $data = [
           'chuthichanhsliderhome' => $this->request->getPost('chuthichanhsliderhome'),
            'anhsliderhome' => $this->request->getPost('anhsliderhome'),
        ];
        //kiểm tra anh
        $anh = $this->request->getFile('anhsliderhome');
        if ($anh->isValid() && !$anh->hasMoved()) {
            $data['anhsliderhome'] = $this->uploadImage('anhsliderhome');
        } else{
            $data['anhsliderhome'] = null;
        }
        //cập nhật dữ liệuƯ
        $updated = $sliderhomeModel->updateslider($idsliderhome,$data);
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
    public function xoasliderhome($idsliderhome)
    {
        $sliderhomeModel = new MSliderhome();
        if ($sliderhomeModel->deleteslider($idsliderhome)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(500)->setBody('Xóa thất bại');
        }
    }
}