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
    <?php

    use Illuminate\Support\Facades\Session;

    if (Session('tin_nhan_gop_y')) {
        echo '<h1 style="color: green;">' . Session('tin_nhan_gop_y') . '</h1>';
        Session::put('tin_nhan_gop_y', null);
    } else {
    ?>
        <form method="POST" action="{{URL::to('/luu_gop_y#giua_trang')}}">
            @csrf
            <h1 style="color: green;">Quý khách hãy nhập góp ý vào khung bên dưới</h1>
            <textarea name="gop_y" style="height: 250px;"></textarea>
            <input type="submit" style="margin-top:20px; width: 200px; height: 30px; background-color: yellow;" value="Gửi" required>
        </form>
    <?php
    }
    ?>
</div>
@endsection
