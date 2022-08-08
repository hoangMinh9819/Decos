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
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
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
                                <td><img src="{{URL::to('uploads/talent/'.$talent->CV)}}" height="100"></td>
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

                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
