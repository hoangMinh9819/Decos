@extends('quan_tri_vien.bo_cuc_quan_tri_vien')
@section('quan_tri_vien_noi_dung')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Nhân Viên
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/luu_nhan_vien')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="ten">Tên Nhân Viên</label>
                            <input type="text" name="ten" class="form-control" id="ten" placeholder="Tên nhân viên">
                        </div>
                        <div class="form-group">
                            <label for="matkhau">Mật Khẩu</label>
                            <input type="text" name="mat_khau" class="form-control" id="matkhau" placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa Chỉ</label>
                            <input type="text" name="dia_chi" class="form-control" id="diachi" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="dienthoai">Điện Thoại</label>
                            <input type="text" name="dien_thoai" class="form-control" id="dienthoai" placeholder="Điện Thoại">
                        </div>
                        <div class="form-group">
                            <label for="hinhanh">Hình Ảnh</label>
                            <input type="file" name="hinh_anh" class="form-control" id="hinhanh" placeholder="Hình Ảnh">
                        </div>
                        <button type="submit" name="them_nhan_vien" class="btn btn-info">Thêm Nhân Viên</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection