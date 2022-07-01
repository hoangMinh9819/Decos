<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function trang_chu()
    {
        return View('trang.trang_chu');
    }
}
