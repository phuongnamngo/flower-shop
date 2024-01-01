@extends('main.app')
@section('content')
<!--//inner-page-->
<div style="margin: 8px auto; display: block; text-align:center;">

</div>
<!--/bottom-3-grids-->
<div class="w3l-3-grids py-5" id="about-1">
    <div class="container py-md-5 py-2 pb-0">
        <!--/row-1-->
        <div class="w3abin-top text-center">
            <div class="title-content">
                @if($returnUrl->errorCode == 0)
                <h3 class="title-w3l">Bạn đã thanh toán Momo thành công</h3>
                @else
                <h3 class="title-w3l">Bạn đã thanh toán Momo thất bại</h3>
                @endif
            </div>
            <a href="{{url('/')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Trang chủ<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
        </div>
        <!--//row-1-->
    </div>
    @endsection