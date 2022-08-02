@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Các Slide
            </div>
            <?php
            use Illuminate\Support\Facades\Session;
            $tin_nhan = Session::get('tin_nhan');
            if ($tin_nhan) {
                echo '<span class="text-thanh-cong">' . $tin_nhan . '</span>';
                Session::put('tin_nhan', null);
            }
            ?>
            {{-- <div class="row w3-res-tb">
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
                    <div class="search">
                        <form class="navbar-form navbar-left" action="" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên Hình ảnh</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                            <th>Ngày hết hạn</th>
                            <th style="width:50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liet_ke_slide as $chia_khoa => $slide)
                            <tr>
                                <td> <img src="{{ URL::to('public/uploads/slide/' . $slide->HINH_ANH) }}" height="100">
                                </td>
                                <td>{{ $slide->TEN_SLIDE }}</td>
                                <td>{{ $slide->HINH_ANH }}</td>
                                <td>{{ $slide->NGAY_TAO }}</td>
                                <td>{{ $slide->NGAY_CAP_NHAT }}</td>
                                <td>{{ $slide->NGAY_HET_HAN }}</td>
                                <td><a href="{{ URL::to('/sua_slide/' . $slide->ID_SLIDE) }}" class="active"
                                        ui-toggle-class="">
                                        Sửa
                                        <!--<i class="fa fa-pencil-square-o text-success text-active"></i>-->
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')"
                                        href="{{ URL::to('/xoa_slide/' . $slide->ID_SLIDE) }}" class="active"
                                        ui-toggle-class="">
                                        Xóa
                                        <!-- <i class="fa fa-times text-danger text"></i> -->
                                    </a>
                                </td>
                            </tr>
                        @endforeach
{{-- hihhihi --}}


                    <tbody id="Content"></tbody>
                    </tbody>
                </table>
            </div>
            {{$liet_ke_slide->links("pagination::bootstrap-4")}}
        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();

            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);

                }


            });

            alert($value);
        })
    </script>
@endsection
