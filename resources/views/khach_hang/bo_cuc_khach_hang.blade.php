<?php

use Illuminate\Support\Facades\Session;

$id = Session::get('id');
$ten = Session::get('ten');
$hinh = Session::get('hinh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | DECOS</title>
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/bootstrap.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/font-awesome.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/prettyPhoto.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/price-range.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/animate.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/main.css')}}">
	<link type="text/css" rel="stylesheet" href="{{URL::asset('public/giao_dien/css/responsive.css')}}">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="/public/giao_dien/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/public/giao_dien/images/ico/apple-touch-icon-144-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/public/giao_dien/images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/public/giao_dien/images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" href="/public/giao_dien/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<!-- <li><a href=""><i class="fa fa-phone"></i> 0902252846</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-envelope"></i> mynameisminh191998@gmail.com</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/decosoriginal"><i class="fa fa-facebook"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<!-- <a href="index.html"><img src="{{asset('public/giao_dien/images/home/logo.png')}}" alt="" /></a> -->
						</div>
						<div class="btn-group pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div> -->

							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<!-- <li><a href="qtv_dang_nhap"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
								<?php if ($ten == null) { ?>
									<li><a href="{{ URL::to('/dang_nhap') }}"><i class="fa fa-lock"></i> Đăng Nhập / Đăng Ký</a></li>
								<?php } else { ?>
									<li><a href="{{URL::to('/dang_xuat')}}"><i class="fa fa-lock"></i> Đăng Xuất</a></li>
									<li><img alt="" src="{{URL::to('public/uploads/nguoi_dung/'.$hinh)}}" width="40"></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang_chu')}}" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="#">Sản Phẩm<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="{{URL::to('/tat_ca_san_pham')}}">Tất Cả Sản Phẩm</a></li>
									</ul>
								</li>
								<!-- <li class="dropdown"><a href="#">Tin Tức</i></a></li> -->
								<!-- <li><a href="404.html">Giỏ Hàng</a></li> -->
								<!-- <li><a href="contact-us.html">Liên Hệ</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<!-- <input type="text" placeholder="Search" /> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->

	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div>
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							@foreach($liet_ke_slide as $slide => $gia_tri)
							<li data-target="#slider-carousel" data-slide-to="{{$gia_tri->ID_SLIDE}}"></li>
							@endforeach
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-9">
									<img src="{{asset('public/uploads/slide/z3513568049831_8b113a298ba7804e93a61b8ee14e7672.jpg')}}" class="girl img-responsive" alt="" />
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2>Thương Hiệu Thời Trang Nữ Cao Cấp Do Người Việt Sáng Lập.</h2>
									<p>DECOS là một thương hiệu thời trang thiết kế được có trụ sở tại Sài Gòn ra đời vào năm 2018 
										với mong muốn tạo ra những sản phẩm chất lượng cao, có khả năng mang đến cho các tín đồ thời trang 
										một diện mạo mới với tinh thần Delicate Choices Of Shopaholic.</p>
									<!-- <button type="button" class="btn btn-default get">Sở Hữu Ngay</button> -->
								</div>
							</div>

							@foreach($liet_ke_slide as $slide => $gia_tri)
							<div class="item">
								<div class="col-sm-9">
									<img src="{{asset('public/uploads/slide/'.$gia_tri->HINH_ANH)}}" class="girl img-responsive" alt="" />
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2>Thương Hiệu Thời Trang Nữ Cao Cấp Do Người Việt Sáng Lập.</h2>
									<p>DECOS là một thương hiệu thời trang thiết kế được có trụ sở tại Sài Gòn ra đời vào năm 2018 
										với mong muốn tạo ra những sản phẩm chất lượng cao, có khả năng mang đến cho các tín đồ thời trang 
										một diện mạo mới với tinh thần Delicate Choices Of Shopaholic.</p>
									<!-- <button type="button" class="btn btn-default get">Sở Hữu Ngay</button> -->
								</div>
							</div>
							@endforeach
						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="left-sidebar">
						<h2>Bộ Sưu Tập</h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->
							@foreach($liet_ke_the_loai as $the_loai => $gia_tri)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('the_loai_san_pham/'.$gia_tri->ID_THE_LOAI)}}" style="color: purple;">{{$gia_tri->TEN_TL}}</a></h4>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				@yield('noi_dung')
			</div>
		</div>
	</section>

	<footer id="footer">
		<!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/giao_dien/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/giao_dien/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/giao_dien/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/giao_dien/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('public/giao_dien/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->



	<script src="{{asset('public/giao_dien/js/jquery.js')}}"></script>
	<script src="{{asset('public/giao_dien/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/giao_dien/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/giao_dien/js/price-range.js')}}"></script>
	<script src="{{asset('public/giao_dien/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('public/giao_dien/js/main.js')}}"></script>
</body>

</html>