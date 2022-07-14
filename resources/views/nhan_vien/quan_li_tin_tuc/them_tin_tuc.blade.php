@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Tin Tức
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/luu_tin_tuc') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="chude">Chủ đề</label>
                                <input type="number" name="ID_THE_LOAI" class="form-control" id="chude"
                                    placeholder="Địa chỉ" min="1" max="3">
                            </div>
                            <div class="form-group">
                                <label for="tieude">Tiêu đề</label>
                                <input type="text" name="TIEU_DE" class="form-control" id="tieude"
                                    placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <label for="noidung">Nội dung</label>
                                <input type="text" name="NOI_DUNG" class="form-control" id="tieude"
                                    placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <label for="hinhanh">Hình Ảnh</label>
                                <input type="file" name="HINH_ANH" class="form-control" id="hinhanh"
                                    placeholder="Hình Ảnh">
                            </div>
                            <button type="submit" name="them_tin_tuc" class="btn btn-info">Thêm Tin Tức</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
