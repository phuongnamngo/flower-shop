@extends('admin.dashboard')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Chi tiết đơn hàng</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Chi tiết đơn hàng</h6>
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
                            <h6>Chi tiết đơn hàng</h6>
                        </div>
                    </div>
                    @php
                    $count = 1
                    @endphp
                    @foreach($orderItem as $item)

                    <div class="card-body px-4 pt-0 pb-4">
                        <h6>Đơn số {{$count++}}</h6>
                        <form action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tên khách hàng</label>
                                        <input class="form-control" type="text" value="{{$user->name}}" disabled>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control" type="text" value="{{$user->email}}" disabled>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Đia chỉ</label>
                                        <input class="form-control" type="text" value="{{$item->shipping_address}}" disabled>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tên sản phẩm</label>
                                        <input class="form-control" type="text" value="{{$item->product_name}}" disabled>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Số lượng</label>
                                        <input class="form-control" type="text" value="{{$item->quantity}}" disabled>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Thành tiền</label>
                                        <input class="form-control" type="text" value="{{$item->total_price}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nội dung</label>
                                        <input class="form-control" type="text" value="{{$momoItem->message ?? 'Đặt hàng thành công'}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phương thức</label>
                                        <input class="form-control" type="text" value="{{$item->payment_method}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Trạng thái</label>
                                        @switch($item->status)
                                        @case(0)
                                        <input class="form-control" type="text" value="Đã đặt hàng" disabled>
                                        @break

                                        @case(1)
                                        <input class="form-control" type="text" value="Đã xác nhận" disabled>
                                        @break

                                        @case(2)
                                        <input class="form-control" type="text" value="Đang vận chuyển" disabled>
                                        @break

                                        @case(3)
                                        <input class="form-control" type="text" value="Hoàn thành" disabled>
                                        @break

                                        @case(4)
                                        <input class="form-control" type="text" value="Đơn hàng hủy" disabled>
                                        @break
                                        @default
                                        @endswitch

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection