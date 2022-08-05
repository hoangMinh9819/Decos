@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Đơn Hàng
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/luu_don_hang')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đơn Hàng</label>
                            <input type="text" name="don_hang" class="form-control" id="exampleInput" placeholder="Đơn hàng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Người Nhận</label>
                            <input type="text" name="ten_nguoi_nhan" class="form-control" id="exampleInput" placeholder="Tên người nhận">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa Chỉ Đơn Hàng</label>
                            <input type="text" name="dia_chi_giao_hang" class="form-control" id="exampleInput" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số Điện Thoại</label>
                            <input type="text" name="so_dien_thoai" class="form-control" id="exampleInput" placeholder="Số Điện Thoại">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phương Thức Thanh Toán</label>
                            <input type="text" name="phuong_thuc_thanh_toan" class="form-control" id="exampleInput" placeholder="Phương Thức Thanh Toán">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng Thái</label>
                            <textarea style="resize: none" rows="8" name="trang_thai" class="form-control" id="exampleInputPassword1"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị / Ẩn</label>
                            <select name="trang_thai_danh_muc" class="form-control input-sm m-bot15">
                                <option value="Ẩn">Ẩn</option>
                                <option value="Hiện">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="them_don_hang" class="btn btn-info">Thêm Đơn Hàng</button>
                    </form>
                </div>
        </section>

    </div>
</div>
@endsection