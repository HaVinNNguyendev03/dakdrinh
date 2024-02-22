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
    public function AddHinhAnh(){
        $thuvienanhmodel = new Mthuvienanh();
        $datahinhanh = $this->request->getPost();
        $result = $thuvienanhmodel->addHinhAnh($datahinhanh);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm bài viết thành công']);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm bài viết thất bại']);
        }
    }
}