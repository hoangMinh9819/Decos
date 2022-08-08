@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h1 style="color: green"> Cập nhật thông tin khách hàng</h1>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/cap_nhat_ho_so_khach_hang/' . $khach_hang->ID_NGUOI_DUNG) }}"
                        method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group" style="text-align:center;display: inline-block;">
                            <label for="HINH_ANH">Chân Dung</label><br>
                            <img src="{{ URL::to('/uploads/nguoi_dung/' . $khach_hang->HINH_ANH) }}" width="300" style="text-align:center">
                            <hr>
                            <input type="file" name="HINH_ANH" id="HINH_ANH" required>
                        </div>
                        <div class="form-group">
                            <label for="HO_TEN">Tên khách hàng</label>
                            <input type="text" value="{{ $khach_hang->HO_TEN }}" name="HO_TEN" class="form-control"
                                id="HO_TEN" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="MAT_KHAU">Mật Khẩu</label>
                            <input type="text" value="{{ $khach_hang->MAT_KHAU }}" name="MAT_KHAU" class="form-control"
                                id="MAT_KHAU" placeholder="Mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="DIA_CHI">Địa Chỉ</label>
                            <input type="text" value="{{ $khach_hang->DIA_CHI }}" name="DIA_CHI" class="form-control"
                                id="DIA_CHI" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="EMAIL">Email</label>
                            <input type="text" value="{{ $khach_hang->EMAIL }}" name="EMAIL" class="form-control"
                                id="EMAIL" placeholder="EMAIL" required>
                        </div>
                        <div class="form-group">
                            <label for="DIEN_THOAI">Điện Thoại</label>
                            <input type="text" value="{{ $khach_hang->DIEN_THOAI }}" name="DIEN_THOAI"
                                class="form-control" id="DIEN_THOAI" placeholder="Điện Thoại">
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
                        <button class="btn btn-success" name="keywords_submit"> Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
@endsection
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=email],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=date],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* input[type=file], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    } */
</style>
