<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;


class QuanlisanphamController extends Controller
{
<<<<<<< HEAD
    public function search(Request $request)
    {
        $keyword = $request->keyword_submit;
        $search_san_pham = DB::table('san_pham')->where('TEN_SP', 'like', '%' . $keyword . '%')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->orwhere('GIA', 'like', '%' . $keyword . '%')
            ->orwhere('TEN_TL', 'like', '%' . $keyword . '%')
            ->get();

        return view('nhan_vien.quan_li_san_pham.search')->with('search_san_pham', $search_san_pham);
    }

=======
>>>>>>> 24cfe215df0aa6025fd5a854b7982180c7f9ef51
    public function liet_ke_san_pham(){
        $danh_sach_san_pham = DB::table('san_pham')
        ->join('the_loai','the_loai.ID_THE_LOAI','=','san_pham.ID_THE_LOAI')
        ->get();
        $quan_ly_san_pham = view('nhan_vien.quan_li_san_pham.liet_ke_san_pham')->with('liet_ke_san_pham',$danh_sach_san_pham);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_san_pham.liet_ke_san_pham',$quan_ly_san_pham);
    }

    public function them_san_pham(){
        return view('nhan_vien.quan_li_san_pham.them_san_pham');
    }

    public function luu_san_pham(Request $request){
<<<<<<< HEAD
        $chuoi = array();
=======
        $data = array();
>>>>>>> 24cfe215df0aa6025fd5a854b7982180c7f9ef51
        $data['ID_THE_LOAI'] = $request->ID_THE_LOAI;
        $data['MA_SAN_PHAM'] = $request->MA_SAN_PHAM;
        $data['TEN_SP'] = $request->TEN_SP;
        $data['GIA'] = $request->GIA;
        $data['MO_TA'] = $request->MO_TA;
        $data['NGAY_TAO'] = date('y/m/d H:i:s');
        DB::table('san_pham')->insert($data);
        Session::put('tin_nhan','Thêm sản phẩm thành công!');
        return Redirect::to('liet_ke_san_pham');
    }

    public function sua_san_pham($id){
        $sua_san_pham = DB::table('san_pham')->where('ID_SAN_PHAM',$id)->get();
        $quan_ly_san_pham = view('nhan_vien.quan_li_san_pham.sua_san_pham')->with('sua_san_pham',$sua_san_pham);
        return view('nhan_vien.bo_cuc_nhan_vien')->with('nhan_vien.quan_li_san_pham.sua_san_pham',$quan_ly_san_pham);
    }

    public function cap_nhat_san_pham(Request $request, $id){
        $data = array();
        $data['ID_THE_LOAI'] = $request->ID_THE_LOAI;
        $data['MA_SAN_PHAM'] = $request->MA_SAN_PHAM;
        $data['TEN_SP'] = $request->TEN_SP;
        $data['GIA'] = $request->GIA;
        $data['MO_TA'] = $request->MO_TA;
        $data['NGAY_CAP_NHAT'] = date('y/m/d H:i:s');
        DB::table('san_pham')->where('ID_SAN_PHAM',$id)->update($data);
        Session::put('tin_nhan','Cập nhật thành công!');
        return Redirect::to('liet_ke_san_pham');
    }
    public function xoa_san_pham($id){
<<<<<<< HEAD
        $sua_san_pham = DB::table('san_pham')->where('ID_THE_LOAI',$id)->delete();
=======
        $sua_san_pham = DB::table('san_pham')->where('ID_SAN_PHAM',$id)->delete();
>>>>>>> 24cfe215df0aa6025fd5a854b7982180c7f9ef51
        Session::put('tin_nhan','Xóa thành công!');
        return Redirect::to('liet_ke_san_pham');
    }
}
