<?php
namespace App\Controllers\Client\ThuVien;
use App\Controllers\BaseController;
use App\Models\Mthuvienanh;
class CThuVienAnh extends BaseController
{
    public function index(): string
    {
        $thuvienanhModel = new Mthuvienanh();
        $data['thuvienanh'] = $thuvienanhModel->groupByDanhMucNam();

        return view('Client/ThuVien/ThuVienAnh',$data); 
    }
    public function apigetthuvienanh(): string
    {
        $thuvienanhModel = new Mthuvienanh();
        $result = $thuvienanhModel->apigetthuvienanh();
         // Khởi tạo mảng kết quả
    $groupedData = [];


    // Nhóm dữ liệu theo danh mục năm
    foreach ($result as $row) {
        $groupedData[$row['danhmucnamanh']][] = $row;
    }
        if ($groupedData) {
            return json_encode(['status' => 'success','message' => ' thành công','data' => $groupedData]);
        } else {
            return json_encode(['status' => 'error','message' => ' thất bại']);
        }
    }
}
