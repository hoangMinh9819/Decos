@extends('quan_tri_vien.bo_cuc_quan_tri_vien')
@section('qtv_noi_dung')
<h1>Xin chào
    <?php
    use Illuminate\Support\Facades\Session;
    $ten = Session::get('ten');
    if ($ten) {
        echo $ten;
    }
    ?>
</h1>
@endsection