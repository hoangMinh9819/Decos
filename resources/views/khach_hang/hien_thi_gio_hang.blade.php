@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
<div class="col-sm-7 padding-right">
	<section id="cart_items">
		<div class="container">
			<!-- <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div> -->
			<div class="table-responsive cart_info">
				<?php
				if(Session('tin_nhan_don_hang')){
					echo '<h3 style="color: green;">'.Session('tin_nhan_don_hang').'</h3>';
					Session::put('tin_nhan_don_hang',null);
				}
				$content = Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh</td>
							<td class="description">Tên Sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $gia_tri)
						<tr>
							<td class="cart_product">
								<a href="">
									<img src="{{asset('uploads/san_pham/'.$gia_tri->options->image)}}" alt="" width="50" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$gia_tri->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($gia_tri->price)}} VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('cap_nhat_so_luong')}}" method="POST">
										{{csrf_field()}}
										<!-- <a class="cart_quantity_up" href=""> + </a> -->
										<input class="cart_quantity_input" type="text" name="so_luong" value="{{$gia_tri->qty}}" size="2">
										<!-- <a class="cart_quantity_down" href=""> - </a> -->
										<input type="hidden" value="{{$gia_tri->rowId}}" name="rowId_gio_hang" class="form-control" />
										<input type="submit" value="Cập nhật" name="cap_nhat_so_luong" class="btn btn-default btn-sm" />
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php $tong = $gia_tri->price * $gia_tri->qty;
															echo number_format($tong) ?> VND</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/xoa_gio_hang/'.$gia_tri->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<!-- <div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div> -->
			<div class="row">
				<div class="col-sm-6 clearfix">
					<div class="bill-to">
						<div class="form-one">
							<p>Thông Tin Người Nhận</p>
							<form method="POST" action="{{URL::to('/luu_thanh_toan')}}">
								{{csrf_field()}}
								<input type="text" name="ten" placeholder="Họ Tên *">
								<input type="text" name="dia_chi" placeholder="Địa Chỉ *">
								<input type="text" name="dien_thoai" placeholder="Điện Thoại *">
								<label>Phương Thức Thanh Toán:</label>
								<select style="margin-bottom: 10px;" name="phuong_thuc">
									<option value="Tiền Mặt">Tiền Mặt</option>
									<option value="Thẻ ATM">Thẻ ATM</option>
								</select>
								<textarea name="ghi_chu" placeholder="Ghi chú . . ." rows="8"></textarea>
								<input type="submit" value="Đặt Hàng" class="btn btn-primary btn-sm">
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Thành Tiền <span>{{Cart::subtotal()}} VND</span></li>
							<li>Thuế <span>{{Cart::tax()}} VND</span></li>
							<li>Phí Vận Chuyển <span>Free</span></li>
							<li>Tổng <span>{{Cart::total()}} VND</span></li>
						</ul>
						<!-- <a class="btn btn-default update" href="">Update</a> -->
						</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--/#do_action-->

</div>
@endsection