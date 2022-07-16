<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuanTriVienController;
use App\Http\Controllers\DanhMucSanPhamController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanlisanphamController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\GioHangController;
use App\Http\Controllers\ThanhToanController;

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

//Lưu vào giỏ hàng.
Route::post('/luu_gio_hang',[GioHangController::class, 'luu_gio_hang']);
Route::get('/hien_thi_gio_hang',[GioHangController::class, 'hien_thi_gio_hang']);
Route::get('/xoa_gio_hang/{id}',[GioHangController::class, 'xoa_gio_hang']);
Route::post('/cap_nhat_so_luong',[GioHangController::class, 'cap_nhat_so_luong']);

//Thanh Toán
Route::get('/dang_nhap_thanh_toan',[ThanhToanController::class,'dang_nhap_thanh_toan']);
Route::get('/thanh_toan',[ThanhToanController::class,'thanh_toan']);

//Nhan Vien
Route::get('/ho_so_nhan_vien',[NhanVienController::class, 'ho_so_nhan_vien']);

//Danh Mục Sản Phẩm
Route::get('/them_danh_muc',[DanhMucSanPhamController::class, 'them_danh_muc']);
Route::get('/sua_danh_muc/{id}',[DanhMucSanPhamController::class, 'sua_danh_muc']);
Route::get('/xoa_danh_muc/{id}',[DanhMucSanPhamController::class, 'xoa_danh_muc']);
Route::get('/liet_ke_danh_muc',[DanhMucSanPhamController::class, 'liet_ke_danh_muc']);
Route::post('/luu_danh_muc',[DanhMucSanPhamController::class, 'luu_danh_muc']);
Route::post('/cap_nhat_danh_muc/{id}',[DanhMucSanPhamController::class, 'cap_nhat_danh_muc']);

<<<<<<< HEAD

=======
>>>>>>> 5f12cb076e29abe07d8d0ef5be1a9b2f5f8e135c
//Quan li san pham
Route::get('/liet_ke_san_pham',[QuanlisanphamController::class, 'liet_ke_san_pham']);
Route::get('/them_san_pham',[QuanlisanphamController::class, 'them_san_pham']);
Route::get('/xoa_san_pham/{id}',[QuanlisanphamController::class, 'xoa_san_pham']);
Route::get('/sua_san_pham/{id}',[QuanlisanphamController::class, 'sua_san_pham']);
Route::post('/luu_san_pham',[QuanlisanphamController::class, 'luu_san_pham']);
Route::post('/cap_nhat_san_pham/{id}',[QuanlisanphamController::class, 'cap_nhat_san_pham']);




//Danh Mục Khách Hàng
Route::get('/sua_khach_hang/{id}',[KhachhangController::class, 'sua_khach_hang']);
Route::get('/xoa_khach_hang/{id}',[KhachhangController::class, 'xoa_khach_hang']);
Route::get('/liet_ke_khach_hang',[KhachhangController::class, 'liet_ke_khach_hang']);
Route::post('/luu_khach_hang',[KhachhangController::class, 'luu_khach_hang']);
Route::post('/cap_nhat_khach_hang/{id}',[KhachhangController::class, 'cap_nhat_khach_hang']);




<<<<<<< HEAD

=======
>>>>>>> 5f12cb076e29abe07d8d0ef5be1a9b2f5f8e135c
//Quan Tri Vien
Route::get('/ho_so_quan_tri_vien',[QuanTriVienController::class, 'ho_so_quan_tri_vien']);
Route::get('/them_nhan_vien',[QuanTriVienController::class, 'them_nhan_vien']);
Route::post('/luu_nhan_vien',[QuanTriVienController::class, 'luu_nhan_vien']);
Route::get('/sua_nhan_vien/{id}',[QuanTriVienController::class, 'sua_nhan_vien']);
Route::get('/xoa_nhan_vien/{id}',[QuanTriVienController::class, 'xoa_nhan_vien']);
Route::post('/cap_nhat_nhan_vien/{id}',[QuanTriVienController::class, 'cap_nhat_nhan_vien']);
Route::get('/liet_ke_nhan_vien',[QuanTriVienController::class, 'liet_ke_nhan_vien']);
Route::get('/xem_doanh_thu',[QuanTriVienController::class, 'xem_doanh_thu']);

