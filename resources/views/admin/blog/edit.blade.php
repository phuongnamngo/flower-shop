@extends('admin.dashboard')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Blog</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Blog</h6>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="d-flex align-items-center justify-content-between px-4 pt-4 pb-2">
                        <div class="card-header p-0">
                            <h6>Blog</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0 pb-4">
                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tiêu đề</label>
                                        <input class="form-control" type="text" value="{{$blog->title}}" placeholder="Nhập tiêu đề" name="title">
                                        @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nội dung</label>
                                        <textarea class="form-control" type="text" placeholder="Nhập tiêu đề" name="content">{{$blog->content}}</textarea>
                                        @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hình ảnh</label>
                                        <input class="form-control" type="file" value="{{$blog->img}}" name="img">
                                        <img height="100px" width="110px" src="{{asset('public/'.$blog->img)}}">
                                        @if ($errors->has('img'))
                                        <span class="text-danger">{{ $errors->first('img') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-lg btn-primary btn-lg mt-4 mb-0">Sửa</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection