<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;
use App\Http\Requests\DangKyRequest;
use Illuminate\Support\Facades\Mail;

session_start();

class TrangChuController extends Controller
{
    public function trang_chu()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.trang_chu')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function dang_nhap()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.dang_nhap')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function dang_xuat()
    {
        Session::put('id', null);
        Session::put('ten', null);
        Session::put('hinh', null);
        return Redirect::to('/trang_chu');
    }
    public function kiem_tra_dang_nhap(Request $request)
    {
        $email = $request->email;
        $mat_khau = md5($request->mat_khau);
        $result = DB::table('nguoi_dung')
            ->where('EMAIL', $email)
            ->where('MAT_KHAU', $mat_khau)
            ->first();
        if ($result) {
            if ($result->TRANG_THAI === 'bi_chan') {
                Session::put('tin_nhan', 'Tài khoản này đã bị chặn!');
                return Redirect::to('/dang_nhap');
            }
            Session::put('id', $result->ID_NGUOI_DUNG);
            Session::put('ten', $result->HO_TEN);
            Session::put('hinh', $result->HINH_ANH);
            $quyen = $result->PHAN_QUYEN;
            if ($quyen === 'quan_tri_vien') {
                return Redirect::to('/ho_so_quan_tri_vien');
            } elseif ($quyen === 'nhan_vien') {
                return Redirect::to('/ho_so_nhan_vien');
            } else {
                return Redirect::to('/hien_thi_gio_hang');
            }
        } else {
            Session::put('tin_nhan', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/dang_nhap');
        }
    }

    public function the_loai_san_pham($id)
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->where('san_pham.ID_THE_LOAI', $id)
            ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $ten_the_loai = DB::table('the_loai')
            ->where('ID_THE_LOAI', $id)->first();
        $view = view('khach_hang.the_loai_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide)
            ->with('ten_the_loai', $ten_the_loai);
        return $view;
    }
    public function chi_tiet_san_pham($id)
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->where('ID_SAN_PHAM', $id)->first();
        $san_pham_dac_sac = DB::table('san_pham')->where('DAC_SAC', true)->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.chi_tiet_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('san_pham', $san_pham)
            ->with('san_pham_dac_sac', $san_pham_dac_sac)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }

    public function tat_ca_san_pham()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->paginate(6);
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.tat_ca_san_pham')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }

    public function dang_ky(DangKyRequest $request)
    {
        $data['HO_TEN'] = $request->ten;
        $data['EMAIL'] = $request->email;
        $data['MAT_KHAU'] = md5($request->mat_khau);
        $data['DIEN_THOAI'] = $request->dien_thoai;
        $data['DIA_CHI'] = $request->dia_chi;
        $data['PHAN_QUYEN'] = 'khach_hang';
        $data['NGAY_TAO'] = date('y/m/d H:i:s');
        DB::table('nguoi_dung')->insert($data);
        Session::put('tin_nhan_dang_ky', 'Đăng ký thành công! Vui lòng đăng nhập');
        return Redirect::to('dang_nhap');
    }
    public function the_loai_tin_tuc($id)
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_tin_tuc = DB::table('titn_tuc')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'tin_tuc.ID_THE_LOAI')
            ->where('tin_tuc.ID_THE_LOAI', $id)
            ->get();
        $ten_the_loai = DB::table('the_loai')
            ->where('ID_THE_LOAI', $id)->first();
        $view = view('khach_hang.the_loai_tin_tuc')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_tin_tuc', $tat_ca_tin_tuc)
            ->with('ten_the_loai', $ten_the_loai);
        return $view;
    }


    public function chi_tiet_tin_tuc($id)
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tin_tuc = DB::table('tin_tuc')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'tin_tuc.ID_THE_LOAI')
            ->where('ID_TIN_TUC', $id)->first();
        $view = view('khach_hang.chi_tiet_tin_tuc')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('tin_tuc', $tin_tuc)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }

    public function tat_ca_tin_tuc()
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_tin_tuc = DB::table('tin_tuc')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'tin_tuc.ID_THE_LOAI')
            ->paginate(8);
        $view = view('khach_hang.tat_ca_tin_tuc')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_tin_tuc', $tat_ca_tin_tuc)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function ho_so_khach_hang()
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $id = Session::get('id');
        $khach_hang = DB::table('nguoi_dung')
            ->where('ID_NGUOI_DUNG', $id)
            ->first();
        $views = view('khach_hang.ho_so_khach_hang')
            ->with('khach_hang', $khach_hang)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $views;
    }
    public function cap_nhat_ho_so_khach_hang(Request $request, $id)
    {
        $data = array();
        $data['HINH_ANH'] = $request->HINH_ANH;
        if ($request->file('HINH_ANH')) {
            $request->file('HINH_ANH')->move('uploads/nguoi_dung', $request->file('HINH_ANH')->getClientOriginalName());
            $data['HINH_ANH'] = $request->file('HINH_ANH')->getClientOriginalName();
        }
        $data['PHAN_QUYEN'] = 'khach_hang';
        $data['HO_TEN'] = $request->HO_TEN;
        $data['MAT_KHAU'] = md5($request->MAT_KHAU);
        $data['DIA_CHI'] = $request->DIA_CHI;
        $data['EMAIL'] = $request->EMAIL;
        $data['DIEN_THOAI'] = $request->DIEN_THOAI;
        DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', $id)->update($data);
        Session::put('tin_nhan', 'Cập nhật thành công!');
        return Redirect::to('ho_so_khach_hang');
    }
    public function sua_ho_so_khach_hang($id)
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $sua_ho_so_khach_hang = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', $id)->first();
        $view = view('khach_hang.sua_ho_so_khach_hang')
            ->with('khach_hang', $sua_ho_so_khach_hang)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }

    public function thong_tin_lien_he()
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $views = view('khach_hang.thong_tin_lien_he')
            ->with('liet_ke_slide', $tat_ca_slide);
        return $views;
    }

    public function bao_mat_cookie()
    {
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $views = view('khach_hang.bao_mat_cookie')
            ->with('liet_ke_slide', $tat_ca_slide);
        return $views;
    }




    public function tim_kiem_san_pham(Request $request)
    {
        $keyword = $request->keywords_submit;

        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $tim_kiem_san_pham = DB::table('san_pham')->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->where('TEN_SP', 'like', '%' . $keyword . '%')
            ->orwhere('GIA', 'like', '%' . $keyword . '%')
            ->orwhere('TEN_TL', 'like', '%' . $keyword . '%')
            ->get();
        $view = view('khach_hang.tim_kiem_san_pham')
            ->with('tim_kiem_san_pham', $tim_kiem_san_pham)
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;

        // $view = view('khach_hang.tim_kiem_san_pham')
        //     ->with('liet_ke_the_loai', $tat_ca_the_loai)
        //     ->with('liet_ke_san_pham', $tat_ca_san_pham)
        //     ->with('liet_ke_slide', $tat_ca_slide);
        // return $view;
        // return view('khach_hang.tim_kiem_san_pham')->with('tim_kiem_san_pham', $tim_kiem_san_pham);
    }
    public function talent()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.talent')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function apply_job()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.apply_job')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function apply_job_m()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_san_pham = DB::table('san_pham')
            ->join('the_loai', 'the_loai.ID_THE_LOAI', '=', 'san_pham.ID_THE_LOAI')
            ->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.apply_job_m')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_san_pham', $tat_ca_san_pham)
            ->with('liet_ke_slide', $tat_ca_slide);
        return $view;
    }
    public function ung_tuyen(Request $request)
    {
        $data = array();
        // $data['id'] = $request->id;
        $data['Name'] = $request->Name;
        $data['Email'] = $request->Email;
        $data['PhoneNumber'] = $request->PhoneNumber;
        $data['dob'] = $request->dob;
        $data['hocvan'] = $request->hocvan;
        $data['diachi'] = $request->diachi;
        $data['cccd'] = $request->cccd;
        $data['kinhnghiem'] = $request->kinhnghiem;
        $data['KhuVuc'] = $request->KhuVuc;

        // if ($request->file('HINH_ANH')) {
        //     $request->file('HINH_ANH')->move('uploads/tin_tuc', $request->file('HINH_ANH')->getClientOriginalName());
        //     $data['HINH_ANH_TT'] = $request->file('HINH_ANH')->getClientOriginalName();
        // }

        DB::table('talent')->insert($data);
        Session::put('tin_nhan', 'Ứng tuyển  thành công!');
        return Redirect::to('trang_chu');
    }
    public function ung_tuyen_m(Request $request)
    {
        $data = array();
        // $data['id'] = $request->id;
        $data['Name'] = $request->Name;
        $data['Email'] = $request->Email;
        $data['PhoneNumber'] = $request->PhoneNumber;
        $data['dob'] = $request->dob;
        $data['diachi'] = $request->diachi;
        $data['cccd'] = $request->cccd;
        $data['KhuVuc'] = $request->KhuVuc;

        if ($request->file('CV')) {
            $request->file('CV')->move('uploads/talent', $request->file('CV')->getClientOriginalName());
            $data['CV'] = $request->file('CV')->getClientOriginalName();
        }

        DB::table('talent')->insert($data);
        Session::put('tin_nhan', 'Ứng tuyển  thành công!');
        return Redirect::to('trang_chu');
    }
}
