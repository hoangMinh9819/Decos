<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

class KhachhangController extends Controller
{
    public function search_khach_hang(Request $request)
    {
        $keyword = $request->keyword_submit;
        $khach_hang = DB::table('nguoi_dung');
        $search_khach_hang = DB::table('nguoi_dung')->where('TEN_NGUOI_NHAN', 'like', '%' . $keyword . '%')
            ->join('nguoi_dung', 'don_hang.ID_NGUOI_DUNG', '=', 'nguoi_dung.ID_NGUOI_DUNG')
            ->orwhere('DIEN_THOAI_NGUOI_NHAN', 'like', '%' . $keyword . '%')
            ->orwhere('HO_TEN', 'like', '%' . $keyword . '%')
            ->orwhere('DIA_CHI_GIAO', 'like', '%' . $keyword . '%')
            ->get();

        return view('nhan_vien.quan_li_don_hang.search_don_hang')->with('search_don_hang', $search_khach_hang)
            ->with('khach_hang', $khach_hang);
    }
    public function ho_so_khach_hang()
    {
        // $this->uy_quyen_dang_nhap();
        $id = Session::get('id');
        $khach_hang = DB::table('nguoi_dung')
            ->where('ID_NGUOI_DUNG', $id)
            ->first();
        return view('nhan_vien.quan_li_khach_hang.liet_ke_khach_hang')
            ->with('khach_hang', $khach_hang);
    }
    // public function them_khach_hang(){
    //     return view('nhan_vien.quan_li_khach_hang.them_khach_hang');
    // }
    public function liet_ke_khach_hang()
    {
        $tat_ca_khach_hang = DB::table('nguoi_dung')->where('PHAN_QUYEN', 'khach_hang')->get();
        return view('nhan_vien.quan_li_khach_hang.liet_ke_khach_hang')
            ->with('liet_ke_khach_hang', $tat_ca_khach_hang);
    }

    public function luu_khach_hang(Request $request)
    {
        // $this->uy_quyen_dang_nhap();
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'khach_hang';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = $request->mat_khau;
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = 'hoat_dong';
        $data['NGAY_TAO'] = date('y/m/d H:i:s');

        if ($request->file('hinh_anh')) {
            $request->file('hinh_anh')->move('public/uploads/nguoi_dung', $request->file('hinh_anh')->getClientOriginalName());
            $data['HINH_ANH'] = $request->file('hinh_anh')->getClientOriginalName();
        }

        DB::table('nguoi_dung')->insert($data);
        Session::put('tin_nhan', 'Thêm khách hàng thành công!');
        return Redirect::to('liet_ke_khach_hang');
    }

    public function sua_khach_hang($id)
    {
        $sua_khach_hang = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', $id)->first();
        $view = view('nhan_vien.quan_li_khach_hang.sua_khach_hang')->with('khach_hang', $sua_khach_hang);
        return $view;
    }
    public function cap_nhat_khach_hang(Request $request, $id)
    {
        // $this->uy_quyen_dang_nhap();
        $chuoi = array();
        $data['PHAN_QUYEN'] = 'khach_hang';
        $data['HO_TEN'] = $request->ten;
        $data['MAT_KHAU'] = $request->mat_khau;
        $data['DIA_CHI'] = $request->dia_chi;
        $data['EMAIL'] = $request->email;
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['HINH_ANH'] = null;
        $data['TRANG_THAI'] = $request->trang_thai;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        if ($request->file('hinh_anh')) {
            $file_name = $request->file('hinh_anh')->getClientOriginalName();
            $request->file('hinh_anh')->move('public/uploads/nguoi_dung', $file_name);
            $data['HINH_ANH'] = $file_name;
        }
        DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', $id)->update($data);
        Session::put('tin_nhan', 'Cập nhật thành công!');
        return Redirect::to('liet_ke_khach_hang');
    }

    public function xoa_khach_hang($id)
    {
        $sua_khach_hang = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', $id)->delete();
        Session::put('tin_nhan', 'Xóa thành công!');
        return Redirect::to('liet_ke_khach_hang');
    }
}
