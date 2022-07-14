<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

class DanhMucSanPhamController extends Controller
{
    public function them_danh_muc(){
        return view('nhan_vien.quan_li_the_loai.them_danh_muc');
    }
    public function liet_ke_danh_muc(){
        $tat_ca_danh_muc = DB::table('the_loai')->get();
        $quan_ly_danh_muc = view('nhan_vien.quan_li_the_loai.liet_ke_danh_muc')->with('liet_ke_danh_muc',$tat_ca_danh_muc);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_the_loai.liet_ke_danh_muc',$quan_ly_danh_muc);        
    }
    public function luu_danh_muc(Request $request){
        $data['TEN'] = $request->ten_danh_muc;
        $data['MO_TA'] = $request->mo_ta_danh_muc;
        $data['TRANG_THAI'] = $request->trang_thai_danh_muc;
        DB::table('the_loai')->insert($data);
        Session::put('tin_nhan','Thêm danh mục sản phẩm thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
    public function sua_danh_muc($id){
        $sua_danh_muc = DB::table('the_loai')->where('ID_THE_LOAI',$id)->get();
        $quan_ly_danh_muc = view('nhan_vien.quan_li_the_loai.sua_danh_muc')->with('sua_danh_muc',$sua_danh_muc);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_the_loai.sua_danh_muc',$quan_ly_danh_muc);        
    }
    public function cap_nhat_danh_muc(Request $request, $id){
        $data = array();
        $data['TEN'] = $request->ten_danh_muc;
        $data['MO_TA'] = $request->mo_ta_danh_muc;
        $data['TRANG_THAI'] = $request->trang_thai_danh_muc;
        DB::table('the_loai')->where('ID_THE_LOAI',$id)->update($data);
        Session::put('tin_nhan','Cập nhật thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
    public function xoa_danh_muc($id){       
        $sua_danh_muc = DB::table('the_loai')->where('ID_THE_LOAI',$id)->delete(); 
        Session::put('tin_nhan','Xóa thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
}
