<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\MBieuDo;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Services\CauhinhwebService;
class CBieuDo extends BaseController
{
    public function index(): string
    {
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/BieuDo',$data);
    }
    public function import()
    {
        $request = service('request');
        if ($request->isAJAX() && in_array($request->getMethod(), ['post', 'get'])) {
            $file = $this->request->getFile('file');
            if ($file->isValid() && $file->getClientMimeType() === 'application/vnd.ms-excel' || $file->getClientMimeType() === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                $reader = IOFactory::createReaderForFile($file);
                $spreadsheet = $reader->load($file->getPathname());
                $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                foreach ($sheetData as $key => $value) {
                    if ($key == 1) continue; // Bỏ qua hàng đầu tiên
                    // Xử lý dữ liệu từ hàng thứ 2 trở đi
                    $data = [
                        'sanluongngay' => $value['A'],
                        'mucnuocho' => $value['B'],
                        'tongluuluong' => $value['C'],
                        'sanluongthang' => $value['D'],
                        'sanluongquy' => $value['E'],
                        'sanluongnam' => $value['F'],
                        'ngaynhaplieu' => $value['G'],
                        'thangnhaplieu' => $value['H'],
                        'quynhaplieu' => $value['I'],
                        'namnhaplieu' => $value['J']
                    ];
                    $bieudoModel = new MBieuDo();
                    $bieudoModel->insert($data);
                }
                return redirect()->to(site_url('/admin/bieudo'))->with('success', 'Dữ liệu đã được nhập thành công');
            }
        }
        return redirect()->to(site_url('/admin/bieudo'))->with('error', 'Không thể nhập dữ liệu');
    }
    public function getdata()
    {
        $bieudoModel = new MBieuDo();
        $databieudo = $bieudoModel->orderBy('idbieudothuydien', 'DESC')->first();
        return $this->response->setJSON($databieudo);
    }
}