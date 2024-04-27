<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mslidertexthome;
use App\Services\CauhinhwebService;
class CSuaslidertexthome extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getslidertexthome($idslidertexthome)
    {
        $slidertexthomeModel = new Mslidertexthome();
        $slidertexthome = $slidertexthomeModel->getslidertexthome($idslidertexthome);
        if (!$slidertexthome) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('Hinh ANH không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($slidertexthome);
    }
    public function editslidertexthome($idslidertexthome)
    {
        $slidertexthome = new Mslidertexthome();
        // lấy dữ liệu từ view
        $data = [
            'textsliderhome' => $this->request->getPost('textsliderhome')
        ];
        //cập nhật dữ liệu
        $updated = $slidertexthome->updateslidertexthome($idslidertexthome,$data);
        // validation
        if ($updated) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
}