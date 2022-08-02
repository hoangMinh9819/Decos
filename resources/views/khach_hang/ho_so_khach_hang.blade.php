@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <h2 class="title text-center">Hồ sơ khách hàng</h2>
                <div class="panel-body">
                        <div class="container">
                            <form role="form"
                                action="{{ URL::to('/cap_nhat_ho_so_khach_hang/' . $khach_hang->ID_NGUOI_DUNG) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="hinhanh">Chân Dung</label><br>
                                    <img src="{{ URL::to('/uploads/nguoi_dung/' . $khach_hang->HINH_ANH) }}" width="300">
                                </div>
                                <div class="form-group">
                                    <label for="ten">Tên khách hàng</label>
                                    <input type="text" value="{{ $khach_hang->HO_TEN }}" name="ten"
                                        class="form-control" id="ten" placeholder="Tên danh mục" style="width: 700px;">
                                </div>
                                <div class="form-group">
                                    <label for="diachi">Địa Chỉ</label>
                                    <input type="text" value="{{ $khach_hang->DIA_CHI }}" name="dia_chi"
                                        class="form-control" id="diachi" placeholder="Địa chỉ" style="width: 700px;">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $khach_hang->EMAIL }}" name="email"
                                        class="form-control" id="email" placeholder="Email" required style="width: 700px;">
                                </div>
                                <div class="form-group">
                                <label for="matkhau">Mật khẩu</label>
                                <input type="password" value="{{ $khach_hang->MAT_KHAU }}" name="mat_khau"
                                    style="width: 700px;" class="input form-control" id="matkhau" placeholder="matkhau"
                                    required="true" aria-label="password" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide();">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>

                                <script>
                                    function password_show_hide() {
                                        var x = document.getElementById("matkhau");
                                        var show_eye = document.getElementById("show_eye");
                                        var hide_eye = document.getElementById("hide_eye");
                                        hide_eye.classList.remove("d-none");
                                        if (x.type === "matkhau") {
                                            x.type = "text";
                                            show_eye.style.display = "none";
                                            hide_eye.style.display = "block";
                                        } else {
                                            x.type = "matkhau";
                                            show_eye.style.display = "block";
                                            hide_eye.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                                <div class="form-group">
                                    <label for="dienthoai">Điện Thoại</label>
                                    <input type="text" value="{{ $khach_hang->DIEN_THOAI }}" name="dien_thoai"
                                        class="form-control" id="dienthoai" placeholder="Điện Thoại" style="width: 700px;">
                                </div>
                                <button type="submit" name="ho_so_khach_hang" class="btn btn-info">Cập Nhật Thông
                                    Tin</button>
                            </form>
                        </div>
                </div>
            </section>

        </div>
    </div>
@endsection
