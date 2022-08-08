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
    public function uy_quyen_dang_nhap(){
        if(!Session::get('id')){
            return Redirect::to('dang_nhap')->send();
        }
    }
    public function ho_so_quan_tri_vien(){
        $this->uy_quyen_dang_nhap();
        $id = Session::get('id');
        $quan_tri_vien = DB::table('nguoi_dung')
        ->where('ID_NGUOI_DUNG',$id)
        ->first();
        return View('quan_tri_vien.quan_li_ho_so.ho_so_quan_tri_vien')
        ->with('quan_tri_vien',$quan_tri_vien);
    }
    public function them_nhan_vien(){
        $this->uy_quyen_dang_nhap();
        return view('quan_tri_vien.quan_li_nhan_vien.them_nhan_vien');
    }
    public function liet_ke_nhan_vien(){
        $this->uy_quyen_dang_nhap();
        $tat_ca_nhan_vien = DB::table('nguoi_dung')->where('PHAN_QUYEN','nhan_vien')->get();
        return view('quan_tri_vien.quan_li_nhan_vien.liet_ke_nhan_vien')
        ->with('liet_ke_nhan_vien',$tat_ca_nhan_vien);
    }
    public function xem_doanh_thu(){
        $this->uy_quyen_dang_nhap();
        return view('quan_tri_vien.quan_li_doanh_thu.xem_doanh_thu');
    }
    public function luu_nhan_vien(Request $request){
        $this->uy_quyen_dang_nhap();
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'nhan_vien';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = md5($request->mat_khau);
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = 'hoat_dong';
        $data['NGAY_TAO'] = date('y/m/d H:i:s');

        if($request->file('hinh_anh')){
            $file_name = $request->file('hinh_anh')->getClientOriginalName();
            $request->file('hinh_anh')
            ->move('uploads/nguoi_dung',$file_name);
            $data['HINH_ANH'] = $file_name;
        }

        DB::table('nguoi_dung')->insert($data);
        Session::put('tin_nhan','Thêm nhân viên thành công!');
        return Redirect::to('liet_ke_nhan_vien');
    }

    public function sua_nhan_vien($id){
        $this->uy_quyen_dang_nhap();
        $nhan_vien = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG',$id)->first();
        return view('quan_tri_vien.quan_li_nhan_vien.sua_nhan_vien')
        ->with('nhan_vien',$nhan_vien);
    }
    public function cap_nhat_nhan_vien(Request $request, $id){
        $this->uy_quyen_dang_nhap();
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'nhan_vien';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = md5($request->mat_khau);
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = $request->trang_thai;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        if($request->file('hinh_anh')){
            $file_name = $request->file('hinh_anh')->getClientOriginalName();
            $request->file('hinh_anh')->move('uploads/nguoi_dung',$file_name);
            $data['HINH_ANH'] = $file_name;
        }
        DB::table('nguoi_dung')->where('ID_NGUOI_DUNG',$id)->update($data);
        Session::put('tin_nhan','Cập nhật thành công!');
        return Redirect::to('liet_ke_nhan_vien');
    }

    public function xoa_nhan_vien($id){
        $this->uy_quyen_dang_nhap();
        $sua_danh_muc = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG',$id)->delete();
        Session::put('tin_nhan','Xóa thành công!');
        return Redirect::to('liet_ke_nhan_vien');
    }
    public function tat_ca_don_ung_tuyen()
    {
        $tat_ca_don_ung_tuyen = DB::table('talent')
            ->get();
        $view = view('quan_tri_vien.quan_li_ung_tuyen.quan_li_ung_tuyen')->with('tat_ca_don_ung_tuyen', $tat_ca_don_ung_tuyen);
        return $view;
    }




    public function xoa_ung_tuyen($id)
    {
        $sua_danh_muc = DB::table('talent')->where('id', $id)->delete();
        Session::put('tin_nhan', 'Xóa thành công!');
        return Redirect::to('tat_ca_don_ung_tuyen');
    }
}
