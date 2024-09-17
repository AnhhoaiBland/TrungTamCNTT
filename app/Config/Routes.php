<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Routes
$routes->get('/', 'HomeController::index');
$routes->get('/index_v2', 'HomeController::index_v2');
$routes->get('/home/ajax_getpaneltop', 'HomeController::ajax_getpaneltop');
$routes->get('upload/media/images/(:segment)', 'FileController::show_anh/$1');
$routes->get('upload/media/videos/(:segment)', 'FileController::show_videos/$1');
$routes->get('upload/document/(:segment)', 'FileController::show_file/$1');
$routes->post('/file/timTaiLieu', 'TaiLieuController::timTaiLieu');
$routes->get('/bv/(:any)', 'BaiDangController::show_bai_dang_id/$1');
$routes->get('/cate/(:any)', 'BaiDangController::show_blog_danh_mucPlus/$1');
$routes->get('/cate_v2/(:any)', 'BaiDangController::show_blog_danh_mucPlus_v2/$1');
$routes->get('/thu-vien-anh', 'DaPhuongTienController::thu_vien_anh');
$routes->get('/view/(:any)', 'DaPhuongTienController::view_thu_vien_anh/$1');
$routes->get('/thu-vien-video', 'DaPhuongTienController::thu_vien_video');
$routes->get('/video/(:any)', 'DaPhuongTienController::view_thu_vien_video/$1');
$routes->get('/tailieu_vanban', 'TaiLieuController::tailieu_vanban');
$routes->get('/gop-y', 'ThuGopYController::index');
$routes->get('/sitemap', 'HomeController::sitemap');
$routes->get('/err/page_403', (function () {
    return view('Page_403');
}));
$routes->set404Override(function () {
    echo view('Page_404');
});

// AJAX Routes
$routes->get('/ajax_laydsthugopy', 'ThuGopYController::ajax_laydsthugopy');
$routes->post('/gop-y/add', 'ThuGopYController::add_gopy');
$routes->post('/admin/ajax_duyet_show_thu', 'ThuGopYController::ajax_duyet_show_thu');
$routes->post('/admin/ajax_Huy_duyet_thu_vien', 'ThuGopYController::ajax_Huy_duyet_thu_vien');
$routes->post('/admin/add_phan_hoi_thugopy', 'ThuGopYController::add_phan_hoi_thugopy');
$routes->post('/admin/ajax_ldstacvu', 'TacVuController::ajax_ldstacvu');
$routes->post('/admin/ajax_laythongtintacvu', 'TacVuController::ajax_laythongtintacvu');
$routes->post('/admin/ajax_ldschucNang', 'TacVuController::ajax_ldschucNang');
$routes->post('/admin/ajax_laythongtincanhan', 'UserController::ajax_laythongtincanhan');
$routes->post('/admin/ajax_laythongtincapnhat', 'UserController::ajax_laythongtincapnhat');
$routes->post('/admin/ajax_laydsloainguoidung', 'UserController::ajax_laydsloainguoidung');
$routes->post('/admin/ajax_laythongtinloainguoidung', 'UserController::ajax_laythongtinloainguoidung');
$routes->post('/admin/ajax_laythongtintailieucapnhat', 'TaiLieuController::ajax_laythongtintailieucapnhat');
$routes->post('/admin/ajax_xoaAnhChiTiet', 'DaPhuongTienController::ajax_xoaAnhChiTiet');
$routes->post('/admin/ajax_xoaAllAnhChiTiet', 'DaPhuongTienController::ajax_xoaAllAnhChiTiet');
$routes->post('/admin/ajax_duyetBST', 'DaPhuongTienController::ajax_duyetBST');
$routes->post('/admin/ajax_Huy_duyetBST', 'DaPhuongTienController::ajax_Huy_duyetBST');
$routes->post('/admin/ajax_layinfoBST', 'DaPhuongTienController::ajax_layinfoBST');

// Admin Routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'UserController::index');
    $routes->get('/dangxuat', 'UserController::logout');
    
    $routes->get('/thongtinweb', 'ThongTinWebController::index');
    $routes->post('/luuthongtinweb', 'ThongTinWebController::luuthongtinweb');
    
    $routes->get('/ds_taikhoan', 'UserController::ds_taikhoan');
    $routes->post('/add_user', 'UserController::add_user');
    $routes->post('/edit_user', 'UserController::edit_user');
    $routes->post('/change_pass_user', 'UserController::change_pass_user');
    $routes->post('/lock_user', 'UserController::lock_user');
    $routes->post('/unlock_user', 'UserController::unlock_user');
    $routes->post('/del_user', 'UserController::del_user');
    
    $routes->get('/dstacvu', 'TacVuController::index');
    $routes->post('/addtacvu', 'TacVuController::addtacvu');
    $routes->post('/xoatacvu', 'TacVuController::xoatacvu');
    $routes->post('/capnhattacvu', 'TacVuController::capnhattacvu');
    $routes->get('/them_quyen_cho_nhom/(:any)', 'TacVuController::them_quyen_cho_nhom/$1');
    $routes->post('/them_chuc_nang_vao_nhom', 'TacVuController::them_chuc_nang_vao_nhom');
    $routes->post('/xoa_chuc_nang_khoi_nhom', 'TacVuController::xoa_chuc_nang_khoi_nhom');
    $routes->post('/them_moi_nhom_quyen', 'TacVuController::them_moi_nhom_quyen');
    $routes->get('/nhomChucNang', 'TacVuController::nhomChucNang_dsNhomCN');
    $routes->post('/xoa_nhom_quyen', 'TacVuController::xoa_nhom_quyen');
    $routes->post('/capNhat_nhom_quyen', 'TacVuController::capNhat_nhom_quyen');
    
    $routes->get('/ds_loainguoidung', 'UserController::laydanhsachloaind');
    $routes->post('/addloainguoidung', 'UserController::addloainguoidung');
    $routes->post('/xoaloainguoidung', 'UserController::xoaloainguoidung');
    $routes->post('/editloainguoidung', 'UserController::editloainguoidung');
    $routes->post('/themtacvuchonloaind', 'UserController::themtacvuchonloaind');
    
    $routes->get('/vanban', 'TaiLieuController::index');
    $routes->get('/ajax_laydsloaitl', 'TaiLieuController::ajax_laydsloaitl');
    $routes->post('/addloaitailieu', 'TaiLieuController::addloaitailieu');
    $routes->post('/editloaitailieu', 'TaiLieuController::editloaitailieu');
    $routes->post('/xoaloaitailieu', 'TaiLieuController::xoaloaitailieu');
    $routes->post('/themmoitailieu', 'TaiLieuController::themmoitailieu');
    $routes->post('/capnhattailieu', 'TaiLieuController::capnhattailieu');
    $routes->post('/xoatailieu', 'TaiLieuController::xoatailieu');
    
    $routes->get('/panel', 'PanelController::index');
    $routes->post('/add_panel', 'PanelController::add_panel');
    $routes->get('/xoa_panel', 'PanelController::xoa_panel');
    $routes->post('/sua_panel', 'PanelController::sua_panel');
    
    $routes->get('/ds_category', 'ChuyenMucController::index');
    $routes->post('/add_category', 'ChuyenMucController::add_category');
    $routes->post('/sua_category', 'ChuyenMucController::sua_category');
    $routes->get('/xoa_category', 'ChuyenMucController::xoa_category');
    
    $routes->get('/ds_baidang', 'BaiDangController::index');
    $routes->get('/add_baidang', 'BaiDangController::add_baidang');
    $routes->post('/save_baidang', 'BaiDangController::save_baidang');
    $routes->get('/edit_baidang/(:any)', 'BaiDangController::edit_baidang/$1');
    $routes->post('/save_update_baidang/(:any)', 'BaiDangController::save_update_baidang/$1');
    $routes->get('/delete_baidang/(:any)', 'BaiDangController::delete_baidang/$1');
    $routes->post('/duyet_baidang', 'BaiDangController::duyet_baidang');
    $routes->post('/huy_duyet_baidang', 'BaiDangController::huy_duyet_baidang');
    
    $routes->get('/thu_gopy', 'ThuGopYController::index');
    $routes->post('/delete_gopy', 'ThuGopYController::delete_gopy');
    $routes->post('/duyet_gopy', 'ThuGopYController::duyet_gopy');
    $routes->post('/huy_duyet_gopy', 'ThuGopYController::huy_duyet_gopy');
    $routes->post('/them_phan_hoi', 'ThuGopYController::them_phan_hoi');
    
    $routes->get('/thong_ke', 'ThongKeController::index');
    $routes->post('/ajax_thongke', 'ThongKeController::ajax_thongke');
    
    $routes->get('/banner', 'BannerController::index');
    $routes->post('/add_banner', 'BannerController::add_banner');
    $routes->post('/edit_banner', 'BannerController::edit_banner');
    $routes->post('/delete_banner', 'BannerController::delete_banner');
    
    $routes->get('/thu-vien', 'DaPhuongTienController::index');
    $routes->post('/upload_anh', 'DaPhuongTienController::upload_anh');
    $routes->post('/upload_video', 'DaPhuongTienController::upload_video');
    $routes->post('/upload_file', 'DaPhuongTienController::upload_file');
    $routes->post('/xoa_anh', 'DaPhuongTienController::xoa_anh');
    $routes->post('/xoa_all_anh', 'DaPhuongTienController::xoa_all_anh');
    $routes->post('/duyet_anh', 'DaPhuongTienController::duyet_anh');
    $routes->post('/huy_duyet_anh', 'DaPhuongTienController::huy_duyet_anh');
    
    $routes->get('/danh_sach', 'DanhSachController::index');
    $routes->post('/add_danh_sach', 'DanhSachController::add_danh_sach');
    $routes->post('/edit_danh_sach', 'DanhSachController::edit_danh_sach');
    $routes->post('/delete_danh_sach', 'DanhSachController::delete_danh_sach');
});

