<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\QuanTriVienController;
use App\Http\Controllers\DanhMucSanPhamController;

//Giao diện
Route::get('/', [TrangChuController::class, 'trang_chu']);
Route::get('/trang_chu',[TrangChuController::class, 'trang_chu']);

//Vận Hành
Route::get('/qtv_dang_nhap',[QuanTriVienController::class, 'qtv_dang_nhap']);
Route::get('/qtv_dang_xuat',[QuanTriVienController::class, 'qtv_dang_xuat']);
Route::get('/qtv_trang_chu',[QuanTriVienController::class, 'qtv_trang_chu']);
Route::post('/kiem_tra_dang_nhap',[QuanTriVienController::class, 'kiem_tra_dang_nhap']);

//Danh Mục Sản Phẩm
Route::get('/them_danh_muc',[DanhMucSanPhamController::class, 'them_danh_muc']);
Route::get('/sua_danh_muc/{id}',[DanhMucSanPhamController::class, 'sua_danh_muc']);
Route::get('/xoa_danh_muc/{id}',[DanhMucSanPhamController::class, 'xoa_danh_muc']);
Route::get('/liet_ke_danh_muc',[DanhMucSanPhamController::class, 'liet_ke_danh_muc']);
Route::post('/luu_danh_muc',[DanhMucSanPhamController::class, 'luu_danh_muc']);
Route::post('/cap_nhat_danh_muc/{id}',[DanhMucSanPhamController::class, 'cap_nhat_danh_muc']);
