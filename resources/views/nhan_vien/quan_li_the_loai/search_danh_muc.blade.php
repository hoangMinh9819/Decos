@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Bộ Sưu Tập
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $tin_nhan = Session::get('tin_nhan');
            if ($tin_nhan) {
                echo '<span class="text-thanh-cong">' . $tin_nhan . '</span>';
                Session::put('tin_nhan', null);
            }
            ?>
            <div class="row w3-res-tb">
                <div class="col-sm-3 m-b-xs">
                    <!-- <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button> -->
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                    <form role="form" action="{{ URL::to('/search_danh_muc') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keyword_submit" placeholder="Tìm kiếm tin tức">
                            <input type="submit" name="search_danh_muc" class="btn btn-success btn-sm" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Tên Bộ Sưu Tập</th>
                            <th>Mô Tả</th>
                            <th>Trạng Thái</th>
                            <th style="width:50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($search_danh_muc as $chia_khoa => $danh_muc)
                            <tr>
                                <td>{{ $danh_muc->TEN_TL }}</td>
                                <td>{{ $danh_muc->MO_TA_TL }}</td>
                                <td>{{ $danh_muc->TRANG_THAI }}</td>
                                <td><a href="{{ URL::to('/sua_danh_muc/' . $danh_muc->ID_THE_LOAI) }}" class="active"
                                        ui-toggle-class="">
                                        Sửa
                                        <!--<i class="fa fa-pencil-square-o text-success text-active"></i>-->
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                        href="{{ URL::to('/xoa_danh_muc/' . $danh_muc->ID_THE_LOAI) }}" class="active"
                                        ui-toggle-class="">
                                        Xóa
                                        <!-- <i class="fa fa-times text-danger text"></i> -->
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <!-- <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
