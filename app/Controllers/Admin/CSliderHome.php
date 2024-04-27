<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\MSliderhome;
use App\Services\CauhinhwebService;
class CSliderHome extends BaseController
{
    public function index(): string
    {
        $sliderhome = new MSliderHome();
        $data['sliderhome'] = $sliderhome->getAllSlider();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SliderHome',$data);
    }
    public function ViewAddSliderHome(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThemSliderHome',$data);
    }
    public function AddSliderHome(){
        $sliderhomemodel = new MSliderhome();
        $datasliderhome = $this->request->getPost();
        $anhPath = $this->uploadImage('anhsliderhome');
        if($anhPath){
            $datasliderhome['anhsliderhome'] = $anhPath;
        }
        $result = $sliderhomemodel->addslider($datasliderhome);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $datasliderhome['anhsliderhome']]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $datasliderhome]);
        }
    }
    public function ViewEditSliderHome($id)
    {
        $sliderhomemodel = new MSliderhome();
        $data['sliderhome'] =  $sliderhomemodel->find($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SuaSliderHome',$data);
    }
    public function DeleteSliderHome($id)
    {
        $sliderhomemodel = new MSliderhome();
        // Kiểm tra xem có tồn tại không
        $sliderhome = $sliderhomemodel->find($id);
        if (!$sliderhome) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($sliderhomemodel->delete($id)) {
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