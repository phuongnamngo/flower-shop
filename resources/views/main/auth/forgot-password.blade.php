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

            <h2>Login to your account</h2>
            <form method="POST" action="{{ route('password.email') }}">
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
                <div class="form-sub-content">
                    <p class="forgot-w3ls1">Bạn đã có tài khoản? <a class href="{{route('login')}}">Signin</a></p>
                </div>
                <div class="submit-button text-center">
                    <button type="submit" class="btn btn-style btn-primary">Login Now</button>

                </div>
            </form>

        </div>
        <!--//form-ends-here-->
    </div>
    <!-- //coming -->
</section>
@endsection