<?php
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
/**
 * Client
 */
//demo
$routes->get('/pagedetail', 'Home::pagedetail');
//trang chu
$routes->get('/', 'Client\CHome::index');
// Tin tuc va su kien
$routes->group('tintuc', function ($routes) {
    $routes->get('/', 'Client\TinTucSuKien\CHome::index');
    $routes->get('hoatdongcongdong', 'Client\TinTucSuKien\CHoatDongCongDong::index');
    $routes->get('hoatdongnganhdien', 'Client\TinTucSuKien\CHoatDongNganhDien::index');
    $routes->get('tintucpvpower', 'Client\TinTucSuKien\CTinTucPVPower::index');
    $routes->get('tintucpvpowerdhc', 'Client\TinTucSuKien\CTinTucPVPowerDHC::index');
});
//Gioi Thieu
$routes->group('gioithieu', function ($routes) {
    $routes->get('/', 'Client\GioiThieu\CGioiThieuChung::index');
    $routes->get('gioithieuchung', 'Client\GioiThieu\CGioiThieuChung::index');
    $routes->get('banlanhdao', 'Client\GioiThieu\CBanLanhDao::index');
    $routes->get('duan', 'Client\GioiThieu\CDuAn::index');
    $routes->get('thongtindoanhnghiep', 'Client\GioiThieu\CThongTinDoanhNghiep::index');
});
//Thu Vien
$routes->group('thuvien', function ($routes) {
    $routes->get('/', 'Client\ThuVien\CThuVienAnh::index');
    $routes->get('thuvienanh', 'Client\ThuVien\CThuVienAnh::index');
    $routes->get('banlanhdao', 'Client\GioiThieu\CBanLanhDao::index');
    $routes->get('duan', 'Client\GioiThieu\CDuAn::index');
    $routes->get('thongtindoanhnghiep', 'Client\GioiThieu\CThongTinDoanhNghiep::index');
});
//admin menu
$routes->get('/dangnhap', 'Admin\CAuth::index');
$routes->post('loginauth','Admin\CAuth::loginAuth');
$routes->get('logout','Admin\CAuth::logout');
$routes->get('test','Admin\CHome::test');
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('trangchu', 'Admin\CHome::index');
    $routes->get('bieudo', 'Admin\CBieuDo::index');
    $routes->get('danhsachdangtin', 'Admin\CDanhSachDangTin::index');
    $routes->get('dangtin', 'Admin\CDangTin::index');
    $routes->get('thuvienanh', 'Admin\CThuVienAnh::index'); 
    $routes->get('danghinhanh', 'Admin\CThuVienAnh::ViewAddHinhAnh');
});
//api
$routes->post('admin/api/addbaiviet', 'Admin\CDangTin::addbaiviet');
$routes->get('admin/api/getSessionInfo', 'Admin\CAuth::getSessionInfo');
/**crud baiviet */
//baivietchitiet,xembaiviet
$routes->get('bai-viet/(:num)', 'Client\CBaivietchitiet::index/$1', ['as' => 'bai-viet.chi-tiet']);
//suabaiviet baiviet/updateBaiviet/
$routes->get('sua-bai-viet/api/getbaiviet/(:num)', 'Admin\CSuaTin::getbaiviet/$1');
$routes->post('sua-bai-viet/api/updateBaiviet/(:num)', 'Admin\CSuaTin::updateBaiviet/$1');
$routes->get('sua-bai-viet/(:num)', 'Admin\CSuaTin::index/$1', ['as' => 'sua-bai-viet']);
//xoabaiviet
$routes->delete('api/xoabaiviet/(:num)', 'Admin\CXoaTin::xoabaiviet/$1');
/**crud anh,video */
$routes->post('admin/api/danghinhanh', 'Admin\CThuVienAnh::AddHinhAnh');