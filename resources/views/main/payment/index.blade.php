@extends('main.app')
@section('content')
    {{-- <div class=" py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Details </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div> --}}
    <section class="h-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
              <div class="card" style="border-radius: 10px;">
                <div class="card-header px-4 py-5">
                  <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #ef233c;">{{$order->user_name}}</span>!</h5>
                </div>
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0" style="color: #ef233c;">Receipt</p>
                    <p class="small text-muted mb-0">Order ID: {{$order->id}}</p>
                  </div>
                  <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                      <div class="row">
                        {{-- <div class="col-md-2">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                            class="img-fluid" alt="Phone">
                        </div> --}}
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                            <p class="text-muted mb-0">{{$order->quantity}}</p>
                          </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                            <p class="text-muted mb-0">{{$order->product_id}}</p>
                          </div>
                        
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">White</p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Capacity: 64GB</p>
                        </div>
                        {{-- <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Qty: 1</p>
                        </div> --}}
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">${{ number_format($order->price, 2) }}</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-2">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                            class="img-fluid" alt="Phone">
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0">iPad</p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Pink rose</p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Capacity: 32GB</p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Qty: 1</p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">$399</p>
                        </div>
                      </div>
                     
                      
                    </div>
                  </div> --}}
      
                  <div class="d-flex justify-content-between pt-2">
                    <p class="fw-bold mb-0">Order Details</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Total:</span> ${{ number_format($order->total_price, 2) }}</p>
                  </div>
      
      
                  <div class="d-flex justify-content-between">
                    <p class="text-muted mb-0 "><span>Create date: {{ $order->created_at }}</span></p>
                    {{-- <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p> --}}
                  </div>
      
                  <div class="d-flex justify-content-between mb-5">
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
            </div>
          </div>
        </div>
      </section>
@endsection
