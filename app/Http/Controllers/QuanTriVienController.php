<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
session_start();

class QuanTriVienController extends Controller
{
    public function qtv_dang_nhap(){
        return view('qtv_dang_nhap');
    }
    public function qtv_trang_chu(){
        return view('qtv.trang_chu');
    }
    public function kiem_tra_dang_nhap(Request $request){
        $qtv_email = $request->qtv_email;
        $qtv_mat_khau = md5($request->qtv_mat_khau);
        $result = DB::table('tbl_quan_tri_vien')
        ->where('qtv_email',$qtv_email)
        ->where('qtv_mat_khau',$qtv_mat_khau)
        ->first();
        if($result){
            Session::put('qtv_ten',$result->qtv_ten);
            Session::put('qtv_id',$result->qtv_id);
            return Redirect::to('/qtv_trang_chu');
        }else{
            Session::put('tin_nhan','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/qtv_dang_nhap');
        }
    }
    public function qtv_dang_xuat(){
        Session::put('qtv_ten',null);
        Session::put('qtv_id',null);
        return Redirect::to('/qtv_dang_nhap');
    }
}
