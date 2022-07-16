@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
<div class="col-sm-10 padding-right">
	<section id="form">
		<!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<!--login form-->
						<h2>Đăng Nhập Vào Tài Khoản</h2>
						<?php

						use Illuminate\Support\Facades\Session;

						if (Session::get('tin_nhan')) {
							echo '<p style="color: red;">' . Session::get('tin_nhan') . '</p>';
							Session::put('tin_nhan', null);
						}
						?>
						<form action="{{URL::to('/kiem_tra_dang_nhap')}}" method="post">
							{{csrf_field()}}
							<input type="text" name="email" placeholder="Email" required />
							<input type="password" name="mat_khau" placeholder="Mật Khẩu" required />
							<span>
								<input type="checkbox" class="checkbox">
								Nhớ đăng nhập
							</span>
							<!-- <span><input type="checkbox" /> Ghi nhớ</span> -->
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
						<?php
						if (Session::get('tin_nhan_dang_ky')) {
							echo '<p style="color: green;">' . Session::get('tin_nhan_dang_ky') . '</p>';
							Session::put('tin_nhan_dang_ky', null);
						}
						?>
						<form action="{{URL::to('/dang_ky')}}" method="post">
							{{csrf_field()}}
							<input type="text" name="ten" placeholder="Họ Tên" required />
							<input type="text" name="email" placeholder="Email" required />
							<input type="password" name="mat_khau" placeholder="Mật Khẩu" required />
							<input type="text" name="dien_thoai" placeholder="Điện Thoại" required />
							<input type="text" name="dia_chi" placeholder="Địa Chỉ" />
							<button type="submit" class="btn btn-default">Đăng Ký</button>
						</form>
					</div>
					<!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	<!--/form-->
</div>
@endsection