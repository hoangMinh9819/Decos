@extends('qtv_bo_cuc')
@section('qtv_noi_dung')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
            <div class="panel-body">
                @foreach($sua_danh_muc as $key => $gia_tri)
                <div class="position-center">

                    <form role="form" action="{{URL::to('/cap_nhat_danh_muc/'.$gia_tri->dm_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{$gia_tri->dm_ten}}" name="ten_danh_muc" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" name="mo_ta_danh_muc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$gia_tri->dm_mo_ta}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Hiển thị / Ẩn</label>
                            <select name="trang_thai_danh_muc" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="them_danh_muc" class="btn btn-info">Cập Nhật Danh Mục</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection