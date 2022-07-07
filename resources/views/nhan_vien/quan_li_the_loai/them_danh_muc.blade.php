@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Bộ Sưu Tập
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/luu_danh_muc')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Bộ Sưu Tập</label>
                            <input type="text" name="ten_danh_muc" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả Bộ Sưu Tập</label>
                            <textarea style="resize: none" rows="8" name="mo_ta_danh_muc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị / Ẩn</label>
                            <select name="trang_thai_danh_muc" class="form-control input-sm m-bot15">
                                <option value="Ẩn">Ẩn</option>
                                <option value="Hiện">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="them_danh_muc" class="btn btn-info">Thêm Danh Mục</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection