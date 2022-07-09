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
					<h4 class="panel-title"><a href="">{{$gia_tri->TEN}}</a></h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="col-sm-10 padding-right">
	<div class="features_items">
		<!--features_items-->
		<h2 class="title text-center">Trang Phục Mới</h2>
		<?php
		$count = 0;
		foreach ($liet_ke_san_pham as $san_pham => $gia_tri) {
			if ($gia_tri->MOI == true) {
				$count++;
		?>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH)}} alt="" />
								<h2>{{$gia_tri->GIA}} VND</h2>
								<p>{{$gia_tri->TEN}}</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							<div class="product-overlay">
								<div class="overlay-content">
									<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH_HAI)}} alt="" width="290px" />
									<h2>{{$gia_tri->GIA}} VND</h2>
									<p>{{$gia_tri->TEN}}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</div>
						</div>
						<!-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> -->
					</div>
				</div>
		<?php
				if ($count == 6) break;
			}
		}
		?>
	</div>
	<!--features_items-->
	<div class="recommended_items">
		<!--recommended_items-->
		<h2 class="title text-center">Trang Phục Bán Chạy</h2>
		<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<?php
					$count = 0;
					foreach ($liet_ke_san_pham as $san_pham => $gia_tri) {
						if ($gia_tri->BAN_CHAY == true) {
							$count++;
					?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH)}} alt="" />
											<h2>{{$gia_tri->GIA}} VND</h2>
											<p>{{$gia_tri->TEN}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
							</div>
					<?php
							if ($count == 3) break;
						}
					}
					?>
				</div>
				<div class="item">
					<?php
					$count = 0;
					foreach ($liet_ke_san_pham as $san_pham => $gia_tri) {
						if ($gia_tri->BAN_CHAY == true) {
							$count++;
					?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH_HAI)}} alt="" width="290px" />
											<h2>{{$gia_tri->GIA}} VND</h2>
											<p>{{$gia_tri->TEN}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
							</div>
					<?php
							if ($count == 3) break;
						}
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

	<div class="features_items">
		<!--features_items-->
		<h2 class="title text-center">Trang Phục Đặc Sắc</h2>
		<?php
		$count = 0;
		foreach ($liet_ke_san_pham as $san_pham => $gia_tri) {
			if ($gia_tri->DAC_SAC == true) {
				$count++;
		?>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH)}} alt="" />
								<h2>{{$gia_tri->GIA}}VND</h2>
								<p>{{$gia_tri->TEN}}</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							<div class="product-overlay">
								<div class="overlay-content">
									<img src={{asset('public/uploads/san_pham/'.$gia_tri->HINH_ANH_HAI)}} alt="" width="290px" />
									<h2>{{$gia_tri->GIA}} VND</h2>
									<p>{{$gia_tri->TEN}}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</div>
						</div>
						<!-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> -->
					</div>
				</div>
		<?php
				if ($count == 6) break;
			}
		}
		?>
	</div>
</div>
@endsection