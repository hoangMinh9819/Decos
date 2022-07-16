<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;

session_start();

class ThanhToanController extends Controller
{
    //
    public function dang_nhap_thanh_toan()
    {
        if (!Session::get('ten')) {
            Session::put('tin_nhan','Vui lòng đăng nhập để thanh toán.');
            return Redirect::to('dang_nhap');
        }
        return Redirect::to('thanh_toan');
    }
    public function thanh_toan(){        
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.thanh_toan')
            ->with('liet_ke_slide', $tat_ca_slide);         
        return $view;
    }
}
