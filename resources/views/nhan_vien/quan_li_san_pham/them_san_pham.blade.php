@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Sản Phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/luu_san_pham')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                                <label for="hinhanh">Hình Ảnh</label>
                                <input type="file" name="HINH_ANH" class="form-control" id="exampleInput"
                                    placeholder="Hình Ảnh">
                            </div>
                            <div class="form-group">
                                <label for="hinhanh">Hình Ảnh Hai</label>
                                <input type="file" name="HINH_ANH_HAI" class="form-control" id="exampleInput"
                                    placeholder="Hình Ảnh">
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thể Loại</label>
                            <input type="text" name="ID_THE_LOAI" class="form-control" id="exampleInput" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã sản phẩm</label>
                            <input type="text" name="MA_SAN_PHAM" class="form-control" id="exampleInput" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="TEN_SP" class="form-control" id="exampleInput" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đơn giá</label>
                            <input type="number" name="GIA" class="form-control" id="exampleInput" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="8" name="MO_TA" class="form-control" id="exampleInputPassword1" ></textarea>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Ngày tạo</label>
                                <input type="datetime" name="NGAY_TAO" class="form-control" id="exampleInput">
                            </div>
                        <div class="form-group">
                            <label>Hiển thị / Ẩn</label>
                            <select name="trang_thai_danh_muc" class="form-control input-sm m-bot15">
                                <option value="Ẩn">Ẩn</option>
                                <option value="Hiện">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="them_san_pham" class="btn btn-info">Thêm Sản Phẩm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
