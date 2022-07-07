<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;

session_start();

class TrangChuController extends Controller
{
    public function trang_chu()
    {
        $tat_ca_the_loai = DB::table('the_loai')->get();
        $quan_ly_the_loai = view('khach_hang.trang_chu')->with('liet_ke_the_loai',$tat_ca_the_loai);
        return View('khach_hang.bo_cuc_khach_hang')->with('khach_hang.liet_ke_the_loai',$quan_ly_the_loai);
    }    
    public function dang_nhap(){
        return view('khach_hang.dang_nhap');
    }
    public function qtv_dang_xuat(){
        Session::put('ten',null);
        Session::put('id',null);
        return Redirect::to('/trang_chu');
    }
    public function kiem_tra_dang_nhap(Request $request){
        $email = $request->email;
        $mat_khau = $request->mat_khau;
        $result = DB::table('nguoi_dung')
        ->where('email',$email)
        ->where('mat_khau',$mat_khau)
        ->first();
        if($result){
            Session::put('ten',$result->HO_TEN);
            Session::put('id',$result->ID_NGUOI_DUNG);
            $quyen = $result->PHAN_QUYEN;
            if($quyen === 'quan_tri_vien'){
                return Redirect::to('/quan_tri_vien_trang_chu');
            }elseif($quyen === 'nhan_vien'){
                return Redirect::to('/nhan_vien_trang_chu');
            }else{
                return Redirect::to('/trang_chu');
            }
        }else{
            Session::put('tin_nhan','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/dang_nhap');
        }
    }
}
