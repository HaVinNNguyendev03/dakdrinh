<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\MSlogan;
use App\Services\CauhinhwebService;
class CSuaSlogan extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getSlogan($idSlogan)
    {
        $SloganModel = new MSlogan();
        $Slogan = $SloganModel->find($idSlogan);
        if (!$Slogan) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Hinh ANH không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($Slogan);
    }
    public function editSlogan($idthuvienanh)
    {
        $slogan = new MSlogan();
        // lấy dữ liệu từ view
        $data = [
            'noidungslogan' => $this->request->getPost('noidungslogan')
        ];
        //cập nhật dữ liệu
        $updated = $slogan->updateSlogan($idthuvienanh,$data);
        // validation
        if ($updated) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
    
     
}