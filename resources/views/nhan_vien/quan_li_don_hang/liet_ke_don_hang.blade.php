@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Đơn Hàng
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
                    <button class="btn btn-sm btn-default">Apply</button>-->
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                    <form role="form" action="{{ URL::to('/search_don_hang') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="search_box pull-right">
                            <input type="text" name="keyword_submit" placeholder="Tìm kiếm tin tức">
                            <input type="submit" name="search_don_hang" class="btn btn-success btn-sm" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light" id="myTable">
                    <thead>
                        <tr>
                            <th>Người dùng</th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại người nhận</th>
                            <th>Tổng cộng</th>
                            <th>Trạng Thái</th>

                            <th style="width:50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liet_ke_don_hang as $chia_khoa => $don_hang)
                            <tr>
                                <td>{{ $don_hang->HO_TEN }}</td>
                                <td>{{ $don_hang->TEN_NGUOI_NHAN }}</td>
                                <td>{{ $don_hang->DIA_CHI_GIAO }}</td>
                                <td>{{ $don_hang->DIEN_THOAI_NGUOI_NHAN }}</td>
                                <td>{{ $don_hang->TONG_CONG_CUOI_CUNG }}</td>
                                <td>{{ $don_hang->TRANG_THAI_DH }}</td>
                                <td><a href="{{ URL::to('/sua_don_hang/' . $don_hang->ID_DON_HANG) }}" class="active"
                                        ui-toggle-class="">
                                        Sửa
                                        <!--<i class="fa fa-pencil-square-o text-success text-active"></i>-->
                                    </a>
                                    <!--<a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                        href="{{ URL::to('/xoa_don_hang/' . $don_hang->ID_DON_HANG) }}" class="active"
                                        ui-toggle-class="">
                                        Xóa                                         
                                    </a>-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             {{$liet_ke_don_hang->links("pagination::bootstrap-4")}}
        </div>
    </div>
@endsection
