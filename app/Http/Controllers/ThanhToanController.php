<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;
use Cart;

session_start();

class ThanhToanController extends Controller
{
    public function luu_thanh_toan(Request $request){
        if (!Session::get('ten')) {
            Session::put('tin_nhan','Vui lòng đăng nhập để thanh toán.');
            return Redirect::to('dang_nhap');
        }
        $data['ID_NGUOI_DUNG'] = Session('id');
        $data['TEN_NGUOI_NHAN'] = $request->ten;
        $data['DIA_CHI_GIAO'] = $request->dia_chi;
        $data['DIEN_THOAI_NGUOI_NHAN'] = $request->dien_thoai;
        $data['GHI_CHU'] = $request->ghi_chu;
        $data['PHUONG_THUC_THANH_TOAN'] = $request->phuong_thuc;
        $data['TRANG_THAI'] = 'Chờ Xác Nhận';
        $data['TONG_CONG'] = Cart::subtotal(0,0,0,);
        $data['PHI_VAN_CHUYEN'] = 0;
        $data['TONG_CONG_CUOI_CUNG'] = Cart::total(0,0,0);
        $data['NGAY_TAO'] = date('y/m/d H:i:s');

        $id_don_hang = DB::table('don_hang')->insertGetId($data);
        
        $content = Cart::content();
        foreach($content as $c){
            $chi_tiet_don_hang['ID_DON_HANG']= $id_don_hang;
            $chi_tiet_don_hang['ID_SAN_PHAM']= $c->id;
            $chi_tiet_don_hang['SO_LUONG']= $c->qty;
            $chi_tiet_don_hang['TONG_CONG']= $c->subtotal;
            $chi_tiet_don_hang['NGAY_TAO']= date('y/m/d H:i:s');
            $id_chi_tiet_don_hang = DB::table('chi_tiet_don_hang')->insertGetId($chi_tiet_don_hang);
        }


        Session::put('id_don_hang', $id_don_hang);
        Session::put('tin_nhan_don_hang', 'Đặt Hàng Thành Công');
        Cart::destroy();
        return Redirect::to('hien_thi_gio_hang');
    }
}
