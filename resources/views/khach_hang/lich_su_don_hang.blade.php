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
    <h1>Lịch sử đơn hàng</h1>
    <table class="table table-striped b-t b-light" id="myTable">
        <thead>
            <tr>
                <th>Tên người nhận</th>
                <th>Địa chỉ</th>
                <th>Điện thoại người nhận</th>
                <th>Tổng cộng</th>
                <th>Trạng Thái</th>
                <th style="width:150px;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tat_ca_don_hang as $chia_khoa => $don_hang)
            <tr>
                <td>{{ $don_hang->TEN_NGUOI_NHAN }}</td>
                <td>{{ $don_hang->DIA_CHI_GIAO }}</td>
                <td>{{ $don_hang->DIEN_THOAI_NGUOI_NHAN }}</td>
                <td>{{ $don_hang->TONG_CONG_CUOI_CUNG }}</td>
                <td>{{ $don_hang->TRANG_THAI_DH }}</td>
                <td><a href="{{ URL::to('/chi_tiet_don_hang/' . $don_hang->ID_DON_HANG) }}" class="active" ui-toggle-class="">
                        Xem Chi Tiết
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection