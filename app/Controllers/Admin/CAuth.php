<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Muser;
use CodeIgniter\Log\Logger;
use App\Services\CauhinhwebService;
class CAuth extends BaseController
{
    public function index()
    {
        $data = [];
        $data['session'] = session();
        $cauhinhwebService = service('cauhinhwebService');
        $data['cauhinhweb'] = $cauhinhwebService->getAllCauhinhweb();
        return view('Admin/Auth', $data);
    }
    public function loginAuth()
    {
        // Start session
        $session = session();
        
        $UserModel = new Muser();
        $tentaikhoan = $this->request->getVar('tentaikhoan');
        $password = $this->request->getVar('matkhau');

        $userData = $UserModel->where('tentaikhoan', $tentaikhoan)->first(); // Query database

        if ($userData) {
            if ($password === $userData['matkhau']) {
                // Authentication success, save data in session
                    $sessionData = [
                        'id' => $userData['iduser'],
                        'tentaikhoan' => $userData['tentaikhoan'],
                        // Add other user data as needed
                        'isLoggedIn' => true,
                        'online' => true
                    ];
                    $session->set($sessionData);
                // Redirect to home page
                return redirect()->to('/admin/trangchu');
            } else {
                // Authentication failed
                $session->setFlashdata('msg', 'Incorrect email or password.');
                return redirect()->to('/dangnhap');
            }
        } else {
            // Authentication failed
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/dangnhap');
        }
    }
    public function logout()
    {
        $session = session();
        $sessionData = [
            'isLoggedIn' => false,
            'online' => false
        ];
        $session->set($sessionData);
        $session->destroy(); //logout session
        var_dump($sessionData);
        
        return redirect()->to('/dangnhap');
    }
    public function getSessionInfo()
{
    if (session()->has('id')) {
        $sessionData = [
            'id' => session('id'),
            'tentaikhoan' => session('tentaikhoan'),
            // Thêm dữ liệu người dùng khác nếu cần
            'isLoggedIn' => true,
            'online' => true
        ];

        // Trả về dữ liệu session dưới dạng JSON
        return $this->response->setJSON($sessionData);
    } else {
        // Nếu không có session hoặc người dùng chưa đăng nhập, trả về null
        return $this->response->setJSON(null);
    }
}
}
