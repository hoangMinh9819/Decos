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
        $tat_ca_danh_muc = DB::table('san_pham')->get();
        $quan_ly_danh_muc = view('nhan_vien.quan_li_the_loai.liet_ke_danh_muc')->with('liet_ke_danh_muc',$tat_ca_danh_muc);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_the_loai.liet_ke_danh_muc',$quan_ly_danh_muc);        
    }
    public function luu_danh_muc(Request $request){
        $chuoi = array();
        $data['ten'] = $request->ten_danh_muc;
        $data['mo_ta'] = $request->mo_ta_danh_muc;
        $data['tinh_trang'] = $request->trang_thai_danh_muc;
        DB::table('san_pham')->insert($data);
        Session::put('tin_nhan','Thêm danh mục sản phẩm thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
    public function sua_danh_muc($id){
        $sua_danh_muc = DB::table('tbl_san_pham')->where('dm_id',$id)->get();
        $quan_ly_danh_muc = view('qtv.sua_danh_muc')->with('sua_danh_muc',$sua_danh_muc);
        return view('qtv_bo_cuc')->with('qtv.sua_danh_muc',$quan_ly_danh_muc);        
    }
    public function cap_nhat_danh_muc(Request $request, $id){
        $data = array();
        $data['dm_ten'] = $request->ten_danh_muc;
        $data['dm_mo_ta'] = $request->mo_ta_danh_muc;
        $data['dm_trang_thai'] = $request->trang_thai_danh_muc;
        DB::table('tbl_san_pham')->where('dm_id',$id)->update($data);
        Session::put('tin_nhan','Cập nhật thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
    public function xoa_danh_muc($id){       
        $sua_danh_muc = DB::table('tbl_san_pham')->where('dm_id',$id)->delete(); 
        Session::put('tin_nhan','Xóa thành công!');
        return Redirect::to('liet_ke_danh_muc');
    }
}
