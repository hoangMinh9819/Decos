<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

session_start();
class NewsController extends Controller
{
    public function search_tin_tuc(Request $request)
    {
        $keyword = $request->keyword_submit;
        $search_tin_tuc = DB::table('tin_tuc')->where('TIEU_DE', 'like', '%' . $keyword . '%')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'tin_tuc.ID_THE_LOAI')
            ->orwhere('NOI_DUNG', 'like', '%' . $keyword . '%')
            ->orwhere('TEN_TL', 'like', '%' . $keyword . '%')
            ->get();

        return view('nhan_vien.quan_li_tin_tuc.search')->with('search_tin_tuc', $search_tin_tuc);
    }


    public function them_tin_tuc()
    {
        return view('nhan_vien.quan_li_tin_tuc.them_tin_tuc');
    }
    public function liet_ke_tin_tuc()
    {
        $tat_ca_tin_tuc = DB::table('tin_tuc')
        ->join('the_loai','the_loai.ID_THE_LOAI','=','tin_tuc.ID_THE_LOAI')
        ->get();
        $view = view('nhan_vien.quan_li_tin_tuc.liet_ke_tin_tuc')->with('liet_ke_tin_tuc', $tat_ca_tin_tuc);
        return $view;
    }
    public function luu_tin_tuc(Request $request)
    {
        $data = array();
        $data['ID_THE_LOAI'] = $request->ID_THE_LOAI;
        $data['TIEU_DE'] = $request->TIEU_DE;
        $data['NOI_DUNG'] = $request->NOI_DUNG;
        $data['NGAY_TAO'] = date('y/m/d H:i:s');
        $data['HINH_ANH_TT'] = $request->HINH_ANH;
        if ($request->file('HINH_ANH')) {
            $request->file('HINH_ANH')->move('uploads/tin_tuc', $request->file('HINH_ANH')->getClientOriginalName());
            $data['HINH_ANH_TT'] = $request->file('HINH_ANH')->getClientOriginalName();
        }

        DB::table('tin_tuc')->insert($data);
        Session::put('tin_nhan', 'Thêm tin tức thành công!');
        return Redirect::to('liet_ke_tin_tuc');
    }
    public function sua_tin_tuc($id)
    {
        $sua_tin_tuc = DB::table('tin_tuc')->where('ID_TIN_TUC', $id)->get();
        $quan_ly_tin_tuc = view('nhan_vien.quan_li_tin_tuc.sua_tin_tuc')->with('sua_tin_tuc', $sua_tin_tuc);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_tin_tuc.sua_tin_tuc', $quan_ly_tin_tuc);
    }
    public function cap_nhat_tin_tuc(Request $request, $id)
    {
        $data = array();
        $data['ID_THE_LOAI'] = $request->ID_THE_LOAI;
        $data['TIEU_DE'] = $request->TIEU_DE;
        $data['NOI_DUNG'] = $request->NOI_DUNG;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        $data['HINH_ANH_TT'] = $request->HINH_ANH;
        if ($request->file('HINH_ANH')) {
            $request->file('HINH_ANH')->move('uploads/tin_tuc', $request->file('HINH_ANH')->getClientOriginalName());
            $data['HINH_ANH_TT'] = $request->file('HINH_ANH')->getClientOriginalName();
        }

        DB::table('tin_tuc')->where('ID_TIN_TUC', $id)->update($data);
        Session::put('tin_nhan', 'Cập nhật thành công!');
        return Redirect::to('liet_ke_tin_tuc');
    }
    public function xoa_tin_tuc($id)
    {
        $sua_danh_muc = DB::table('tin_tuc')->where('ID_TIN_TUC', $id)->delete();
        Session::put('tin_nhan', 'Xóa thành công!');
        return Redirect::to('liet_ke_tin_tuc');
    }
}
