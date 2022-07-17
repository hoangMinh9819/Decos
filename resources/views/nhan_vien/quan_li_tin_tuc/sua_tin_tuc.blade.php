@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật Tin tức
                </header>
                <div class="panel-body">
                    @foreach ($sua_tin_tuc as $key => $gia_tri)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/cap_nhat_tin_tuc/' . $gia_tri->ID_TIN_TUC) }}"
                                method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Chủ đề"> Chủ đề</label>
                                    <select name="ID_THE_LOAI" id="ID_THE_LOAI">
                                        <option value="{{$gia_tri ->ID_THE_LOAI}}">Bộ sưu tập mùa xuân</option>
                                        <option value="{{$gia_tri ->ID_THE_LOAI}}">Bộ sưu tập mùa ha</option>
                                        <option value="{{$gia_tri ->ID_THE_LOAI}}">Bộ sưu tập mùa đông</option>
                                    </select>

                                    {{-- <input type="number" value="{{ $gia_tri->ID_THE_LOAI }}" name="ID_THE_LOAI"
                                        class="form-control" id="chude" min="1" max="3"> --}}
                                </div>
                                <div class="form-group">
                                    <label for="tieude">Tiêu đề</label>
                                    <input type="text" value="{{ $gia_tri->TIEU_DE }}" name="TIEU_DE"
                                        class="form-control" id="tieude">
                                </div>
                                <div class="form-group">
                                    <label for="noidung">Nội dung</label>
                                    <input type="text" value="{{ $gia_tri->NOI_DUNG }}" name="NOI_DUNG"
                                        class="form-control" id="tieude" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="hinhanh">Hình Ảnh</label>
                                    <input type="file" value="{{ $gia_tri->HINH_ANH }}" name="HINH_ANH"
                                        class="form-control" id="hinhanh" placeholder="Hình Ảnh">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Tiêu đề</label>
                                    <input type="form-control" value="{{ $gia_tri->TIEU_DE }}" name="tieude"
                                        class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <input type="form-control" value="{{ $gia_tri->NOI_DUNG }}" name="noidung"
                                        class="form-control" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label for="hinhanh">Hình Ảnh</label>
                                    <input type="file" value="{{ $gia_tri->HINH_ANH }}" name="hinh_anh"
                                        class="form-control" id="hinhanh" placeholder="Hình Ảnh">
                                </div> --}}
                                <button type="submit" name="them_tin_tuc" class="btn btn-info">Cập Nhật Tin Tức</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection
