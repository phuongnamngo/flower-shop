@extends('admin.dashboard')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Danh mục</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Danh mục</h6>
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
                            <h6>Authors table</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0 pb-4">
                        <form action="{{ route('admin.category.update', $categories->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tên danh mục</label>
                                        <input class="form-control" type="text" value="{{$categories->name}}" placeholder="Nhập danh mục" name="name">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
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