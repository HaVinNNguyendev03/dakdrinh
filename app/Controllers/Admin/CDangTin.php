<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Model\Mbaiviet;
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
        // Lấy dữ liệu từ request AJAX
        $data = [
            'iddanhmuc' => $this->request->getPost('iddanhmuc'),
            'tieudebaiviet' => $this->request->getPost('tieudebaiviet'),
            'tomtatbaiviet' => $this->request->getPost('tomtatbaiviet'),
            'anhrthumnail' => $this->request->getPost('anhrthumnail'),
            'noidungbaiviet' => $this->request->getPost('noidungbaiviet'),
            'ngaydang' => $this->request->getPost('ngaydang'),
            // Bổ sung các trường còn lại tương ứng với dữ liệu của bảng
        ];

        // Lưu vào cơ sở dữ liệu sử dụng model
        $model = new Mbaiviet();
        $result = $model->addbaiviet($data);

        // Trả về phản hồi cho client (nếu cần)
        if ($result) {
            return json_encode(['status' => 'success', 'message' => 'Thêm bài viết thành công']);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Thêm bài viết thất bại']);
        }
    }
}