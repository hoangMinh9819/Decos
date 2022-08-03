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
                    <h4 class="panel-title"><a href="{{URL::to('the_loai_san_pham/'.$gia_tri->ID_THE_LOAI.'#giua_trang')}}" style="color: #94C03C;">{{$gia_tri->TEN_TL}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="col-sm-10 padding-right" id="giua_trang">
    <div class="product-details">
        <!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{ asset('uploads/san_pham/' . $san_pham->HINH_ANH) }}" alt="" style="height:auto;width:100%;">
                <!-- <h3>ZOOM</h3> -->
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- <a href=""><img src="{{ asset('khach_hang/images/product-details/similar1.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('khach_hang/images/product-details/similar2.jpg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('khach_hang/images/product-details/similar3.jpg') }}" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7" >
            <div class="product-information">
                <!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{ $san_pham->TEN_SP }}</h2>
                <p>Mã ID: {{ $san_pham->ID_SAN_PHAM }}</p>
                <img src="images/product-details/rating.png" alt="" />
                <?php if($san_pham->TRANG_THAI_SP == 'Còn Hàng'){?>
                <form method="POST" action="{{URL::to('/luu_gio_hang')}}">
                    {{csrf_field()}}
                    <span>
                        <span>{{ number_format($san_pham->GIA) }} VND</span>
                        <label>Số lượng: </label>
                        <input type="number" name="so_luong" min="1" value="1" />
                        <input type="hidden" name="san_pham_id_an" value="{{$san_pham->ID_SAN_PHAM}}" />
                        <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Thêm giỏ hàng
                        </button>
                    </span>
                </form>
                <?php }?>
                <p><b>Tình trạng: </b>{{ $san_pham->TRANG_THAI_SP }}</p>
                <p><b>Bộ Sưu Tập:</b> {{ $san_pham->TEN_TL }}</p>
                <p><b>Mô tả ngắn: </b>{{ $san_pham->MO_TA_NGAN }}</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
            </div>
            <!--/product-information-->
        </div>
    </div>
    <!--/product-details-->

    <div class="category-tab shop-details-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab">Mô Tả Chi Tiết</a></li>
                <!-- <li><a href="#companyprofile" data-toggle="tab">Hồ Sơ Công Ty</a></li>
                <li><a href="#tag" data-toggle="tab">Đánh giá</a></li> -->
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="details">
                <p>{{$san_pham->MO_TA_SP}}</p>
            </div>
        </div>
    </div>
    <!--/category-tab-->

    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">Trang Phục Đặc Sắc</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <?php
                    $count = 0;
                    foreach ($san_pham_dac_sac as $san_pham => $gia_tri) {
                        $count++;
                    ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{URL::to('/chi_tiet_san_pham/'.$gia_tri->ID_SAN_PHAM.'#giua_trang')}}">
                                            <img src="{{asset('uploads/san_pham/'.$gia_tri->HINH_ANH)}}" alt="" /></a>
                                        <h2>{{number_format($gia_tri->GIA)}} VND</h2>
                                        <p>{{$gia_tri->TEN_SP}}</p>
                                        <!-- <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($count == 3) break;
                    }
                    ?>
                </div>
                <div class="item">
                    <?php
                    $count = 0;
                    foreach ($san_pham_dac_sac as $san_pham => $gia_tri) {
                        $count++;
                        if ($count > 3) {
                    ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{URL::to('/chi_tiet_san_pham/'.$gia_tri->ID_SAN_PHAM.'#giua_trang')}}">
                                                <img src="{{asset('uploads/san_pham/'.$gia_tri->HINH_ANH)}}" alt="" /></a>
                                            <h2>{{number_format($gia_tri->GIA)}} VND</h2>
                                            <p>{{$gia_tri->TEN_SP}}</p>
                                            <!-- <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                        if ($count == 6) break;
                    }
                    ?>

                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!--/recommended_items-->
</div>
@endsection