<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mthuvienvideo;
use App\Services\CauhinhwebService;

class CSuaVideo extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getvideo($idvideo)
    {
       $thuvienvideo = new Mthuvienvideo();
        $video = $thuvienvideo->find($idvideo);

        if (!$video) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody('không tồn tại');
        }

        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($video);
    }
    public function editvideo($idvideo)
    {
        $thuvienvideo = new Mthuvienvideo();
        // lấy dữ liệu từ view
        $data = [
           'tenvideo' => $this->request->getPost('tenvideo'),
            'linkvideo' => $this->request->getPost('linkvideo'),
        ];
        //cập nhật dữ liệu
        $updated = $thuvienvideo->updateVideo($idvideo,$data);
        // validation
        if ($updated) {
           
            return $this->response->setJSON(['success' => true]);
        } else {
            
            return $this->response->setJSON(['success' => false]);
        }
    }
    public function xoavideo($idvideo)
    {
        $thuvienvideo = new Mthuvienvideo();
        if ($thuvienvideo->deleteVideo($idvideo)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(500)->setBody('Xóa thất bại');
        }
    }
     
}