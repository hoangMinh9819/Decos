@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
<?php

use Illuminate\Support\Facades\Session;

$tin_nhan = Session::get('tin_nhan');
if ($tin_nhan) {
	echo '<span class="text-alert">' . $tin_nhan . '</span>';
	Session::put('tin_nhan', null);
}
?>
<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<!--login form-->
					<h2>Đăng Nhập Vào Tài Khoản</h2>
					<form action="#">
						<input type="text" placeholder="Tên" />
						<input type="email" placeholder="Email" />
						<span>
							<input type="checkbox" class="checkbox">
							Nhớ đăng nhập
						</span>
						<span><input type="checkbox" /> Ghi nhớ</span>
						<h6><a href="#">Quên mật khẩu?</a></h6>
						<button type="submit" class="btn btn-default">Đăng Nhập</button>
					</form>
				</div>
				<!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">HOẶC</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
					<!--sign up form-->
					<h2>Đăng Ký Tài Khoản Mới</h2>
					<form action="#">
						<input type="text" placeholder="Tên" />
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Mật Khẩu" />
						<button type="submit" class="btn btn-default">Đăng Ký</button>
					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>
<!--/form-->
@endsection