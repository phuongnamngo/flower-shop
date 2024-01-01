@extends('admin.dashboard-login')
@section('content')
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Đăng nhập</h4>
                                <p class="mb-0">Nhập email và mật khẩu của bạn để đăng nhập</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.login')}}" role="form">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" aria-label="Email">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Mật khẩu" aria-label="Password">
                                        @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                            <span class="mask bg-gradient-primary opacity-6"></span>
                            <h4 class="mt-5 text-white font-weight-bolder position-relative">"Quản trị viên"</h4>
                            <p class="text-white position-relative">Hãy đăng nhập và trải nghiệm các tinh năng của một quản trị viên</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection