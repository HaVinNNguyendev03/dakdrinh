<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Msliderlogo;
use App\Services\CauhinhwebService;
class CSliderLogo extends BaseController
{
    public function index(): string
    {
        $sliderlogo = new Msliderlogo();
        $data['sliderlogo'] = $sliderlogo->getAllsliderlogo();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SliderLogo',$data);
    }
    public function ViewAddsliderlogo(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/ThemSliderLogo',$data);
    }
    public function Addsliderlogo(){
        $sliderlogomodel = new Msliderlogo();
        $datasliderlogo = $this->request->getPost();
        $anhPath = $this->uploadImage('anhlogo');
        if($anhPath){
            $datasliderlogo['anhlogo'] = $anhPath;
        }
        $result = $sliderlogomodel->addsliderlogo($datasliderlogo);
        if ($result) {
            return json_encode(['status' => 'success','message' => 'thêm thành công', 'data' => $datasliderlogo['anhlogo']]);
        } else {
            return json_encode(['status' => 'error','message' => 'thêm thất bại', 'data' => $datasliderlogo]);
        }
    }
    public function ViewEditsliderlogo($id)
    {
        $sliderlogomodel = new Msliderlogo();
        $data['sliderlogo'] =  $sliderlogomodel->getsliderlogo($id);
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/SuaSliderLogo',$data);
    }
    public function Deletesliderlogo($id)
    {
        $sliderlogomodel = new Msliderlogo();
        // Kiểm tra xem có tồn tại không
        $sliderlogo = $sliderlogomodel->find($id);
        if (!$sliderlogo) {
            // Trả về thông báo lỗi nếu không tìm thấy
            return $this->response->setStatusCode(404)->setBody('slider không tồn tại');
        }
        // Tiến hành xóa
        if ($sliderlogomodel->delete($id)) {
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