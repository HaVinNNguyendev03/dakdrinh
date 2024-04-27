<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mthongtinduan;
use App\Services\CauhinhwebService;
class CSuaThongTinDuAn extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getthongtinduan($idhinhanh)
    {
        $hinhanhModel = new Mthongtinduan();
        $hinhanh = $hinhanhModel->find($idhinhanh);

        if (!$hinhanh) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Hinh ANH không tồn tại');
        }

        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($hinhanh);
    }
    public function editthongtinduan($idthuvienanh)
    {
        $thuvienanhModel = new Mthongtinduan();
        // lấy dữ liệu từ view
        $data = $this->request->getPost();
        $anhthumnailPath = $this->uploadImage('anhrthumnail');
        if ($anhthumnailPath) {
            $data['anhrthumnail'] = $anhthumnailPath;
        }
        //cập nhật dữ liệu
        $updated = $thuvienanhModel->updatethongtinduan($idthuvienanh,$data);
        var_dump($updated);
        // validation
        if ($updated) {
            return json_encode(['status' => 'success','data' => $data]);
        } else {
            
            return $this->response->setJSON(['success' => false]);
        }
    }
    public function xoathongtinduan($idthongtinduan)
    {
        $thongtinduanModel = new Mthongtinduan();
        if ($thongtinduanModel->deletethongtinduan($idthongtinduan)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(500)->setBody('Xóa thất bại');
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