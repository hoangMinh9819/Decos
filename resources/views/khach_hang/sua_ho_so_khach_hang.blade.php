@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật khách hàng
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/cap_nhat_ho_so_khach_hang/' . $khach_hang->ID_NGUOI_DUNG) }}"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="ten">Tên khách hàng</label>
                                <input type="text" value="{{ $khach_hang->HO_TEN }}" name="ten" class="form-control"
                                    id="ten" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="matkhau">Mật Khẩu</label>
                                <input type="text" value="{{ $khach_hang->MAT_KHAU }}" name="mat_khau"
                                    class="form-control" id="matkhau" placeholder="Mật khẩu" required>
                            </div>
                            <div class="form-group">
                                <label for="diachi">Địa Chỉ</label>
                                <input type="text" value="{{ $khach_hang->DIA_CHI }}" name="dia_chi" class="form-control"
                                    id="diachi" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="{{ $khach_hang->EMAIL }}" name="email" class="form-control"
                                    id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="dienthoai">Điện Thoại</label>
                                <input type="text" value="{{ $khach_hang->DIEN_THOAI }}" name="dien_thoai"
                                    class="form-control" id="dienthoai" placeholder="Điện Thoại">
                            </div>
                            {{-- <div class="form-group">
                                <label for="hinhanh">Hình Ảnh</label>
                                <input type="file" value="{{ $khach_hang->HINH_ANH }}" name="hinh_anh"
                                    class="form-control" id="hinhanh" placeholder="Hình Ảnh">
                            </div> --}}
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <select name="trang_thai" class="form-control input-sm m-bot15">
                                    <option value="hoat_dong">Hoạt Động</option>
                                    <option value="bi_chan">Bị Chặn</option>
                                </select>
                            </div>
                            <button type="submit" name="cap_nhat_khach_hang" class="btn btn-info">Cập Nhật Khách
                                Hàng</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
