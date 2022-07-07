@extends('nhan_vien.bo_cuc_nhan_vien')
@section('nhan_vien_noi_dung')
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