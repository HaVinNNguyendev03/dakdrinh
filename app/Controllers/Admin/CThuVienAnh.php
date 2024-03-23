<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
class CThuVienAnh extends BaseController
{
    public function index(): string
    {
        $thuvienanhmodel = new Mthuvienanh();
        $data['thuvienanh'] = $thuvienanhmodel->getAllHinhAnh();
        return view('Admin/ThuVienAnh',$data);
    }
    public function ViewAddHinhAnh(): string
    {
        return view('Admin/DangHinhAnh');
    }
    // public function AddHinhAnh(){
    //     $thuvienanhmodel = new Mthuvienanh();
    //     $datahinhanh = $this->request->getPost();
    //     $result = $thuvienanhmodel->addHinhAnh($datahinhanh);
    //     if ($result) {
    //         return json_encode(['status' => 'success','message' => 'thêm bài viết thành công']);
    //     } else {
    //         return json_encode(['status' => 'error','message' => 'thêm bài viết thất bại']);
    //     }
    // }
    public function AddHinhAnh(){
        $thuvienanhmodel = new Mthuvienanh();
        $datahinhanh = $this->request->getPost();
        $anhPath = $this->uploadImage('hinhanh');
        if($anhPath){
            $datahinhanh['hinhanh'] = $anhPath;
        }
        $result = $thuvienanhmodel->addHinhAnh($datahinhanh);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $datahinhanh['hinhanh']]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $datahinhanh]);
        }
    }
    public function EditHinhAnh($idhinhanh)
    {
        $thuvienanhmodel = new Mthuvienanh();
        $data['hinhanh'] =  $thuvienanhmodel->find($idhinhanh);
        return view('Admin/SuaHinhAnh',$data);
    }
    public function Deletehinhanh($idhinhanh)
    {
        $thuvienanhmodel = new Mthuvienanh();
        // Kiểm tra xem bài viết có tồn tại không
        $thuvienanh = $thuvienanhmodel->find($idhinhanh);
        if (!$thuvienanh) {
            // Trả về thông báo lỗi nếu không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Anh không tồn tại');
        }
        // Tiến hành xóa bài viết
        if ($thuvienanhmodel->delete($idhinhanh)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa Anh thất bại');
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