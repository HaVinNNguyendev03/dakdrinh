<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
use App\Services\CauhinhwebService;
class CSuaHinhAnh extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function gethinhanh($idhinhanh)
    {
        $hinhanhModel = new Mthuvienanh();
        $hinhanh = $hinhanhModel->find($idhinhanh);
        if (!$hinhanh) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Hinh ANH không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($hinhanh);
    }
    public function updatehinhanh($idthuvienanh)
    {
        $thuvienanhModel = new Mthuvienanh();
        // lấy dữ liệu từ view
        $data = [
           'ngaydanganh' => $this->request->getPost('ngaydanganh'),
            'danhmucnamanh' => $this->request->getPost('danhmucnamanh'),
            'chuthichanh' => $this->request->getPost('chuthichanh'),
            'hinhanh' => $this->request->getPost('hinhanh')
        ];
        $anhPath = $this->uploadImage('hinhanh');
        if($anhPath){
            $data['hinhanh'] = $anhPath;
        }
        //cập nhật dữ liệu
        $updated = $thuvienanhModel->updateHinhAnh($idthuvienanh,$data);
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
            $file->move(FCPATH  . 'uploads', $newName); // Thư mục để lưu trữ ảnh
            return base_url('uploads/' . $newName); // Đường dẫn đến ảnh
        }
        return null; // Trả về null nếu có lỗi
    }
}