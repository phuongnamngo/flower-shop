@extends('main.app')
@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5">
                            <h5 class="text-muted mb-0">Thanks for your Order, <span
                                    style="color: #ef233c;">{{ $order->user_name }}</span>!</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #ef233c;">Receipt</p>
                                <p class="small text-muted mb-0">Order ID: {{ $order->id }}</p>
                            </div>
                            <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-1 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0">{{ $order->quantity }}</p>
                                        </div>
                                        <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0">{{ $order->product_id }}</p>
                                        </div>
                                        <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 ">${{ number_format($order->price, 2) }}</p>
                                        </div>
                                        <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                            @switch($order->status)
                                                @case(0)
                                                    <div class="btn btn-light">Wait for confirmation</div>
                                                @break

                                                @case(1)
                                                    <div class="btn btn-warning">Shipping</div>
                                                @break

                                                @case(2)
                                                    <div class="btn btn-success">Completed</div>
                                                @break

                                                @case(3)
                                                    <div class="btn btn-danger">Cancelled</div>
                                                @break

                                                @default
                                            @endswitch

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Order Details</p>
                                {{-- <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span> ${{ number_format($order->total_price, 2) }}</p> --}}
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0 "><span>Create date: {{ $order->created_at }}</span></p>
                                {{-- <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p> --}}
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                {{-- <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p> --}}
                                <p class="text-muted mb-0"><span class=" me-2">Delivery Charges:</span>Free</p>
                            </div>
                        </div>
                        <div class="card-footer border-0 px-4 py-5"
                            style="background-color: #ef233c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                paid: <span class="h2 mb-0 ms-2">${{ number_format($order->total_price, 2) }}</span></h5>
                        </div>
                    </div>
                    <div class="checkout-left-basket mt-2" style="float: right">
                        <a href="{{ route('product.index') }}">
                            <h4>Order history</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
