<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use PhpParser\Node\Expr\BinaryOp\Equal;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\ThanhToanRequest;
use Illuminate\Support\Facades\Mail;

session_start();

class ThanhToanController extends Controller
{
    public function luu_thanh_toan(ThanhToanRequest $request)
    {
        if (!Session::get('ten')) {
            Session::put('tin_nhan', 'Vui lòng đăng nhập để thanh toán.');
            return Redirect::to('dang_nhap');
        }
        $data['ID_NGUOI_DUNG'] = Session('id');
        $data['TEN_NGUOI_NHAN'] = $request->ten;
        $data['DIA_CHI_GIAO'] = $request->dia_chi;
        $data['DIEN_THOAI_NGUOI_NHAN'] = $request->dien_thoai;
        $data['GHI_CHU'] = $request->ghi_chu;
        $data['PHUONG_THUC_THANH_TOAN'] = $request->phuong_thuc;
        $data['TRANG_THAI'] = 'Chờ Xác Nhận';
        $data['TONG_CONG'] = Cart::subtotal(0, 0, 0);
        $data['PHI_VAN_CHUYEN'] = 0;
        $data['TONG_CONG_CUOI_CUNG'] = Cart::total(0, 0, 0);
        $data['NGAY_TAO'] = date('y/m/d H:i:s');
        $id_don_hang = DB::table('don_hang')->insertGetId($data);
        $content = Cart::content();
        foreach ($content as $c) {
            $chi_tiet_don_hang['ID_DON_HANG'] = $id_don_hang;
            $chi_tiet_don_hang['ID_SAN_PHAM'] = $c->id;
            $chi_tiet_don_hang['SO_LUONG'] = $c->qty;
            $chi_tiet_don_hang['TONG_CONG'] = $c->subtotal;
            $chi_tiet_don_hang['NGAY_TAO'] = date('y/m/d H:i:s');
            $id_chi_tiet_don_hang = DB::table('chi_tiet_don_hang')->insertGetId($chi_tiet_don_hang);
        }
        $nguoi_dat_hang = DB::table('nguoi_dung')->where('ID_NGUOI_DUNG', Session('id'))->first();
        $name = $nguoi_dat_hang->HO_TEN;
        $email_dat_hang = $nguoi_dat_hang->EMAIL;
        Mail::send('khach_hang.gui_mail', compact('name'), function ($email) use ($name, $email_dat_hang) {
            $email->subject('Thông báo đặt hàng thành công');
            $email->to($email_dat_hang, $name);
        });
        Session::put('id_don_hang', $id_don_hang);
        Session::put('tin_nhan_don_hang', 'Đặt hàng thành công! Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
        Cart::destroy();
        if ($request->phuong_thuc == 'Tiền Mặt') {
            return Redirect::to('hien_thi_gio_hang#giuahang');
        }

        if ($request->phuong_thuc == 'VNPAY') {
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost:8888/decos/public/thanh_toan_thanh_cong";
            $vnp_TmnCode = "OYDI2DG8"; //Mã website tại VNPAY 
            $vnp_HashSecret = "KXZHAQVRWUYJUACCPINIBCZWWHJSSBUH"; //Chuỗi bí mật

            $code_cart = rand(00, 9999);
            $vnp_TxnRef = $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Test thanh toán';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = Cart::total(0, 0, 0);
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }

            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );

            if ($request->phuong_thuc == 'VNPAY') {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
        }
    }
    public function thanh_toan_thanh_cong()
    {
        $tat_ca_the_loai = DB::table('the_loai')
            ->where('TRANG_THAI', 'Hiển Thị')->get();
        $tat_ca_slide = DB::table('hinh_anh_slide')->get();
        $view = view('khach_hang.thanh_toan_thanh_cong')
            ->with('liet_ke_the_loai', $tat_ca_the_loai)
            ->with('liet_ke_slide', $tat_ca_slide)
            ->with('thong_tin_thanh_toan', Session::get('thong_tin_thanh_toan'));
        return $view;
    }
}
