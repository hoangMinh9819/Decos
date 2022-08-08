@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Sản Phẩm
                </header>
                <div class="panel-body">
                    @foreach ($sua_san_pham as $key => $gia_tri)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/cap_nhat_san_pham/' . $gia_tri->ID_THE_LOAI) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh </label>
                                    <input type="file" value="{{ $gia_tri->HINH_ANH }}" name="HINH_ANH"
                                        class="form-control" placeholder="Hình Ảnh" id="hinhanh">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Hai</label>
                                    <input type="file" value="{{ $gia_tri->HINH_ANH_HAI }}" name="HINH_ANH_HAI"
                                        class="form-control" placeholder="Hình Ảnh" id="hinhanhhai">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thể Loại</label>
                                    <input type="text" name="ID_THE_LOAI" class="form-control"
                                        value="{{ $gia_tri->ID_THE_LOAI }}" id="exampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                                    <input type="text" name="MA_SAN_PHAM" class="form-control"
                                        value="{{ $gia_tri->MA_SAN_PHAM }}" id="exampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="TEN_SP" class="form-control"
                                        value="{{ $gia_tri->TEN_SP }}" id="exampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đơn giá</label>
                                    <input type="number" name="GIA" class="form-control" value="{{ $gia_tri->GIA }}"
                                        id="exampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="8" name="MO_TA" class="form-control" value="{{ $gia_tri->MO_TA_SP }}"
                                        id="exampleInputPassword1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày cập nhật</label>
                                    <input type="date" name="NGAY_CAP_NHAT" class="form-control" value="{{ $gia_tri->NGAY_CAP_NHAT }}"
                                        id="exampleInput">
                                </div>
                                <div class="form-group">
                                    <label>Hiển thị / Ẩn</label>
                                    <select name="trang_thai_danh_muc" class="form-control input-sm m-bot15">
                                        <option value="Ẩn">Ẩn</option>
                                        <option value="Hiện">Hiển thị</option>
                                    </select>
                                </div>
                                <button type="submit" name="sua_san_pham" class="btn btn-info">Cập Nhật Sản phẩm</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection
