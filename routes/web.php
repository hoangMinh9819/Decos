<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuanTriVienController;
use App\Http\Controllers\DanhMucSanPhamController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\QuanlisanphamController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\ThanhToanController;
use App\Http\Controllers\AllTinTucController;


//Khach Hang
Route::get('/trang_chu',[TrangChuController::class, 'trang_chu']);
Route::get('/dang_xuat',[TrangChuController::class, 'dang_xuat']);
Route::get('/dang_nhap',[TrangChuController::class, 'dang_nhap']);
Route::post('/dang_ky',[TrangChuController::class, 'dang_ky']);
Route::post('/kiem_tra_dang_nhap',[TrangChuController::class, 'kiem_tra_dang_nhap']);

//Hiển thị các sản phẩm thuộc danh mục.
Route::get('/the_loai_san_pham/{id}',[TrangChuController::class, 'the_loai_san_pham']);
//Hiển thị chi tiết sản phẩm.
Route::get('/chi_tiet_san_pham/{id}',[TrangChuController::class, 'chi_tiet_san_pham']);
//Hiển thị tất cả sản phẩm.
Route::get('/tat_ca_san_pham',[TrangChuController::class, 'tat_ca_san_pham']);
//Hiển thị chi tiết tin tức
Route::get('/chi_tiet_tin_tuc/{id}',[TrangChuController::class, 'chi_tiet_tin_tuc']);
//Hiển thị tất cả tin tức
Route::get('/tat_ca_tin_tuc',[TrangChuController::class, 'tat_ca_tin_tuc']);
Route::get('/the_loai_tin_tuc/{id}',[TrangChuController::class, 'the_loai_tin_tuc']);

//Lưu vào giỏ hàng.
Route::post('/luu_gio_hang',[GioHangController::class, 'luu_gio_hang']);
Route::get('/hien_thi_gio_hang',[GioHangController::class, 'hien_thi_gio_hang']);
Route::get('/xoa_gio_hang/{id}',[GioHangController::class, 'xoa_gio_hang']);
Route::post('/cap_nhat_so_luong',[GioHangController::class, 'cap_nhat_so_luong']);

//Thanh Toán
Route::get('/dang_nhap_thanh_toan',[ThanhToanController::class,'dang_nhap_thanh_toan']);
Route::get('/thanh_toan',[ThanhToanController::class,'thanh_toan']);
Route::post('/luu_thanh_toan',[ThanhToanController::class, 'luu_thanh_toan']);

//Nhan Vien
Route::get('/ho_so_nhan_vien',[NhanVienController::class, 'ho_so_nhan_vien']);

//Danh Mục Sản Phẩm
Route::get('/them_danh_muc',[DanhMucSanPhamController::class, 'them_danh_muc']);
Route::get('/sua_danh_muc/{id}',[DanhMucSanPhamController::class, 'sua_danh_muc']);
Route::get('/xoa_danh_muc/{id}',[DanhMucSanPhamController::class, 'xoa_danh_muc']);
Route::get('/liet_ke_danh_muc',[DanhMucSanPhamController::class, 'liet_ke_danh_muc']);
Route::post('/luu_danh_muc',[DanhMucSanPhamController::class, 'luu_danh_muc']);
Route::post('/cap_nhat_danh_muc/{id}',[DanhMucSanPhamController::class, 'cap_nhat_danh_muc']);
Route::post('/search_danh_muc', [DanhMucSanPhamController::class, 'search_danh_muc']);

//Danh Mục Khách Hàng
Route::get('/sua_khach_hang/{id}',[KhachhangController::class, 'sua_khach_hang']);
Route::get('/xoa_khach_hang/{id}',[KhachhangController::class, 'xoa_khach_hang']);
Route::get('/liet_ke_khach_hang',[KhachhangController::class, 'liet_ke_khach_hang']);
Route::post('/luu_khach_hang',[KhachhangController::class, 'luu_khach_hang']);
Route::post('/cap_nhat_khach_hang/{id}',[KhachhangController::class, 'cap_nhat_khach_hang']);
Route::post('/search_khach_hang', [KhachhangController::class, 'search_khach_hang']);


//Quan Tri Vien
Route::get('/ho_so_quan_tri_vien',[QuanTriVienController::class, 'ho_so_quan_tri_vien']);
Route::get('/them_nhan_vien',[QuanTriVienController::class, 'them_nhan_vien']);
Route::post('/luu_nhan_vien',[QuanTriVienController::class, 'luu_nhan_vien']);
Route::get('/sua_nhan_vien/{id}',[QuanTriVienController::class, 'sua_nhan_vien']);
Route::get('/xoa_nhan_vien/{id}',[QuanTriVienController::class, 'xoa_nhan_vien']);
Route::post('/cap_nhat_nhan_vien/{id}',[QuanTriVienController::class, 'cap_nhat_nhan_vien']);
Route::get('/liet_ke_nhan_vien',[QuanTriVienController::class, 'liet_ke_nhan_vien']);
Route::get('/xem_doanh_thu',[QuanTriVienController::class, 'xem_doanh_thu']);

//Quản Lí Tin Tức
Route::get('/them_tin_tuc', [NewsController::class, 'them_tin_tuc']);
Route::get('/sua_tin_tuc/{id}', [NewsController::class, 'sua_tin_tuc']);
Route::get('/xoa_tin_tuc/{id}', [NewsController::class, 'xoa_tin_tuc']);
Route::get('/liet_ke_tin_tuc', [NewsController::class, 'liet_ke_tin_tuc']);
Route::post('/luu_tin_tuc', [NewsController::class, 'luu_tin_tuc']);
Route::post('/cap_nhat_tin_tuc/{id}', [NewsController::class, 'cap_nhat_tin_tuc']);
Route::post('/search_tin_tuc', [NewsController::class, 'search_tin_tuc']);

//Quản lí slide

Route::get('/them_slide', [SlideController::class, 'them_slide']);
Route::get('/sua_slide/{id}', [SlideController::class, 'sua_slide']);
Route::get('/xoa_slide/{id}', [SlideController::class, 'xoa_slide']);
Route::get('/liet_ke_slide', [SlideController::class, 'liet_ke_slide']);
Route::post('/luu_slide', [SlideController::class, 'luu_slide']);
Route::post('/cap_nhat_slide/{id}', [SlideController::class, 'cap_nhat_slide']);

 //quan li sản phẩm
Route::get('/them_san_pham', [QuanlisanphamController::class, 'them_san_pham']);
Route::get('/sua_san_pham/{id}', [QuanlisanphamController::class, 'sua_san_pham']);
Route::get('/xoa_san_pham/{id}', [QuanlisanphamController::class, 'xoa_san_pham']);
Route::get('/liet_ke_san_pham', [QuanlisanphamController::class, 'liet_ke_san_pham']);
Route::post('/luu_san_pham', [QuanlisanphamController::class, 'luu_san_pham']);
Route::post('/cap_nhat_san_pham/{id}', [QuanlisanphamController::class, 'cap_nhat_san_pham']);
Route::post('/search_san_pham', [QuanlisanphamController::class, 'search_san_pham']);

 //quan li đơn hàng

Route::get('/them_don_hang', [DonHangController::class, 'them_don_hang']);
Route::get('/sua_don_hang/{id}', [DonHangController::class, 'sua_don_hang']);
Route::get('/xoa_don_hang/{id}', [DonHangController::class, 'xoa_don_hang']);
Route::get('/liet_ke_don_hang', [DonHangController::class, 'liet_ke_don_hang']);
Route::post('/luu_don_hang', [DonHangController::class, 'luu_don_hang']);
Route::post('/cap_nhat_don_hang/{id}', [DonHangController::class, 'cap_nhat_don_hang']);
Route::post('/search_don_hang', [DonHangController::class, 'search_don_hang']);

// Gửi Mail
Route::get('/gui_mail',[TrangChuController::class,'gui_mail']);

