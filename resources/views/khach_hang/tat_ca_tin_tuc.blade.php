@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="col-sm-2">
        <div class="left-sidebar">
            <h2>Tin tức nổi bật</h2>
            <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                @foreach ($liet_ke_the_loai as $tin_tuc => $gia_tri)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="{{ URL::to('the_loai_tin_tuc/' . $gia_tri->ID_THE_LOAI) }}"
                                    style="color: #94C03C;">{{ $gia_tri->TEN_TL }}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-sm-10 padding-right" id="giua_trang">
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">Tin tức</h2>
            @foreach ($liet_ke_tin_tuc as $tin_tuc => $gia_tri)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">

                                <a href="{{ URL::to('/chi_tiet_tin_tuc/' . $gia_tri->ID_TIN_TUC) }}"> <img
                                        src="{{ asset('uploads/tin_tuc/' . $gia_tri->HINH_ANH_TT) }}" alt="" />
                                </a>
                                <p>{{ $gia_tri->TIEU_DE }}</p>
                            </div>
                            {{-- <div class="product-overlay">
                                <a href="{{URL::to('/chi_tiet_tin_tuc/'.$gia_tri->ID_TIN_TUC)}}">
                                <div class="overlay-content"><img
                                        src={{ asset('uploads/tin_tuc/' . $gia_tri->HINH_ANH_TT) }} alt=""
                                        width="290px" /></a>
                                    <p>{{ $gia_tri->TIEU_DE }}</p>
                                    <br>
                                    {{ $gia_tri->NOI_DUNG }}</p>
                                </div>
                            </div> --}}
                        </div>
                        <!-- <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">&raquo;</a></li>
                </ul>
            </div>

        </div>

        <!--features_items-->
    </div>
@endsection
