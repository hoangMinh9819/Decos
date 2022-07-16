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
								<img src="{{asset('uploads/san_pham/'.$gia_tri->options->image)}}" alt="" width="50"/></a>
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
                                    <input type="hidden" value="{{$gia_tri->rowId}}" name="rowId_gio_hang" class="form-control"/>
                                    <input type="submit" value="Cập nhật" name="cap_nhat_so_luong" class="btn btn-default btn-sm"/>
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php $tong = $gia_tri->price * $gia_tri->qty; echo number_format($tong)?> VND</p>
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
				<!-- <div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div> -->
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Thành Tiền <span>{{Cart::subtotal()}} VND</span></li>
							<li>Thuế <span>{{Cart::tax()}} VND</span></li>
							<li>Phí Vận Chuyển <span>Free</span></li>
							<li>Tổng <span>{{Cart::total()}} VND</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							<a class="btn btn-default check_out" href="{{URL::to('/dang_nhap_thanh_toan')}}">Thanh Toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

</div>
@endsection