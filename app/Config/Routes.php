<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'HomeController::index',['filter'=>'AuthoMiddleware']);
$routes->get('/', 'HomeController::index');
$routes->get('/index_v2', 'HomeController::index_v2');

$routes->get('/home/ajax_getpaneltop', 'HomeController::ajax_getpaneltop');
$routes->get('upload/media/images/(:segment)', 'FileController::show_anh/$1');
$routes->get('upload/media/videos/(:segment)', 'FileController::show_videos/$1');
$routes->get('upload/document/(:segment)', 'FileController::show_file/$1');
$routes->post('/file/timTaiLieu', 'TaiLieuController::timTaiLieu');

$routes->get('/bv/(:any)', 'BaiDangController::show_bai_dang_id/$1');

// $routes->get('/cate/(:any)', 'BaiDangController::show_blog_danh_muc/$1');
$routes->get('/cate/(:any)', 'BaiDangController::show_blog_danh_mucPlus/$1');
$routes->get('/cate_v2/(:any)', 'BaiDangController::show_blog_danh_mucPlus_v2/$1');
// $routes->get('/ct/(:any)', 'BaiDangController::show_blog_danh_mucPlus/$1');
//$routes->get('/thu-vien-anh/(:any)', 'DaPhuongTienController::thu_vien_anh/$1');
$routes->get('/thu-vien-anh', 'DaPhuongTienController::thu_vien_anh');
$routes->get('/view/(:any)', 'DaPhuongTienController::view_thu_vien_anh/$1');

$routes->get('/thu-vien-video', 'DaPhuongTienController::thu_vien_video');
$routes->get('/video/(:any)', 'DaPhuongTienController::view_thu_vien_video/$1');

$routes->get('/tailieu_vanban', 'TaiLieuController::tailieu_vanban');
$routes->get('/gop-y', 'ThuGopYController::index');
$routes->get('/sitemap', 'HomeController::sitemap');

$routes->get('/ajax_laydsthugopy', 'ThuGopYController::ajax_laydsthugopy');
$routes->get('/admin/view_thugopy/(:any)', 'ThuGopYController::view_thugopy/$1');
$routes->post('/gop-y/add', 'ThuGopYController::add_gopy');
$routes->post('/admin/ajax_duyet_show_thu', 'ThuGopYController::ajax_duyet_show_thu');
$routes->post('/admin/ajax_Huy_duyet_thu_vien', 'ThuGopYController::ajax_Huy_duyet_thu_vien');
$routes->post('/admin/add_phan_hoi_thugopy', 'ThuGopYController::add_phan_hoi_thugopy');
$routes->get('/admin/del_thuGopy/(:any)', 'ThuGopYController::del_thuGopy/$1');
$routes->get('/admin/hopthu', 'ThuGopYController::hopthu');

$routes->get('/admin', 'UserController::index');
$routes->post('/login', 'UserController::login');
$routes->get('/dangxuat', 'UserController::logout');

$routes->get('/admin/thongtinweb', 'ThongTinWebController::index');
$routes->post('/admin/luuthongtinweb', 'ThongTinWebController::luuthongtinweb');

$routes->get('/admin/ds_taikhoan', 'UserController::ds_taikhoan');
$routes->post('/admin/add_user', 'UserController::add_user');
$routes->post('/admin/edit_user', 'UserController::edit_user');
// $routes->post('/admin/ajax_laythongtincanhan', 'UserController::ajax_laythongtincanhan');
$routes->post('/admin/ajax_laythongtincapnhat', 'UserController::ajax_laythongtincapnhat');
$routes->post('/admin/change_pass_user', 'UserController::change_pass_user');
$routes->post('/admin/lock_user', 'UserController::lock_user');
$routes->post('/admin/unlock_user', 'UserController::unlock_user');
$routes->post('/admin/del_user', 'UserController::del_user');

$routes->get('/admin/dstacvu', 'TacVuController::index');
$routes->post('/admin/ajax_ldstacvu', 'TacVuController::ajax_ldstacvu');
$routes->post('/admin/addtacvu', 'TacVuController::addtacvu');
$routes->post('/admin/xoatacvu', 'TacVuController::xoatacvu');
$routes->post('/admin/ajax_laythongtintacvu', 'TacVuController::ajax_laythongtintacvu');
$routes->post('/admin/capnhattacvu', 'TacVuController::capnhattacvu');
$routes->post('/admin/ajax_ldschucNang', 'TacVuController::ajax_ldschucNang');
$routes->get('/admin/them_quyen_cho_nhom/(:any)', 'TacVuController::them_quyen_cho_nhom/$1');
$routes->post('/admin/them_chuc_nang_vao_nhom', 'TacVuController::them_chuc_nang_vao_nhom');
$routes->post('/admin/xoa_chuc_nang_khoi_nhom', 'TacVuController::xoa_chuc_nang_khoi_nhom');
$routes->post('/admin/them_moi_nhom_quyen', 'TacVuController::them_moi_nhom_quyen');
$routes->get('/admin/nhomChucNang', 'TacVuController::nhomChucNang_dsNhomCN');
$routes->post('/admin/xoa_nhom_quyen', 'TacVuController::xoa_nhom_quyen');
$routes->post('/admin/capNhat_nhom_quyen', 'TacVuController::capNhat_nhom_quyen');

$routes->get('/admin/ds_loainguoidung', 'UserController::laydanhsachloaind');
$routes->post('/admin/addloainguoidung', 'UserController::addloainguoidung');
$routes->post('/admin/xoaloainguoidung', 'UserController::xoaloainguoidung');
$routes->post('/admin/ajax_laythongtinloainguoidung', 'UserController::ajax_laythongtinloainguoidung');
$routes->post('/admin/editloainguoidung', 'UserController::editloainguoidung');
$routes->post('/admin/themtacvuchonloaind', 'UserController::themtacvuchonloaind');
$routes->post('/admin/ajax_laydsloainguoidung', 'UserController::ajax_laydsloainguoidung');


$routes->get('/admin/vanban', 'TaiLieuController::index');
$routes->get('/admin/ajax_laydsloaitl', 'TaiLieuController::ajax_laydsloaitl');
$routes->post('/admin/addloaitailieu', 'TaiLieuController::addloaitailieu');
$routes->post('/admin/editloaitailieu', 'TaiLieuController::editloaitailieu');
$routes->post('/admin/xoaloaitailieu', 'TaiLieuController::xoaloaitailieu');
$routes->post('/admin/themmoitailieu', 'TaiLieuController::themmoitailieu');
$routes->post('/admin/ajax_laythongtintailieucapnhat', 'TaiLieuController::ajax_laythongtintailieucapnhat');
$routes->post('/admin/capnhattailieu', 'TaiLieuController::capnhattailieu');
$routes->post('/admin/xoatailieu', 'TaiLieuController::xoatailieu');



$routes->get('/admin/panel', 'PanelController::index');
$routes->post('/admin/add_panel', 'PanelController::add_panel');
$routes->get('/admin/xoa_panel', 'PanelController::xoa_panel');
$routes->post('/admin/ajax_sua_panel', 'PanelController::ajax_sua_panel');
$routes->post('/admin/sua_panel', 'PanelController::sua_panel');


$routes->get('/admin/ds_category', 'ChuyenMucController::index');
$routes->post('/admin/add_category', 'ChuyenMucController::add_category');
$routes->post('/admin/ajax_sua_category', 'ChuyenMucController::ajax_sua_category');
$routes->post('/admin/sua_category', 'ChuyenMucController::sua_category');
$routes->get('/admin/xoa_category', 'ChuyenMucController::xoa_category');



$routes->get('/admin/ds_baidang', 'BaiDangController::index');
$routes->get('/admin/add_baidang', 'BaiDangController::add_baidang');
$routes->post('/admin/save_baidang', 'BaiDangController::save_baidang');
$routes->get('admin/edit_baidang/(:any)', 'BaiDangController::edit_baidang/$1');
$routes->post('admin/ajax_duyetBaiDang', 'BaiDangController::ajax_duyetBaiDang');
$routes->post('admin/ajax_Huy_duyetBaiDang', 'BaiDangController::ajax_Huy_duyetBaiDang');
$routes->post('/admin/save_update_baidang/(:any)', 'BaiDangController::save_update_baidang/$1');
$routes->post('/admin/del_baidang/', 'BaiDangController::del_baidang');


$routes->get('/admin/daphuongtien', 'DaPhuongTienController::index');
$routes->get('/admin/view_chiTietDaPT/(:any)', 'DaPhuongTienController::view_chiTietDaPT/$1');
$routes->post('/admin/add_Item_DaPhuongTien', 'DaPhuongTienController::add_Item_DaPhuongTien');
$routes->post('/admin/add_DaPhuongTien', 'DaPhuongTienController::add_DaPhuongTien');
$routes->post('/admin/edit_DaPhuongTien', 'DaPhuongTienController::edit_DaPhuongTien');
$routes->post('/admin/ajax_xoaAnhChiTiet', 'DaPhuongTienController::ajax_xoaAnhChiTiet');
$routes->post('/admin/ajax_xoaAllAnhChiTiet', 'DaPhuongTienController::ajax_xoaAllAnhChiTiet');
$routes->post('/admin/ajax_duyetBST', 'DaPhuongTienController::ajax_duyetBST');
$routes->post('/admin/ajax_Huy_duyetBST', 'DaPhuongTienController::ajax_Huy_duyetBST');
$routes->post('/admin/ajax_layinfoBST', 'DaPhuongTienController::ajax_layinfoBST');



$routes->get('/err/page_403', (function () {
    return view('Page_403');
}));

$routes->set404Override(function () {
    echo view('Page_404');
});
