<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mbaiviet;
use App\Models\Mmenu;
use App\Models\Mdanhmuc;
use App\Services\CauhinhwebService;
class CDangTin extends BaseController
{
    public function index(): string
    {
        $data = [];
        $data['session'] = session();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        $menu  = new Mmenu();
        $data['menus'] = $menu->getAllMenu();
        $danhmucs  = new Mdanhmuc();
        $data['danhmucs'] = $danhmucs->getAllDanhmuc();
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
public function getDanhmuc()
{
    $danhmucModel = new Mdanhmuc();
    $menuModel = new Mmenu();
    
    // Lấy danh mục từ cơ sở dữ liệu
    $danhmucs = $danhmucModel->getAllDanhmuc();
    
    // Tạo mảng để lưu trữ dữ liệu đã định dạng
    $danhmucData = [];

    // Lặp qua danh sách danh mục và tổ chức chúng thành các nhóm dựa trên trường idmenu
    foreach ($danhmucs as $danhmuc) {
        $idmenu = $danhmuc['idmenu'];
        $id = $danhmuc['iddanhmuc'];
        $name = $danhmuc['tendanhmuc'];

        // Lấy tendanhmuc từ bảng tbmenu
        $menu = $menuModel->getMenu($idmenu);
        $menuName = $menu ? $menu['tenmenu'] : "Không xác định";

        // Nếu nhóm với idmenu đã tồn tại, thêm danh mục vào nhóm đó
        if (isset($danhmucData[$idmenu])) {
            $danhmucData[$idmenu]['items'][] = ['id' => $id, 'name' => $name];
        } 
        // Nếu nhóm chưa tồn tại, tạo mới nhóm và thêm danh mục vào nhóm đó
        else {
            $danhmucData[$idmenu] = ['label' => $menuName, 'items' => [['id' => $id, 'name' => $name]]];
        }
    }
    // Chuyển đổi mảng kết quả thành JSON và trả về
    return $this->response->setJSON(array_values($danhmucData));
}
public function getMenu(){
    $model = new Mmenu();
    $data = $model->findAll();
    return json_encode($data);
}

}