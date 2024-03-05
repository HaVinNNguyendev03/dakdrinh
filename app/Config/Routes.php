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
$routes->get('admin/bieudo/getData', 'Admin\CBieuDo::getdata');
$routes->get('bieudo/getData', 'Admin\CBieuDo::getdata');
// Tin tuc va su kien
$routes->group('tintuc', function ($routes) {
    $routes->get('/', 'Client\TinTucSuKien\CHome::index');
    $routes->get('hoatdongcongdong', 'Client\TinTucSuKien\CHoatDongCongDong::index');
    $routes->get('hoatdongnganhdien', 'Client\TinTucSuKien\CHoatDongNganhDien::index');
    $routes->get('tintucpvpower', 'Client\TinTucSuKien\CTinTucPVPower::index');
    $routes->get('tintucpvpowerdhc', 'Client\TinTucSuKien\CTinTucPVPowerDHC::index');
});
// Hoat dong san xuat kinh doanhuang
$routes->group('hdsx', function ($routes) {
    $routes->get('/', 'Client\HoatDongSXKD\CHome::index');
    $routes->get('chienluocmuctieu', 'Client\HoatDongSXKD\CChienLuocMucTieu::index');
    $routes->get('tinhhinhsx', 'Client\HoatDongSXKD\CTinhHinhSX::index');
    $routes->get('kehoachsx', 'Client\HoatDongSXKD\CKeHoachSX::index');
});
// thong bao
$routes->group('thongbao', function ($routes) {
    $routes->get('/', 'Client\ThongBao\CHome::index');
    $routes->get('thongbaodauthau', 'Client\ThongBao\CThongBaoDauThau::index');
    $routes->get('thongbaotuyendung', 'Client\ThongBao\CThongBaoTuyenDung::index');
    $routes->get('thongbaobaochi', 'Client\ThongBao\CThongBaoBaoChi::index');
});
//at-sk-mt
$routes->group('at-sk-mt', function ($routes) {
    $routes->get('/', 'Client\ThongBao\CHome::index');
    $routes->get('congdong', 'Client\ThongBao\CThongBaoDauThau::index');
    $routes->get('nguoilaodong', 'Client\ThongBao\CThongBaoTuyenDung::index');
    $routes->get('chinhsach', 'Client\ThongBao\CThongBaoBaoChi::index');
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
    $routes->get('sliderhome', 'Admin\CSliderhome::ViewAddHinhAnh');
    $routes->post('import/import', 'Admin\CBieuDo::import', ['as' => 'import']);
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
$routes->get('thuvienanh/gethinhanh/(:num)', 'Admin\CThuVienAnh::EditHinhAnh/$1');
$routes->get('thuvienanh/gethinhanh/api/gethinhanh/(:num)', 'Admin\CSuaHinhAnh::gethinhanh/$1');
$routes->post('thuvienanh/gethinhanh/api/edithinhanh/(:num)', 'Admin\CSuaHinhAnh::edithinhanh/$1');
$routes->delete('api/deletedhinhanh/(:num)', 'Admin\CThuVienAnh::Deletehinhanh/$1');
//tinmoinhat
$routes->get('api/baivietmoinhat', 'Client\CHome::tinmoinhat');