<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mmenu;
class CMenu extends BaseController
{
    public function index(): string
    {
        $menu = new Mmenu();
        $data['menu'] = $menu->getAllMenu();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Menu',$data);
    }
    public function ViewAdd(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Themmenu',$data);
    }
    public function Add(){
        $menumodel = new Mmenu();
        $datamenu = $this->request->getPost();
        $result = $menumodel->addMenu($datamenu);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $datamenu]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $datamenu]);
        }
    }
    public function ViewEdit($id)
    {
        $menumodel = new Mmenu();
        $data['menu'] =  $menumodel->getMenu($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Suamenu',$data);
    }
    public function Delete($id)
    {
        $menumodel = new Mmenu();
        // Kiểm tra xem có tồn tại không
        $menu = $menumodel->find($id);
        if (!$menu) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('menu không tồn tại');
        }
        // Tiến hành xóa
        if ($menumodel->deleteMenu($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa menu thất bại');
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