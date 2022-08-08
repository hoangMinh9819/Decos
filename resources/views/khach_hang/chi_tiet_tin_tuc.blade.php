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
                    <h4 class="panel-title"><a href="{{URL::to('the_loai_gia_tri/'.$gia_tri->ID_THE_LOAI)}}" style="color: #94C03C;">{{$gia_tri->TEN_TL}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="col-sm-10 padding-right">
    <div class="product-details">
        <div class="col-sm-12">
            <div c2lass="view-product">
                <h1>{{ $tin_tuc->TIEU_DE }}</h1>
                <br>
                <br>
                <div style="text-align: center">
                    <img src="{{ asset('uploads/tin_tuc/'.$tin_tuc->HINH_ANH_TT) }}" alt="" style="height:auto;width:50%;">
                </div>
                <br>
                <br>
                <p style="font-size: 18px">{{$tin_tuc->NOI_DUNG}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
