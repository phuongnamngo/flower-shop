@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Login </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Login </li>
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

            <h2>Đăng ký</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-sub-w3">
                    <input type="text" name="name" placeholder="Name" required="" id="name" />
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="icon-w3">
                        <span class="fas fa-user" aria-hidden="true"></span>
                    </div>
                </div>
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
                    <input type="password" name="password" placeholder="Password" required="" id="password" />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="icon-w3">
                        <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required="" id="password_confirmation" />
                    @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    <div class="icon-w3">
                        <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <p>Bạn đã có tài khoản? <a class href="{{url('login')}}">Đăng nhập</a></p>
                </div>
                <div class="submit-button text-center">
                    <button type="submit" class="btn btn-style btn-primary">Đăng ký</button>
                </div>
            </form>

        </div>
        <!--//form-ends-here-->
    </div>
    <!-- //coming -->
</section>
@endsection