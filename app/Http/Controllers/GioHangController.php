<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;
use Cart;
session_start();

class GioHangController extends Controller
{
    public function luu_gio_hang(Request $request){
        $san_pham_id = $request->san_pham_id_an;
        $so_luong = $request->so_luong;
        $thong_tin_san_pham = DB::table('san_pham')->where('ID_SAN_PHAM',$san_pham_id)->first();         
        //Cart::add('293ad', 'Product 1', 1, 9.99, 550);        
        //Cart::destroy();
        $data['id'] = $thong_tin_san_pham->ID_SAN_PHAM;
        $data['qty'] = $so_luong;
        $data['name'] = $thong_tin_san_pham->TEN_SP;
        $data['price'] = $thong_tin_san_pham->GIA;
        $data['weight'] = '123';
        $data['options']['image'] = $thong_tin_san_pham->HINH_ANH;
        Cart::add($data);
        Cart::setGlobalTax(0);
        return Redirect::to('/hien_thi_gio_hang#giua_trang');
    }
    public function hien_thi_gio_hang(){
        $tat_ca_the_loai = DB::table('the_loai')
        ->where('TRANG_THAI','Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.hien_thi_gio_hang')
        ->with('liet_ke_the_loai', $tat_ca_the_loai)
        ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function xoa_gio_hang($rowId){
        Cart::update($rowId,0);        
        return Redirect::to('/hien_thi_gio_hang#giua_trang');
    }
    public function cap_nhat_so_luong(Request $request){
        $rowId=$request->rowId_gio_hang;
        $so_luong=$request->so_luong;
        Cart::update($rowId,$so_luong);
        return Redirect::to('/hien_thi_gio_hang#giua_trang');
    }
}
