<?php 
namespace App\Controllers\Client\LienHe;
use App\Controllers\BaseController;
class CLienHe extends BaseController
{
    public function index() 
	{
        return view('Client/LienHe/LienHe');
    }
        function sendMail() { 
            // Lấy dữ liệu từ form
        $fullname = $this->request->getVar('fullname');
        $phone = $this->request->getVar('phone');
        $email = $this->request->getVar('email');
        $address = $this->request->getVar('address');
        $content = $this->request->getVar('content');
        // Kiểm tra xem bất kỳ trường nào trong form có trống không
if (empty($fullname) || empty($phone) || empty($email) || empty($address) || empty($content)) {
    // Nếu một hoặc nhiều trường trống, hiển thị thông báo thất bại
    return view('Client/LienHe/ThongBaoThatBai');
}
        // Cấu hình và gửi email
        $to = $email;
        $from = 'nguyenvanphucdev03@gmail.com';
        $subject = 'Liên Hệ Từ Web Thủy Điện';
        $message = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liên Hệ Từ Web Thủy Điện</title>
        </head>
        <body>
            <h2>Thông tin liên hệ</h2>
            <p><strong>Họ và Tên:</strong> ' . $fullname . '</p>
            <p><strong>Điện Thoại:</strong> ' . $phone . '</p>
            <p><strong>Email:</strong> ' . $email . '</p>
            <p><strong>Địa chỉ:</strong> ' . $address . '</p>
            <p><strong>Nội dung:</strong> ' . $content . '</p>
        </body>
        </html>';
        
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom($from , 'Phần Mềm Quản Lý Chứng Chỉ');
        
        $email->setSubject($subject); 
        $email->setMessage($message);
        
        if ($email->send()) 
        {
            return view('Client/LienHe/ThongBaoThanhCong');
        } 
        else 
        {
            // $data = $email->printDebugger(['headers']);
            // print_r($data);
            return view('Client/LienHe/ThongBaoThatBai');
        }
        }
}