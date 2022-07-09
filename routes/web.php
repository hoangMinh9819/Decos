<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuanTriVienController;
use App\Http\Controllers\DanhMucSanPhamController;
use App\Http\Controllers\NhanVienController;

//Khach Hang
Route::get('/trang_chu',[TrangChuController::class, 'trang_chu']);
Route::get('/dang_xuat',[TrangChuController::class, 'dang_xuat']);
Route::get('/dang_nhap',[TrangChuController::class, 'dang_nhap']);
Route::post('/kiem_tra_dang_nhap',[TrangChuController::class, 'kiem_tra_dang_nhap']);

//Nhan Vien
Route::get('/ho_so_nhan_vien',[NhanVienController::class, 'ho_so_nhan_vien']);

//Quan Tri Vien
Route::get('/ho_so_quan_tri_vien',[QuanTriVienController::class, 'ho_so_quan_tri_vien']);
Route::get('/them_nhan_vien',[QuanTriVienController::class, 'them_nhan_vien']);
Route::post('/luu_nhan_vien',[QuanTriVienController::class, 'luu_nhan_vien']);
Route::get('/sua_nhan_vien/{id}',[QuanTriVienController::class, 'sua_nhan_vien']);
Route::post('/cap_nhat_nhan_vien/{id}',[QuanTriVienController::class, 'cap_nhat_nhan_vien']);
Route::get('/liet_ke_nhan_vien',[QuanTriVienController::class, 'liet_ke_nhan_vien']);
Route::get('/xem_doanh_thu',[QuanTriVienController::class, 'xem_doanh_thu']);

//Danh Mục Sản Phẩm
Route::get('/them_danh_muc',[DanhMucSanPhamController::class, 'them_danh_muc']);
Route::get('/sua_danh_muc/{id}',[DanhMucSanPhamController::class, 'sua_danh_muc']);
Route::get('/xoa_danh_muc/{id}',[DanhMucSanPhamController::class, 'xoa_danh_muc']);
Route::get('/liet_ke_danh_muc',[DanhMucSanPhamController::class, 'liet_ke_danh_muc']);
Route::post('/luu_danh_muc',[DanhMucSanPhamController::class, 'luu_danh_muc']);
Route::post('/cap_nhat_danh_muc/{id}',[DanhMucSanPhamController::class, 'cap_nhat_danh_muc']);
