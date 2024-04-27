<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;

use App\Models\Mcauhinhweb;
use App\Services\CauhinhwebService;
class CSualogonameweb extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getlogonameweb($idhinhanh)
    {
        $hinhanhModel = new Mcauhinhweb();
        $hinhanh = $hinhanhModel->find($idhinhanh);
        if (!$hinhanh) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Hinh ANH không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($hinhanh);
    }
    public function editlogonameweb($idlogoweb)
    {
        $logoweb = new Mcauhinhweb();
        // lấy dữ liệu từ view
        $data = [
            'sodienthoai' => $this->request->getPost('sodienthoai'),
            'tenweb' => $this->request->getPost('tenweb'),
            'linkemail' => $this->request->getPost('linkemail'),
        ];
        $anhicon = $this->request->getFile('anhicon');
        if ($anhicon->isValid() && !$anhicon->hasMoved()) {
            // Nếu có dữ liệu, gọi hàm uploadImage() và gán đường dẫn vào $data['anhicon']
            $data['anhicon'] = $this->uploadImage('anhicon');
        } else {
            // Nếu không có dữ liệu, gán giá trị null cho $data['anhicon']
            $data['anhicon'] = null;
        }
        $anhlogo = $this->request->getFile('anhlogo');
        if ($anhlogo->isValid() && !$anhlogo->hasMoved()) {
            // Nếu có dữ liệu, gọi hàm uploadImage() và gán đường dẫn vào $data['anhlogo']
            $data['anhlogo'] = $this->uploadImage('anhlogo');
        } else {
            // Nếu không có dữ liệu, gán giá trị null cho $data['anhlogo']
            $data['anhlogo'] = null;
        }
        
        //cập nhật dữ liệu
        $updated = $logoweb->updatecauhinhweb($idlogoweb,$data);
        // validation
        if ($updated) {
            return $this->response->setJSON(['success' => true,'data' => $data]);   
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