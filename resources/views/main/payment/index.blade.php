@extends('main.app')
@section('content')
<section class="h-100 gradient-custom">
    <div class="container py-3 h-100 ">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-uppercase fw-normal mb-3" style="color: #ef233c;">Biên lai</h3>
                    <div class="checkout-left-basket mt-2">
                        <a href="{{ route('order.history') }}">
                            <h4>Xem lịch sử đơn hàng</h4>
                        </a>
                    </div>
                </div>
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-4">
                        <h5 class="text-muted mb-0">Cảm ơn vì đã đặt hàng - <span style="color: #ef233c;">{{ $user->name }}</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="small text-muted mb-0">Mã đơn hàng: {{ $orderItem->idOrder }} </p>
                            <div class="text-center d-flex justify-content-center align-items-center gap-2">
                                Trạng thái đơn hàng:
                                @switch($orderItem->status)
                                @case(0)
                                <div class="btn btn-light">Đã đặt hàng</div>
                                @break
                                @case(1)
                                <div class="btn btn-warning">Đã xác nhận</div>
                                @break
                                @case(2)
                                <div class="btn btn-success">Đang vận chuyển</div>
                                @break
                                @case(3)
                                <div class="btn btn-info">Hoàn thành</div>
                                @break
                                @case(4)
                                <div class="btn btn-danger">Đơn hàng hủy</div>
                                @break
                                @default
                                @endswitch
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                    <p class="fw-bold mb-0">No.</p>
                                </div>
                                <div class="col text-center d-flex justify-content-center align-items-center">
                                    <p class="fw-bold mb-0">Số lượng</p>
                                </div>
                                <div class="col text-center d-flex justify-content-center align-items-center">
                                    <p class="fw-bold mb-0">Tên sản phẩm</p>
                                </div>
                                <div class="col text-center d-flex justify-content-center align-items-center">
                                    <p class="fw-bold mb-0 ">Giá</p>
                                </div>

                            </div>
                        </div>

                        @php
                        $count = 1;
                        @endphp
                        <div class="card shadow-0 border mb-4">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0">{{ $count++ }}</p>
                                    </div>
                                    <div class="col text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0">{{ $orderItem->quantity }}</p>
                                    </div>
                                    <div class="col text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0">{{ $orderItem->product_name }}</p>
                                    </div>
                                    <div class="col text-center d-flex justify-content-center align-items-center">
                                        <p class="text-muted mb-0 ">{{ number_format($orderItem->price) }} VNĐ</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-4 m-0" style="background-color: #ef233c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <div class="pt-2">
                            <p class="text-white fw-bold mb-0">Chi tiết đặt hàng</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center " >
                            <div class="col-lg-6">

                                <div class="card-body ">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-white fw-bold mb-0">No.</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="text-white fw-bold mb-0">Số lượng</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="text-white fw-bold mb-0">Tên sản phẩm</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="text-white fw-bold mb-0 ">Giá</p>
                                        </div>

                                    </div>
                                </div>

                                @php
                                $count = 0;
                                @endphp
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $count++ }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $orderItem->quantity }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $orderItem->product_name }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 ">{{ number_format($orderItem->price) }} VNĐ</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 align-items-center card-footer border-0 px-4 py-4 m-0" style="background-color: #ef233c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                <div class="d-flex justify-content-between">
                                    <p class="text-white small mb-0 "><span>Ngày tạo: {{ $orderItem->created_at->format('d/m/Y H:i') }} </span></p>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <p class="text-white small mb-0"><span class=" me-2">Phí vận chuyển:</span>Miễn phí</p>
                                </div>
                                <h5 class="text-white text-uppercase mb-0">Tổng chi phí trả: <span class="h2 mb-0 ms-2">{{$orderItem->total_price }} VNĐ</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection