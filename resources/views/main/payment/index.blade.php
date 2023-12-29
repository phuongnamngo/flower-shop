@extends('main.app')
@section('content')
    <section class="h-100 gradient-custom">
        <div class="container py-3 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-uppercase fw-normal mb-3" style="color: #ef233c;">Receipt</h3>
                        <div class="checkout-left-basket mt-2">
                            <a href="{{ route('order.history') }}">
                                <h4>View Order history</h4>
                            </a>
                        </div>
                    </div>
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-4">
                            <h5 class="text-muted mb-0">Thanks for your Order - <span
                                    style="color: #ef233c;">{{ $order[0]->user_name }}</span>!</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="small text-muted mb-0">Order ID: {{ $order[0]->id }} </p>
                                <div class="text-center d-flex justify-content-center align-items-center gap-2">
                                    Order status:
                                    @switch($order[0]->status)
                                        @case(0)
                                            <div class="btn btn-light">Order placed</div>
                                        @break

                                        @case(1)
                                            <div class="btn btn-warning">Shipped Out</div>
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
                                <div class="card-body ">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="fw-bold mb-0">No.</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="fw-bold mb-0">Qty</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="fw-bold mb-0">Product Name</p>
                                        </div>
                                        <div class="col text-center d-flex justify-content-center align-items-center">
                                            <p class="fw-bold mb-0 ">Price</p>
                                        </div>

                                    </div>
                                </div>
                            
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($order as $item)
                                <div class="card shadow-0 border mb-4">
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $count++ }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $item->quantity }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">{{ $item->product_id }}</p>
                                            </div>
                                            <div class="col text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 ">${{ number_format($item->price) }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-between align-items-center card-footer border-0 px-4 py-4 m-0"
                            style="background-color: #ef233c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <div class="">
                                <div class="d-flex justify-content-between pt-2">
                                    <p class="text-white fw-bold mb-0">Order Details</p>
                                    {{-- <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span> ${{ number_format($order->total_price, 2) }}</p> --}}
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-white small mb-0 "><span>Create date: {{ $order[0]->created_at }} </span></p>
                                    {{-- <p class= mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p> --}}
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    {{-- <p class= mb-0">Recepits Voucher : 18KU-62IIK</p> --}}
                                    <p class="text-white small mb-0"><span class=" me-2">Delivery Charges:</span>Free</p>
                                </div>
                            </div>
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                paid: <span class="h2 mb-0 ms-2">${{ number_format($order[0]->total_price) }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
