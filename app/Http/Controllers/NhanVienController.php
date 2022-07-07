<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
session_start();

class NhanVienController extends Controller
{
    public function nhan_vien_trang_chu(){
        return view('nhan_vien.trang_chu');
    }
}
