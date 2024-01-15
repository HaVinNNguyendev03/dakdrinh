<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Muser;
class CAuth extends BaseController
{
    public function index()
    {
        $data = [];
        $data['session'] = session();
        return view('Admin/Auth',$data);
    }
    public function loginAuth()
{
    // Start session
    $session = session();
    $UserModel = new Muser();
    
    $tentaikhoan = $this->request->getVar('tentaikhoan');
    $matkhau = $this->request->getVar('matkhau');
    
    $userData = $UserModel->where('tentaikhoan', $tentaikhoan)->first(); // Query database
    
    if ($userData) {
        if ($matkhau === $userData['matkhau']) {
            // Authentication success, save data in session
            $sessionData = [
                'id' => $userData['iduser'],
                'tentaikhoan' => $userData['tentaikhoan'],
                // Add other user data as needed
                'isLoggedIn' => true,
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
    ];
    $session->set($sessionData);
      $session->destroy(); //logout session
      return redirect()->to('/dangnhap');
  }
}
