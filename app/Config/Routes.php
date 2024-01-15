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
//admin
$routes->get('/dangnhap', 'Admin\CAuth::index');
$routes->post('loginauth','Admin\CAuth::loginAuth');
$routes->get('logout','Admin\CAuth::logout');
$routes->get('test','Admin\CHome::test');
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('trangchu', 'Admin\CHome::index');
    $routes->get('bieudo', 'Admin\CBieuDo::index');
    $routes->get('danhsachdangtin', 'Admin\CDanhSachDangTin::index');
    $routes->get('dangtin', 'Admin\CDangTin::index');
});
//api
$routes->post('api/admin/addbaiviet', 'Admin\CDangTin::addbaiviet');