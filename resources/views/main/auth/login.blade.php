@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                    Đăng nhập </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{url('/')}}">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Đăng nhập </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<div style="margin: 8px auto; display: block; text-align:center;">
</div>
<section class="w3l-forml-main py-5">
    <div class="form-hnyv-sec py-sm-5 py-3">
        <!--form-stars-here-->
        <div class="form-wrapv">

            <h2>Đăng nhập vào tài khoản của bạn</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-sub-w3">
                    <input type="text" name="email" placeholder="Email " required="" id="email" />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="icon-w3">
                        <span class="fas fa-user" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="password" placeholder="Mật khẩu" required="" id="password" />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="icon-w3">
                        <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- <p class="forgot-w3ls">Forgot Password?<a class href="{{route('password.request')}}"> Click here</a></p> -->
                    <p class="forgot-w3ls1 text-start">Người dùng mới? 
                        <a class href="{{url('register')}}">Đăng ký tại đây</a>
                    </p>
                </div>
                <div class="submit-button text-center">
                    <button type="submit" class="btn btn-style btn-primary">Đăng nhập ngay</button>

                </div>
            </form>

        </div>
        <!--//form-ends-here-->
    </div>
    <!-- //coming -->
</section>
@endsection