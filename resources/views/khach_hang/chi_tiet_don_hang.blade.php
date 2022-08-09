@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
<div class="col-sm-2">
    <div class="left-sidebar">
        <h2>Bộ Sưu Tập</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach($liet_ke_the_loai as $the_loai => $gia_tri)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{URL::to('the_loai_san_pham/'.$gia_tri->ID_THE_LOAI)}}" style="color: #94C03C;">{{$gia_tri->TEN_TL}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="col-sm-10 padding-right" id="giua_trang">
    <h5>ID Đơn Hàng: {{$don_hang->ID_DON_HANG}}</h5>
    <h5>Tên Người Nhận: {{$don_hang->TEN_NGUOI_NHAN}}</h5>
    <h5>Địa Chỉ Giao: {{$don_hang->DIA_CHI_GIAO}}</h5>
    <h5>Điện Thoại Người Nhận: {{$don_hang->DIEN_THOAI_NGUOI_NHAN}}</h5>
    <h5>Phương Thức Thanh Toán: {{$don_hang->PHUONG_THUC_THANH_TOAN}}</h5>
    <h5>Chi Tiết Đơn Hàng:</h5>
    <ul>
    @foreach($chi_tiet_don_hang as $key => $chi_tiet)
    <li>{{$chi_tiet->TEN_SP}} - Đơn Giá: {{$chi_tiet->GIA}} - Số lượng: {{$chi_tiet->SO_LUONG}}</li>
    @endforeach
    </ul>
    <h5>Tổng Cộng: {{$don_hang->TONG_CONG}} VND</h5>
    <h5>Trạng Thái: {{$don_hang->TRANG_THAI_DH}}</h5>
</div>
@endsection