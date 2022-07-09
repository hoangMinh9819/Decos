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
    public function ho_so_nhan_vien(){      
        $id = Session::get('id');
        $nhan_vien = DB::table('nguoi_dung')
        ->where('ID_NGUOI_DUNG',$id)
        ->first();
        return View('nhan_vien.quan_li_ho_so.ho_so_nhan_vien')->with('nhan_vien',$nhan_vien);
    }
}
