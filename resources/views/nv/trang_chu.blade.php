@extends('qtv_bo_cuc')
@section('qtv_noi_dung')
<h1>Xin chào
    <?php

    use Illuminate\Support\Facades\Session;

    $ten = Session::get('qtv_ten');
    if ($ten) {
        echo $ten;
    }
    ?>
</h1>
@endsection