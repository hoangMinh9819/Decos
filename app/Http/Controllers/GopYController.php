<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GopYController extends Controller
{
    
    public function luu_gop_y(Request $request)
    {
        $data['ID_NGUOI_DUNG'] = Session('id');
        $data['NOI_DUNG_GOP_Y'] = $request->gop_y;
        DB::table('GOP_Y')->insert($data);
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.gop_y')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_slide', $tat_ca_slide);
        Session::put('tin_nhan_gop_y', 'Cảm ơn quý khách đã góp ý ạ.');
        return $view;
    }
    public function gop_y()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.gop_y')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function liet_ke_gop_y()
    {
        $tat_ca_gop_y = DB::table('gop_y')->join('nguoi_dung', 'nguoi_dung.ID_NGUOI_DUNG', '=', 'gop_y.ID_NGUOI_DUNG')->paginate(3);
        $quan_li_gop_y = view('nhan_vien.quan_li_gop_y.liet_ke_gop_y')->with('liet_ke_gop_y', $tat_ca_gop_y);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_gop_y.liet_ke_gop_y', $quan_li_gop_y);
    }
}
