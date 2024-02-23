<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
class CSuaHinhAnh extends BaseController
{
    public function index(): string
    {
        return view('Admin/Home');
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
    public function edithinhanh($idthuvienanh)
    {
        $thuvienanhModel = new Mthuvienanh();
        // lấy dữ liệu từ view
        $data = [
           'ngaydanganh' => $this->request->getPost('ngaydanganh'),
            'danhmucnamanh' => $this->request->getPost('danhmucnamanh'),
            'chuthichanh' => $this->request->getPost('chuthichanh'),
            'hinhanh' => $this->request->getPost('hinhanh')
        ];
        //cập nhật dữ liệu
        $updated = $thuvienanhModel->updateHinhAnh($idthuvienanh,$data);
        // validation
        if ($updated) {
           
            return $this->response->setJSON(['success' => true]);
        } else {
            
            return $this->response->setJSON(['success' => false]);
        }
    }
    
     
}