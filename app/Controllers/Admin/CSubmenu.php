<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mdanhmuc;
use App\Services\CauhinhwebService;
class CSubmenu extends BaseController
{
    public function index($idmenu): string
    {
        $submenu = new Mdanhmuc();
        $data['submenu'] = $submenu->getDanhmucByMenu($idmenu);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Submenu',$data);
    }
    public function ViewAdd(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Themsubmenu',$data);
    }
    public function AddDanhMuc(){
        $menumodel = new Mdanhmuc();
        $idmenu = $this->request->getPost('idmenu');
        // Tạo đối tượng Mdanhmuc để tạo iddanhmuc mới
        $datamenu = [
            'tendanhmuc' => $this->request->getPost('tendanhmuc'),
            'ghichu' => $this->request->getPost('ghichu'),
            'idmenu' => $this->request->getPost('idmenu'),
            'urldanhmuc' => $this->request->getPost('urldanhmuc')
        ];
        $iddanhmuc = $menumodel->generateIdDanhmuc($idmenu);
        $datamenu['iddanhmuc'] = $iddanhmuc;
        $result = $menumodel->addDanhmuc($datamenu);      
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $result]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $result]);
        }
    }
    public function ViewEditDanhMuc($id)
    {
        $danhmucmodel = new Mdanhmuc();
        $data['danhmuc'] =  $danhmucmodel->getdanhmuc($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Suadanhmuc',$data);
    }
    public function getdataeditdanhmuc($iddanhmuc)
    {
        $danhmucModel = new Mdanhmuc();
        $danhmuc = $danhmucModel->getDanhmuc($iddanhmuc);
        if (!$danhmuc) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($danhmuc);
    }
    public function xoadanhmuc($id)
    {
        $danhmucmodel = new Mdanhmuc();
        // Kiểm tra xem có tồn tại không
        $danhmuc = $danhmucmodel->find($id);
        if (!$danhmuc) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($danhmucmodel->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
        }
    }
    public function updatedanhmuc($iddanhmuc)
    {
        $danhmucmodel = new Mdanhmuc();
        // Kiểm tra xem có tồn tại không
            // lấy dữ liệu từ view
            $data = [
                'tendanhmuc' => $this->request->getPost('tendanhmuc'),
                'ghichu' => $this->request->getPost('ghichu'),
                'urldanhmuc' => $this->request->getPost('urldanhmuc')
            ];
            //cập nhật dữ liệu
            $updated = $danhmucmodel->updateDanhmuc($iddanhmuc,$data);
            // validation
            if ($updated) {
                return $this->response->setJSON(['success' => true]);
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