<?php
    namespace App\Controllers\Admin;
   

use App\Controllers\BaseController;
use App\Models\Mmenu;

class CSuamenu extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Home',$data);
    }
    public function getmenu($idmenu)
    {
        $menuModel = new Mmenu;
        $menu = $menuModel->find($idmenu);
        if (!$menu) {
            // Xử lý khi không tìm thấy bài viết
            return $this->response->setStatusCode(404)->setBody(' không tồn tại');
        }
        // Trả về dữ liệu dưới dạng JSON
        return $this->response->setJSON($menu);
    }
    public function editmenu($idmenu)
    {
        $menu = new Mmenu;
        // lấy dữ liệu từ view
        $data = [
            'tenmenu' => $this->request->getPost('tenmenu'),
            'ghichu' => $this->request->getPost('ghichu'),
            'urlmenu' => $this->request->getPost('urlmenu')
        ];
        //cập nhật dữ liệu
        $updated = $menu->updateMenu($idmenu,$data);
        // validation
        if ($updated) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
}