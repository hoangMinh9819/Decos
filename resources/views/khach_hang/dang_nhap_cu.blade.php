<!DOCTYPE html>
<head>
<title>Trang Đăng Nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="nhan_vien/css/style.css" rel='stylesheet' type='text/css' />
<link href="nhan_vien/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="nhan_vien/css/font.css" type="text/css"/>
<link href="nhan_vien/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="nhan_vien/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng Nhập</h2>
	<?php 
	use Illuminate\Support\Facades\Session;
	$tin_nhan = Session::get('tin_nhan');
	if($tin_nhan){
		echo '<span class="text-alert">'.$tin_nhan.'</span>';
		Session::put('tin_nhan',null);
	}
	?>
		<form action="{{URL::to('/kiem_tra_dang_nhap')}}" method="post">
			{{csrf_field()}}
			<input type="text" class="ggg" name="email" placeholder="Tài khoản / e-mail" required="">
			<input type="password" class="ggg" name="mat_khau" placeholder="Mật khẩu" required="">
			<span><input type="checkbox" /> Ghi nhớ</span>
			<h6><a href="#">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Chưa có tài khoản?<a href="registration.html">Đăng ký</a></p>
</div>
</div>
<script src="nhan_vien/js/bootstrap.js"></script>
<script src="nhan_vien/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="nhan_vien/js/scripts.js"></script>
<script src="nhan_vien/js/jquery.slimscroll.js"></script>
<script src="nhan_vien/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="nhan_vien/js/jquery.scrollTo.js"></script>
</body>
</html>
