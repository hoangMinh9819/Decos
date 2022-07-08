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
    public function quan_tri_vien_trang_chu(){
        $id = Session::get('id');
        $quan_tri_vien = DB::table('nguoi_dung')
        ->where('PHAN_QUYEN','quan_tri_vien')
        ->where('ID_NGUOI_DUNG',$id)
        ->first();
        return View('quan_tri_vien.trang_chu')->with('quan_tri_vien',$quan_tri_vien);
    }
    public function them_nhan_vien(){
        return view('quan_tri_vien.quan_li_nhan_vien.them_nhan_vien');
    }
    public function liet_ke_nhan_vien(){
        $tat_ca_nhan_vien = DB::table('nguoi_dung')->where('PHAN_QUYEN','nhan_vien')->get();
        $quan_ly_nhan_vien = view('quan_tri_vien.quan_li_nhan_vien.liet_ke_nhan_vien')->with('liet_ke_nhan_vien',$tat_ca_nhan_vien);
        return view('quan_tri_vien.bo_cuc_quan_tri_vien')->with('quan_tri_vien.quan_li_nhan_vien.liet_ke_nhan_vien',$quan_ly_nhan_vien);  
    }
    public function xem_doanh_thu(){
        return view('quan_tri_vien.quan_li_doanh_thu.xem_doanh_thu');
    }
    public function luu_nhan_vien(Request $request){
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'nhan_vien';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = $request->mat_khau;
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;         
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = 'hoat_dong';
        $data['NGAY_TAO'] = date('y/m/d H:i:s');

        if($request->file('hinh_anh')){
            $request->file('hinh_anh')->move('public/uploads/nguoi_dung',$request->file('hinh_anh')->getClientOriginalName());   
            $data['HINH_ANH'] = $request->file('hinh_anh')->getClientOriginalName();
        }
        
        DB::table('nguoi_dung')->insert($data);
        Session::put('tin_nhan','Thêm nhân viên thành công!');
        return Redirect::to('liet_ke_nhan_vien');
    }
    
    public function sua_nhan_vien($id){
        $sua_nhan_vien = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG',$id)->get();
        $quan_ly_nhan_vien = view('quan_tri_vien.quan_li_nhan_vien.sua_nhan_vien')->with('sua_nhan_vien',$sua_nhan_vien);
        return view('quan_tri_vien.bo_cuc_quan_tri_vien')->with('quan_tri_vien.quan_li_nhan_vien.sua_nhan_vien',$quan_ly_nhan_vien);        
    }
    public function cap_nhat_nhan_vien(Request $request, $id){
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'nhan_vien';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = $request->mat_khau;
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;         
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = $request->trang_thai;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        if($request->file('hinh_anh')){
            $request->file('hinh_anh')->move('public/uploads/nguoi_dung',$request->file('hinh_anh')->getClientOriginalName());   
            $data['HINH_ANH'] = $request->file('hinh_anh')->getClientOriginalName();
        }
        DB::table('nguoi_dung')->where('ID_NGUOI_DUNG',$id)->update($data);
        Session::put('tin_nhan','Cập nhật thành công!');
        return Redirect::to('liet_ke_nhan_vien');
    }
}
