<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

session_start();
class SlideController extends Controller
{
    public function them_slide()
    {
        return view('nhan_vien.quan_li_slide.them_slide');
    }
    public function liet_ke_slide()
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $quan_li_slide = view('nhan_vien.quan_li_slide.liet_ke_slide')->with('liet_ke_slide', $tat_ca_slide);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_the_loai.liet_ke_danh_muc', $quan_li_slide);
    }
    public function luu_slide(Request $request)
    {
        $chuoi = array();
        $data['TEN_SLIDE'] = $request->ten;
        $data['HINH_ANH'] = $request->HINH_ANH;
        $data['NGAY_TAO'] = date('y/m/d H:i:s');
        $data['NGAY_HET_HAN'] = $request->NGAY_HET_HAN;
        if ($request->file('hinh_anh')) {
            $request->file('hinh_anh')->move('public/uploads/slide', $request->file('hinh_anh')->getClientOriginalName());
            $data['HINH_ANH'] = $request->file('hinh_anh')->getClientOriginalName();
        }
        DB::table('hinh_anh_slide')->insert($data);
        Session::put('tin_nhan', 'Thêm slide thành công!');
        return Redirect::to('liet_ke_slide');
    }
    public function sua_slide($id)
    {
        $sua_slide = DB::table('hinh_anh_slide')->where('ID_SLIDE', $id)->get();
        $quan_ly_slide = view('nhan_vien.quan_li_slide.sua_slide')->with('sua_slide', $sua_slide);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_slide.sua_slide', $quan_ly_slide);
    }
    public function cap_nhat_slide(Request $request, $id)
    {
        $data = array();
        $data['TEN_SLIDE'] = $request->ten;
        $data['HINH_ANH'] = null;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        $data['NGAY_HET_HAN'] = $request->NGAY_HET_HAN;
        if ($request->file('hinh_anh')) {
            $request->file('hinh_anh')->move('public/uploads/slide', $request->file('hinh_anh')->getClientOriginalName());
            $data['HINH_ANH'] = $request->file('hinh_anh')->getClientOriginalName();
        }
        DB::table('hinh_anh_slide')->where('ID_SLIDE', $id)->update($data);
        Session::put('tin_nhan', 'Cập nhật thành công!');
        return Redirect::to('liet_ke_slide');
    }
    public function xoa_slide($id)
    {
        $sua_danh_muc = DB::table('hinh_anh_slide')->where('ID_SLIDE', $id)->delete();
        Session::put('tin_nhan', 'Xóa thành công!');
        return Redirect::to('liet_ke_slide');
    }
}
