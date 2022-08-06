@extends('quan_tri_vien.bo_cuc_quan_tri_vien')
@section('quan_tri_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách các đơn ứng tuyển
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
                <div class="col-sm-5 m-b-xs">
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
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Ngày tháng sinh</th>
                            <th>Trình độ học vấn</th>
                            <th>Địa chỉ cụ thể</th>
                            <th>Số chứng minh/Căn cước</th>
                            <th>Kinh nghiệm </th>
                            <th>Khu Vực làm việc mong muốn </th>
                            <th>CV</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tat_ca_don_ung_tuyen as $chia_khoa => $talent)
                            <tr>
                                <td>{{ $talent->Name }}</td>
                                <td>{{ $talent->Email }}</td>
                                <td>{{ $talent->PhoneNumber }}</td>
                                <td>{{ $talent->dob }}</td>
                                <td>{{ $talent->hocvan }}</td>
                                <td>{{ $talent->diachi }}</td>
                                <td>{{ $talent->cccd }}</td>
                                <td>{{ $talent->kinhnghiem }}</td>
                                <td>{{ $talent->KhuVuc }}</td>
                                <td><img src="{{URL::to('uploads/nguoi_dung/'.$talent->CV)}}" height="100"></td>

                                <td>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                        href="{{ URL::to('/xoa_ung_tuyen/' . $talent->id) }}" class="active"
                                        ui-toggle-class="">
                                        Xóa
                                        <!--<i class="fa fa-pencil-square-o text-success text-active"></i>-->
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
