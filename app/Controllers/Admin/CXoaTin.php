<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
class CXoaTin extends BaseController
{
    public function index(): string
    {
        return view('Admin/SuaTin');
    }
    public function xoabaiviet($idbaiviet)
    {
        
        $baivietModel = new Mbaiviet();

        // Kiểm tra xem bài viết có tồn tại không
        $baiviet = $baivietModel->find($idbaiviet);
        if (!$baiviet) {
            // Trả về thông báo lỗi nếu không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Bài viết không tồn tại');
        }
    
        // Tiến hành xóa bài viết
        if ($baivietModel->delete($idbaiviet)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi
            return $this->response->setStatusCode(500)->setBody('Xóa bài viết thất bại');
        }
    }
}