@extends('quan_tri_vien.bo_cuc_quan_tri_vien')
@section('quan_tri_vien_noi_dung')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Hồ Sơ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/cap_nhat_danh_muc/')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="1">Chân Dung</label><br>
                            <img src="{{URL::to('/uploads/nguoi_dung/'.$quan_tri_vien->HINH_ANH)}}" width="300">
                        </div>
                        <div class="form-group">
                            <label for="1">Họ Tên</label>
                            <input type="text" value="{{$quan_tri_vien->HO_TEN}}" name="ten_danh_muc" class="form-control" id="1">
                        </div>
                        <div class="form-group">
                            <label for="2">Email</label>
                            <input type="text" value="{{$quan_tri_vien->EMAIL}}" name="ten_danh_muc" class="form-control" id="2">
                        </div>
                        <div class="form-group">
                            <label for="3">Địa Chỉ</label>
                            <input type="text" value="{{$quan_tri_vien->DIA_CHI}}" name="ten_danh_muc" class="form-control" id="3">
                        </div>
                        <div class="form-group">
                            <label for="2">Điện Thoại</label>
                            <input type="text" value="{{$quan_tri_vien->DIEN_THOAI}}" name="ten_danh_muc" class="form-control" id="2">
                        </div>
                        <!-- <button type="submit" name="them_danh_muc" class="btn btn-info">Cập Nhật Danh Mục</button> -->
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection