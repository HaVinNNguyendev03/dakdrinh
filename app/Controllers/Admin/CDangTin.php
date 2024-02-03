<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CDangTin extends BaseController
{
    public function index(): string
    {
        $data = [];
        $data['session'] = session();
        return view('Admin/DangTin', $data);
    }
    public function addbaiviet()
    {
        $baivietModel = new Mbaiviet();
        $data = $this->request->getPost();
        $anhthumnailPath = $this->uploadImage('anhrthumnail');
        if ($anhthumnailPath) {
            $data['anhrthumnail'] = $anhthumnailPath;
        }
        $result = $baivietModel->addbaiviet($data);

        // Trả về phản hồi cho client (nếu cần)
        if ($result) {
            return json_encode(['status' => 'success', 'message' => 'Thêm bài viết thành công','data' =>  $data['anhrthumnail']]);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Thêm bài viết thất bại']);
        }
    }
     //Hàm tải ảnh lên và trả về đường dẫn
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
     private function uploadFile($fieldName)
{
    $file = $this->request->getFile($fieldName);
   
    if ($file->isValid() && !$file->hasMoved()) {
        $allowedTypes = ['pdf', 'doc', 'docx']; // Các loại file được phép
        $ext = $file->guessExtension();

        if (in_array($ext, $allowedTypes)) {
            $newName = $file->getRandomName();
            $file->move(FCPATH  . 'uploads', $newName); // Thư mục để lưu trữ file

            return base_url('uploads/' . $newName); // Đường dẫn đến file
        } else {
            // Loại file không được phép
            return null;
        }
    } 

    return  var_dump($file); // Trả về null nếu có lỗi
}
}