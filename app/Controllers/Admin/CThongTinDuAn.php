<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Mthongtinduan;
use App\Services\CauhinhwebService;
class CThongTinDuAn extends BaseController
{
    public function index(): string
    {
        $duan = new Mthongtinduan();
        $data['duan'] = $duan->getAllthongtinduan();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThongTinDuAn',$data);
    }
    public function ViewAddDuAn(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThemThongTinDuAn',$data);
    }
    public function AddDuAn(){
        $duan = new Mthongtinduan();
        $dataduan = $this->request->getPost();
        $anhPath = $this->uploadImage('anhrthumnail');
        if($anhPath){
            $dataduan['anhrthumnail'] = $anhPath;
        }
        $result = $duan->addthongtinduan($dataduan);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $dataduan['anhrthumnail']]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $dataduan]);
        }
    }
    public function ViewEditDuAn($id)
    {
        $duan = new Mthongtinduan();
        $data['duan'] =  $duan->find($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SuaThongTinDuAn',$data);
    }
    public function DeleteDuAn($id)
    {
        $duan = new Mthongtinduan();
        // Kiểm tra xem có tồn tại không
        $sliderhome = $duan->find($id);
        if (!$sliderhome) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($duan->delete($id)) {
            // Nếu xóa thành công, trả về thông báo thành công
            return $this->response->setJSON(['success' => true]);
        } else {
            // Nếu xóa thất bại, trả về thông báo lỗi   
            return $this->response->setStatusCode(500)->setBody('Xóa slider thất bại');
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