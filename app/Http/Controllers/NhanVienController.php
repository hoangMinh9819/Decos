<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
session_start();

class NhanVienController extends Controller
{
    public function nhan_vien_trang_chu(){        
        $tat_ca_nhan_vien = DB::table('nguoi_dung')->where('PHAN_QUYEN','nhan_vien')->get();
        $quan_ly_nhan_vien = view('nhan_vien.trang_chu')->with('liet_ke_nhan_vien',$tat_ca_nhan_vien);
        return View('nhan_vien.trang_chu')->with('khach_hang.trang_chu_nhan_vien',$quan_ly_nhan_vien);
    }
}
