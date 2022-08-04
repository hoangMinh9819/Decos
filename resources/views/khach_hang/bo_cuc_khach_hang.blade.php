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
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/bootstrap.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/font-awesome.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/prettyPhoto.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/price-range.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/animate.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/main.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('khach_hang/css/responsive.css')}}">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="/khach_hang/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/khach_hang/images/ico/apple-touch-icon-144-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/khach_hang/images/ico/apple-touch-icon-114-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/khach_hang/images/ico/apple-touch-icon-72-precomposed.png')}}">
	<link rel="apple-touch-icon-precomposed" href="/khach_hang/images/ico/apple-touch-icon-57-precomposed.png')}}">
   <!-- an- hien mat khau -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
  <!-- font awesome 5.13.1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
</head>
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
								<li><a href=""><i class="fa fa-phone"></i> 0902252846</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> mynameisminh191998@gmail.com</a></li>
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
							<a href="{{URL::to('/trang_chu')}}"><img src="{{asset('khach_hang/images/home/logo2.jpg')}}" width="150" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if ($ten == null) { ?>
									<li><a href="{{URL::to('hien_thi_gio_hang'.'#giua_trang')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng <span style="color: red;">({{Cart::count()}})  </span></a></li>
									<li><a href="{{ URL::to('/dang_nhap'.'#giua_trang') }}"><i class="fa fa-lock"></i> Đăng Nhập / Đăng Ký</a></li>
								<?php } else { ?>
									<li><a><i class="fa fa-user"></i> Xin Chào {{$ten}}</a></li>
									<li><a href="{{URL::to('/')}}"><i class="fa fa-user"></i> Tài Khoản</a></li>
									<li><a href="{{URL::to('hien_thi_gio_hang'.'#giua_trang')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng <span style="color: red;">({{Cart::count()}})  </span></a></li>
									<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
									<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
									<li><a href="{{URL::to('/dang_xuat')}}"><i class="fa fa-lock"></i> Đăng Xuất</a></li>
									<li><img alt="" src="{{URL::to('uploads/nguoi_dung/'.$hinh)}}" width="40" style="border-radius: 15px;"></li>
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
										<li><a href="{{URL::to('/tat_ca_san_pham'.'#giua_trang')}}">Tất Cả Sản Phẩm</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{URL::to('/tat_ca_tin_tuc'.'#giua_trang')}}">Tin Tức</a></li>
                                <li class="dropdown"><a href="{{ URL::to('/thong_tin_lien_he') }}">Liên Hệ</a>
                                <li class="dropdown"><a href="{{ URL::to('talent') }}">Tuyển Dụng</a></li>
								<!-- <li><a href="404.html">Giỏ Hàng</a></li> -->
								<!-- <li><a href="contact-us.html">Liên Hệ</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" />
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
									<img src="{{asset('uploads/slide/z3513568049831_8b113a298ba7804e93a61b8ee14e7672.jpg')}}" class="girl img-responsive" alt="" 
									style="border-style: outset; border-color: black; border-width: 10px"/>
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2 style="color: #32A966;">Thương Hiệu Thời Trang Nữ Cao Cấp Do Người Việt Sáng Lập.</h2>
									<p>DECOS là một thương hiệu thời trang thiết kế được có trụ sở tại Sài Gòn ra đời vào năm 2018
										với mong muốn tạo ra những sản phẩm chất lượng cao, có khả năng mang đến cho các tín đồ thời trang
										một diện mạo mới với tinh thần Delicate Choices Of Shopaholic.</p>
									<!-- <button type="button" class="btn btn-default get">Sở Hữu Ngay</button> -->
								</div>
							</div>

							@foreach($liet_ke_slide as $slide => $gia_tri)
							<div class="item">
								<div class="col-sm-9">
									<img src="{{asset('uploads/slide/'.$gia_tri->HINH_ANH)}}" class="girl img-responsive" alt=""
									style="border-style: outset; border-color: black; border-width: 10px" />
								</div>
								<div class="col-sm-3">
									<h1><span>DECOS</span></h1>
									<h2 style="color: #32A966;">Thương Hiệu Thời Trang Nữ Cao Cấp Do Người Việt Sáng Lập.</h2>
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
				@yield('noi_dung')
			</div>
		</div>
	</section>

	<footer id="footer">
		<!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="companyinfo">
							<h2><span>Decos</span></h2>
							<p>“Năng lực con người là vô hạn.
								Đừng bao giờ nghĩ bạn bị giới hạn bởi bất cứ điều gì.
								Tôi tin khi con người biết nỗ lực,
								không ngừng học hỏi và tích luỹ kinh nghiệm lẫn chuyên môn,
								bạn sẽ tạo ra kỳ tích”.</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="address">
							<img src="{{asset('khach_hang/images/home/map.png')}}" alt="" />
							<p>DECOS HCM: 83 Dong Khoi St, District 1
								<br>DECOS HN: 23 Pho Hue St, Hoan Kiem District
								<br>DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District
							</p>
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
                            <h2>Dịch Vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tư Vấn</a></li>
                                <li><a href="#">Hỗ trợ khách hàng</a></li>
                                <li><a href="#">Đặt lịch hẹn</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="{{ URL::to('/thong_tin_lien_he') }}">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Bộ Sưu Tập</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Fall Winter 2022</a></li>
                                <li><a href="#">Fall Winter 2021</a></li>
                                <li><a href="#">Fall Winter 2020</a></li>
                                <li><a href="#">Spring Summer 2022</a></li>
                                <li><a href="#">Spring Summer 2021</a></li>
                                <li><a href="#">Spring Summer 2020</a></li>
                                <li><a href="#">Resort 2022</a></li>
                                <li><a href="#">Resort 2021</a></li>
                                <li><a href="#">Resort 2020</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính Sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Đổi Trả</a></li>
                                <li><a href="#">Hỗ trợ tư vấn</a></li>
                                <li><a href="#">Trả hàng & trao đổi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Về Chúng Tôi</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin liên hệ</a></li>
                                <li><a href="#">Quy tắc</a></li>
                                <li><a href="#">Thông báo pháp lý</a></li>
                                <li><a href="#">Chính sách Bảo mật & Cookie</a></li>
                                <li><a href="#">Thông Tin Công Ty</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Ưu Đãi</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Địa chỉ email của bạn" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Để nhận những tin tức và ưu đãi mới nhất của chúng tôi.</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Bản quyền © 2022 DECOS Inc. Chưa đăng ký bản quyền</p>
					<p class="pull-right">Thiết kế bởi nhóm 2 Decos Store.</p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->

	<script src="{{asset('khach_hang/js/jquery.js')}}"></script>
	<script src="{{asset('khach_hang/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('khach_hang/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('khach_hang/js/price-range.js')}}"></script>
	<script src="{{asset('khach_hang/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('khach_hang/js/main.js')}}"></script>
</body>

</html>
