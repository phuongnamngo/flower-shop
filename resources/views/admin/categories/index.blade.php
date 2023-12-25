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
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary m-0">Thêm</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 data-table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{ ++$i }}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{ $category->name }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="form-check form-switch justify-content-center">
                                                @if($category->status == 1)
                                                <input class="form-check-input category_status" type="checkbox" id="{{ $category->id }}" value="0" checked>
                                                @else
                                                <input class="form-check-input category_status" type="checkbox" id="{{ $category->id }}" value="1">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
                                                <a class="btn btn-success mb-0" href="{{ route('admin.category.edit',$category->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-secondary mb-0">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $categories->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection