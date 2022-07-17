@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Sản Phẩm
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
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                    <form role="form" action="{{ URL::to('/search_san_pham') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keyword_submit" placeholder="Tìm kiếm tin tức">
                            <input type="submit" name="search_san_pham" class="btn btn-success btn-sm" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light" id="myTable">
                    <thead>
                        <tr>
                            <th>Bộ Sưu Tập</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên</th>
                            <th>Đơn giá</th>
                            <th>Mô tả</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                            <th style="width:50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liet_ke_san_pham as $chia_khoa => $san_pham)
                            <tr>
                                <td>{{ $san_pham->TEN_TL }}</td>
                                <td>{{ $san_pham->MA_SAN_PHAM }}</td>
                                <td>{{ $san_pham->TEN_SP }}</td>
                                <td>{{ $san_pham->GIA }}</td>
                                <td>{{ $san_pham->MO_TA_SP }}</td>
                                <td>{{ $san_pham->NGAY_TAO }}</td>
                                <td>{{ $san_pham->NGAY_CAP_NHAT }}</td>
                                <td><a href="{{ URL::to('/sua_san_pham/' . $san_pham->ID_SAN_PHAM) }}" class="active"
                                        ui-toggle-class="">
                                        Sửa
                                        <!--<i class="fa fa-pencil-square-o text-success text-active"></i>-->
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                        href="{{ URL::to('/xoa_san_pham/' . $san_pham->ID_SAN_PHAM) }}" class="active"
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
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
