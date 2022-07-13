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
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.trang_chu')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);        
        return $view;
    }
    public function dang_nhap()
    {
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.dang_nhap')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_slide', $tat_ca_slide);        
        return $view;
    }
    public function dang_xuat()
    {
        Session::put('id', null);
        Session::put('ten', null);
        Session::put('hinh', null);
        return Redirect::to('/trang_chu');
    }
    public function kiem_tra_dang_nhap(Request $request)
    {
        $email = $request->email;
        $mat_khau = $request->mat_khau;
        $result = DB::table('nguoi_dung')
            ->where('email', $email)
            ->where('mat_khau', $mat_khau)
            ->first();
        if ($result) {
            if ($result->TRANG_THAI === 'bi_chan') {
                Session::put('tin_nhan', 'Tài khoản này đã bị chặn!');
                return Redirect::to('/dang_nhap');
            }
            Session::put('id', $result->ID_NGUOI_DUNG);
            Session::put('ten', $result->HO_TEN);
            Session::put('hinh', $result->HINH_ANH);
            $quyen = $result->PHAN_QUYEN;
            if ($quyen === 'quan_tri_vien') {
                return Redirect::to('/ho_so_quan_tri_vien');
            } elseif ($quyen === 'nhan_vien') {
                return Redirect::to('/ho_so_nhan_vien');
            } else {
                return Redirect::to('/trang_chu');
            }
        } else {
            Session::put('tin_nhan', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/dang_nhap');
        }
    }
    
    public function the_loai_san_pham($id)
    {
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
        ->join('the_loai','the_loai.ID_THE_LOAI','=','san_pham.ID_THE_LOAI')
        ->where('san_pham.ID_THE_LOAI',$id)
        ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $ten_the_loai = DB::table('the_loai')
        ->where('ID_THE_LOAI',$id)->first();
        $view = view('khach_hang.the_loai_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide) 
            ->with('ten_the_loai', $ten_the_loai);         
        return $view;
    }
    public function chi_tiet_san_pham($id)
    {
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $san_pham = DB::table('san_pham')
        ->join('the_loai','the_loai.ID_THE_LOAI','=','san_pham.ID_THE_LOAI')
        ->where('ID_SAN_PHAM',$id)->first();
        $san_pham_dac_sac = DB::table('san_pham')->where('DAC_SAC',true)->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.chi_tiet_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('san_pham', $san_pham)
            ->with('san_pham_dac_sac', $san_pham_dac_sac)
            ->with('liet_ke_slide', $tat_ca_slide);    
        return $view;
    }
    
    public function tat_ca_san_pham()
    {
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
        ->join('the_loai','the_loai.ID_THE_LOAI','=','san_pham.ID_THE_LOAI')
        ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.tat_ca_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);         
        return $view;
    }
}
