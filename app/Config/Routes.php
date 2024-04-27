<?php
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Admin;
/**
 * Client
 */
//demo
$routes->get('/pagedetail', 'Home::pagedetail');
$routes->get('menu/gioithieu/(:num)', 'Client\GioiThieu\CGioiThieuChung::index/$1');
$routes->get('menu/duan/(:num)', 'Client\GioiThieu\CDuAn::index/$1');
$routes->get('menu/banlanhdao/(:any)', 'Client\GioiThieu\CBanLanhDao::index');
$routes->get('menu/lienhe/(:num)', 'Client\LienHe\CLienHe::index/$1');
$routes->get('menu/thuvienanh/(:num)', 'Client\ThuVien\CThuVienAnh::index/$1');
$routes->get('menu/thuvienvideo/(:num)', 'Client\ThuVien\CThuVienVideo::index/$1');
$routes->get('menu/(:any)/(:num)', 'Client\CDanhMuc::index/$2');
//baivietchitiet,xembaiviet

$routes->get('bai-viet/(:any)/(:num)', 'Client\CBaivietchitiet::index/$2', ['as' => 'bai-viet.chi-tiet']);
$routes->get('du-an/(:num)', 'Client\CBaivietchitiet::thongtinduan/$1', ['as' => 'du-an.chi-tiet']);
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
    $routes->get('congdong', 'Client\at_sk_mt\CCongDong::index');
    $routes->get('nguoilaodong', 'Client\at_sk_mt\CNguoiLaoDong::index');
    $routes->get('chinhsach', 'Client\at_sk_mt\CCacChinhSachMoiTruong::index');
});
//quan he co dong
$routes->group('quanhecodong', function ($routes) {
    $routes->get('/', 'Client\ThongBao\CHome::index');
    $routes->get('thongtintailieu', 'Client\QuanHeCoDong\CThongTinTaiLieu::index');
    $routes->get('daihoicodong', 'Client\QuanHeCoDong\CDaiHoiCoDong::index');
    $routes->get('baocaotaichinh', 'Client\QuanHeCoDong\CBaoCaoTaiChinh::index');
});
//Gioi Thieu
// $routes->group('gioithieu', function ($routes) {
//     $routes->get('/', 'Client\GioiThieu\CGioiThieuChung::index');
//     $routes->get('banlanhdao', 'Client\GioiThieu\CBanLanhDao::index');
//     $routes->get('duan', 'Client\GioiThieu\CDuAn::index');
//     $routes->get('thongtindoanhnghiep', 'Client\GioiThieu\CThongTinDoanhNghiep::index');
//     $routes->get('nganhnghekinhdoanh', 'Client\GioiThieu\CNganhNgheKinhDoanh::index');
//     $routes->get('lichsu', 'Client\GioiThieu\CLichSu::index');
// });
//Thu Vien
// $routes->group('thuvien', function ($routes) {
//     $routes->get('/', 'Client\ThuVien\CThuVienAnh::index');
//     $routes->get('thuvienanh', 'Client\ThuVien\CThuVienAnh::index');
//     $routes->get('thuvienvideo', 'Client\ThuVien\CThuVienVideo::index');
// });
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
    $routes->get('thuvienvideo', 'Admin\CThuVienVideo::index'); 
    $routes->get('dangvideo', 'Admin\CThuVienVideo::ViewAddVideo');
    $routes->get('sliderhome', 'Admin\CSliderHome::index');
    $routes->get('dangsliderhome', 'Admin\CSliderHome::ViewAddSliderHome');
    $routes->get('sliderlogo', 'Admin\CSliderLogo::index');
    $routes->get('dangsliderlogo', 'Admin\CSliderLogo::ViewAddsliderLogo');
    $routes->get('menu', 'Admin\CMenu::index');
    $routes->get('dangmenu', 'Admin\CMenu::ViewAdd');
    $routes->get('Themsubmenu', 'Admin\CSubmenu::ViewAdd');
    $routes->get('slidertext', 'Admin\CSlidertexthome::index');
    $routes->get('dangslidertext', 'Admin\CSlidertexthome::ViewAddslidertext');
    $routes->get('sloganhome', 'Admin\CSlogan::index');
    $routes->get('dangsloganhome', 'Admin\CSlogan::ViewAddSlogan'); 
    $routes->get('thongtinduan', 'Admin\CThongTinDuAn::index');
    $routes->get('dangthongtinduan', 'Admin\CThongTinDuAn::ViewAddDuAn');
    $routes->get('logoweb', 'Admin\CLogo_Nameweb::index');
    $routes->get('danglogoweb', 'Admin\CLogo_Nameweb::ViewAddlogoweb');
    $routes->post('import/import', 'Admin\CBieuDo::import', ['as' => 'import']);
}); 
//api   
$routes->post('admin/api/addbaiviet', 'Admin\CDangTin::addbaiviet');
$routes->get('admin/api/getSessionInfo', 'Admin\CAuth::getSessionInfo');
$routes->match(['get', 'post'], 'api/lienhe', 'Client\LienHe\CLienHe::sendMail');
//api menu 
$routes->get('api/getDanhmuc', 'Admin\CDangTin::getDanhmuc');
$routes->get('api/getMenu', 'Admin\CDangTin::getMenu');
$routes->get('api/getsubmenu/(:num)', 'Admin\CSubmenu::index/$1');
//api danhmuc
$routes->post('api/adddanhmuc', 'Admin\CSubmenu::AddDanhMuc');
/**crud baiviet */

//suabaiviet baiviet/updateBaiviet/
$routes->get('sua-bai-viet/api/getbaiviet/(:num)', 'Admin\CSuaTin::getbaiviet/$1');
$routes->post('sua-bai-viet/api/updateBaiviet/(:num)', 'Admin\CSuaTin::updateBaiviet/$1');
$routes->get('sua-bai-viet/(:num)', 'Admin\CSuaTin::index/$1', ['as' => 'sua-bai-viet']);
//xoabaiviet
$routes->delete('api/xoabaiviet/(:num)', 'Admin\CXoaTin::xoabaiviet/$1');
/**crud anh */
$routes->post('admin/api/danghinhanh', 'Admin\CThuVienAnh::AddHinhAnh');        
$routes->get('thuvienanh/gethinhanh/(:num)', 'Admin\CThuVienAnh::EditHinhAnh/$1');
$routes->get('thuvienanh/gethinhanh/api/gethinhanh/(:num)', 'Admin\CSuaHinhAnh::gethinhanh/$1');
$routes->post('thuvienanh/gethinhanh/api/edithinhanh/(:num)', 'Admin\CSuaHinhAnh::updatehinhanh/$1');
$routes->delete('api/deletedhinhanh/(:num)', 'Admin\CThuVienAnh::Deletehinhanh/$1');
/**crud video */
$routes->post('admin/api/dangvideo', 'Admin\CThuVienVideo::AddVideo');        
$routes->get('thuvienvideo/getvideo/(:num)', 'Admin\CThuVienVideo::EditVideo/$1'); //view
$routes->get('thuvienvideo/getvideo/api/getvideo/(:num)', 'Admin\CSuaVideo::getvideo/$1'); //api
$routes->post('thuvienvideo/getvideo/api/editvideo/(:num)', 'Admin\CSuaVideo::editvideo/$1');
$routes->delete('api/xoavideo/(:num)', 'Admin\CSuaVideo::xoavideo/$1');
/**crud sliderhome*/
$routes->post('admin/api/dangsliderhome', 'Admin\CSliderHome::AddSliderHome');        
$routes->get('sliderhome/getsliderhome/(:num)', 'Admin\CSliderHome::ViewEditSliderHome/$1');
$routes->get('sliderhome/getsliderhome/api/getsliderhome/(:num)', 'Admin\CSuaSliderHome::getsliderhome/$1');
$routes->post('sliderhome/getsliderhome/api/editsliderhome/(:num)', 'Admin\CSuaSliderHome::updatesliderhome/$1');
$routes->delete('api/xoasliderhome/(:num)', 'Admin\CSuaSliderHome::xoasliderhome/$1');
/**crud sliderlogo*/
$routes->post('admin/api/dangsliderlogo', 'Admin\CSliderLogo::Addsliderlogo');        
$routes->get('sliderlogo/getsliderlogo/(:num)', 'Admin\CSliderLogo::ViewEditsliderlogo/$1');
$routes->get('sliderlogo/getsliderlogo/api/getsliderlogo/(:num)', 'Admin\CSuaSliderlogo::getsliderlogo/$1');
$routes->post('sliderlogo/getsliderlogo/api/editsliderlogo/(:num)', 'Admin\CSuaSliderlogo::updatesliderlogo/$1');
$routes->delete('api/xoasliderlogo/(:num)', 'Admin\CSuaSliderlogo::xoasliderlogo/$1');
/**crud menu*/
$routes->post('api/addmenu', 'Admin\CMenu::Add');        
$routes->get('api/suamenu/(:num)', 'Admin\CMenu::ViewEdit/$1');
$routes->get('api/getdatamenu/(:num)', 'Admin\CSuamenu::getmenu/$1');
$routes->post('api/editmenu/(:num)', 'Admin\CSuamenu::editmenu/$1');
$routes->delete('api/xoamenu/(:num)', 'Admin\CMenu::Delete/$1');
/**crud danhmuc*/
$routes->post('admin/api/dangmenu', 'Admin\CMenu::Addmenu');
$routes->get('api/getdataeditdanhmuc/(:num)', 'Admin\CSubmenu::getdataeditdanhmuc/$1');        
$routes->get('api/geteditdanhmuc/(:num)', 'Admin\CSubmenu::ViewEditDanhMuc/$1');
$routes->post('api/editdanhmuc/(:num)', 'Admin\CSubmenu::updatedanhmuc/$1');
$routes->delete('api/xoadanhmuc/(:num)', 'Admin\CSubmenu::xoadanhmuc/$1');
/**crud thongtinduan */
$routes->post('admin/api/dangthongtinduan', 'Admin\CThongTinDuAn::AddDuAn');        
$routes->get('thongtinduan/dangthongtinduan/(:num)', 'Admin\CThongTinDuAn::ViewEditDuAn/$1');
$routes->get('api/getthongtinduan/(:num)', 'Admin\CSuaThongTinDuAn::getthongtinduan/$1');
$routes->post('api/editthongtinduan/(:num)', 'Admin\CSuaThongTinDuAn::editthongtinduan/$1');
$routes->delete('api/deletedthongtinduan/(:num)', 'Admin\CSuaThongTinDuAn::xoathongtinduan/$1');
/**crud slogan */
$routes->post('admin/api/dangslogan', 'Admin\CSlogan::AddSlogan');        
$routes->get('sloganhome/getsloganhome/(:num)', 'Admin\CSlogan::ViewEditSlogan/$1');
$routes->get('sloganhome/getsloganhome/api/getslogan/(:num)', 'Admin\CSuaSlogan::getSlogan/$1');
$routes->post('sloganhome/getsloganhome/api/editslogan/(:num)', 'Admin\CSuaSlogan::editSlogan/$1');
$routes->delete('api/deletedhinhanh/(:num)', 'Admin\CThuVienAnh::Deletehinhanh/$1');
/**crud slidertext*/
$routes->post('admin/api/dangslidertexthome', 'Admin\CSlidertexthome::Addslidertexthome');        
$routes->get('slidertexthome/getslidertexthome/(:num)', 'Admin\CSlidertexthome::ViewEditslidertexthome/$1');
$routes->get('slidertexthome/getslidertexthome/api/getslidertexthome/(:num)', 'Admin\CSuaslidertexthome::getslidertexthome/$1');
$routes->post('slidertexthome/getslidertexthome/api/editslidertexthome/(:num)', 'Admin\CSuaslidertexthome::editslidertexthome/$1');
$routes->delete('api/deletedhinhanh/(:num)', 'Admin\CThuVienAnh::Deletehinhanh/$1');
// crud logo va tenweb
$routes->post('admin/api/dangthongtinduan', 'Admin\CThongTinDuAn::AddDuAn');        
$routes->get('logoweb/editlogoweb/(:num)', 'Admin\CLogo_Nameweb::ViewEditLogoweb/$1');
$routes->get('api/getlogonameweb/(:num)', 'Admin\CSualogonameweb::getlogonameweb/$1');
$routes->post('logoweb/editlogoweb/api/editlogonameweb/(:num)', 'Admin\CSualogonameweb::editlogonameweb/$1');
$routes->delete('api/deletedthongtinduan/(:num)', 'Admin\CSuaThongTinDuAn::xoathongtinduan/$1');
//tinmoinhat
$routes->get('api/baivietmoinhat', 'Client\CHome::tinmoinhat'); 
$routes->get('api/getthuvienanh', 'Client\ThuVien\CThuVienAnh::apigetthuvienanh'); 