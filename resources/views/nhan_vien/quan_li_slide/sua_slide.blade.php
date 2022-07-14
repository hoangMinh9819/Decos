@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Slide
                </header>
                <div class="panel-body">
                    @foreach ($sua_slide as $key => $gia_tri)
                        <div class="position-center">

                            <form role="form" action="{{ URL::to('/cap_nhat_slide/' . $gia_tri->ID_SLIDE) }}"
                                method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="hinhanh">Hình Ảnh</label>
                                    <input type="file" value="{{ $gia_tri->HINH_ANH }}" name="hinh_anh"
                                        class="form-control" id="hinhanh" placeholder="Hình Ảnh">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ngày hết hạn slide</label>
                                    <input type="date" value="{{ $gia_tri->NGAY_HET_HAN }}" name="ngayhethan"
                                        class="form-control" id="exampleInputEmail1">
                                </div>


                                <button type="submit" name="them_slide" class="btn btn-info">Cập Nhật Slide</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection
