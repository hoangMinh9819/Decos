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
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Tất Cả Sản Phẩm</h2>
        @foreach($liet_ke_san_pham as $san_pham => $gia_tri)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                    <img src={{asset('uploads/san_pham/'.$gia_tri->HINH_ANH)}} alt="" />
                        <h2>{{number_format($gia_tri->GIA)}} VND</h2>
                        <p>{{$gia_tri->TEN_SP}}</p>
                        <p>{{$gia_tri->TRANG_THAI_SP}}</p>
                        <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a> -->
                    </div>
                    <div class="product-overlay">
                                <a href="{{URL::to('/chi_tiet_san_pham/'.$gia_tri->ID_SAN_PHAM)}}">
                        <div class="overlay-content"><img src={{asset('uploads/san_pham/'.$gia_tri->HINH_ANH_HAI)}} alt="" width="290px" /></a>
                            <h2>{{number_format($gia_tri->GIA)}} VND</h2>
                            <p>{{$gia_tri->TEN_SP}}</p>
                        <p>{{$gia_tri->TRANG_THAI_SP}}</p>
                            <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a> -->
                        </div>
                    </div>
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
        <ul class="pagination">
            {{$liet_ke_san_pham->links("pagination::bootstrap-4")}}
        </ul>
    </div>
    <!--features_items-->
</div>
@endsection
