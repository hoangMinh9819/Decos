@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Slide
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/luu_slide') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="ten">Tên Hình Ảnh</label>
                                <input type="text" name="ten" class="form-control" id="ten"
                                    placeholder="Tên hình ảnh">
                            </div>
                            <div class="form-group">
                                <label for="hinhanh">Hình Ảnh</label>
                                <input type="file" name="hinh_anh" class="form-control" id="hinhanh"
                                    placeholder="Hình Ảnh">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ngày hết hạn slide</label>
                                <input type="date" name="ngayhethan" class="form-control" id="exampleInputEmail1">
                            </div>
                            <button type="submit" name="them_danh_muc" class="btn btn-info">Thêm Danh Mục</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
