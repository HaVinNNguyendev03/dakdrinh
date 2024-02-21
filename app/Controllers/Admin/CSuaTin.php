<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CSuaTin extends BaseController
{
    public function index($idbaiviet): string
    {
        
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->find($idbaiviet);

        if (!$baiviet) {
            // return view('errors/html/error_404');
        }
        $data['baiviet'] = $baiviet;
        return view('Admin/SuaTin',$data);
    }
    public function getbaiviet($idbaiviet)
    {
        $baivietModel = new Mbaiviet();
        $baiviet = $baivietModel->find($idbaiviet);

        if (!$baiviet) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Bài viết không tồn tại');
        }

        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($baiviet);
    }
    public function updateBaiviet($idbaiviet)
    {
        $baivietModel = new Mbaiviet();

        // Lấy dữ liệu từ form
        $data = [
            'tieudebaiviet' => $this->request->getPost('tieudebaiviet'),
            'iddanhmuc' => $this->request->getPost('iddanhmuc'),
            'tomtatbaiviet' => $this->request->getPost('tomtatbaiviet'),
            'ngaydang' => $this->request->getPost('ngaydang'),
            'noidungbaiviet' => $this->request->getPost('noidungbaiviet'),
           
        ];

        // Gọi phương thức trong model để cập nhật thông tin bài viết
        $updated = $baivietModel->updatebaiviet($idbaiviet, $data);

        // Kiểm tra kết quả cập nhật và xử lý tương ứng
        if ($updated) {
            // Cập nhật thành công, có thể redirect hoặc trả về JSON tùy theo yêu cầu của bạn
            return $this->response->setJSON(['success' => true]);
        } else {
            // Xử lý khi cập nhật không thành công
            return $this->response->setJSON(['success' => false]);
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