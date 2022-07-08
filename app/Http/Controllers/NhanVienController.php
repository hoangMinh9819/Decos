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
        $id = Session::get('id');
        $nhan_vien = DB::table('nguoi_dung')
        ->where('PHAN_QUYEN','nhan_vien')
        ->where('ID_NGUOI_DUNG',$id)
        ->first();
        return View('nhan_vien.trang_chu')->with('nhan_vien',$nhan_vien);
    }
}
