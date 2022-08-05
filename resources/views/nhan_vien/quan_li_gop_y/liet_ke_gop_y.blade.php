@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh Sách Các Góp Ý
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
                            <th>Email người góp ý</th>
                            <th>Nội dung góp ý</th>
                            <th style="width:150px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liet_ke_gop_y as $chia_khoa => $gop_y)
                            <tr>
                                <td>{{ $gop_y->EMAIL }}</td>
                                <td>{{ $gop_y->NOI_DUNG_GOP_Y }}</td>
                                <td>
                                    <!-- <a href="{{ URL::to('/xoa_gop_y/' . $gop_y->ID_GOP_Y) }}" 
                                    class="active"                                        
                                    ui-toggle-class="">Xem Chi Tiết</a> -->
                                </td>
                            </tr>
                        @endforeach
{{-- hihhihi --}}


                    <tbody id="Content"></tbody>
                    </tbody>
                </table>
            </div>
            {{$liet_ke_gop_y->links("pagination::bootstrap-4")}}
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
