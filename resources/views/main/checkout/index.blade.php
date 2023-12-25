@extends('main.app')
@section('content')
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Products </h2>
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
    </div>
    <!--//inner-page-->
    <!--/w3l-ecommerce-main-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>

    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-2">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <h3>Chec<span>kout</span></h3>
                    <div class="checkout-right ">
                        <p class="mb-3"></p>
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        <td class="invert-image"><a href="product-single.html">
                                                <img src="{{ asset('public/' . $item['img']) }}"
                                                    class="img-fluid radius-image" alt=""></a></td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <div class="entry "><span>{{ $item['quantity'] }}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{ $item['name'] }}</td>
                                        <td class="invert">${{ number_format($item['price'], 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row checkout-left mt-5">
                        <div class="col-md-4 checkout-left-basket">
                            {{-- <ul>
                                <li>Product1 <i>-</i> <span>$599.00 </span></li>
                                <li>Product2 <i>-</i> <span>$899.00 </span></li>
                                <li>Product3 <i>-</i> <span>$799.00 </span></li>
                                <li>Total Service Charges <i>-</i> <span>$10.00</span></li>
                                <li>Total <i>-</i> <span>$2297.00</span></li>
                            </ul> --}}
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="h4">Total Payment:</h3>
                                <h3 class="h4 text-black">${{ number_format(array_sum(array_column($cart, 'price')), 2) }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-8 address_form_agile ps-lg-5">
                            @if (empty($cart['name']))
                            <div class="checkout-right-basket m-0">
                                <a class="btn btn-style btn-primary" href="{{ route('order.view') }}">Make a Payment <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                            @else
                            
                            <h4>Add a new Details</h4>
                            <form action="{{ route('checkout.process') }}" method="POST" class="creditly-card-form agileinfo_form mt-4">
                                @csrf
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <input class="billing-address-name form-control" type="text" name="customer_name" placeholder="Full name" required>
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <input class="form-control"  type="email" name="customer_email" required placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <input class="form-control" name="customer_phone" type="text"
                                                            placeholder="Mobile number" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">

                                                <input class="form-control" type="text" name="customer_address" placeholder="Address" required>
                                            </div>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="order_details" placeholder="Order notes (optional)">

                                            </div>
                                        </div>
                                    </div>
                                    {{-- <input type="hidden" name="product_id"  value="{{$cart['id']}}"> --}}
                                    {{-- <input type="hidden" name="product_name"  value="}}">
                                    <input type="hidden" name="product_img" value="{{$cart['img']}}">
                                    <input type="hidden" name="product_quantity" value="{{$cart['quantity']}}">
                                    <input type="hidden" name="total_price" value="{{$cart['price']}}"> --}}

                                </section>
                                <div class="checkout-right-basket m-0">
                                    <button class="btn btn-style btn-primary">Make a Payment <i
                                            class="fas fa-arrow-right ms-lg-3 ms-2"></i></button>
                                </div>
                            </form>
                        @endif
                        </div>
                        {{-- @if (!empty($cart))
                            <ul>
                                @foreach ($cart as $item)
                                    <li>
                                        {{ $item['name'] }} - ${{ $item['price'] }}
                                    </li>
                                @endforeach
                            </ul>

                            <form action="{{ route('checkout.process') }}" method="post">
                                @csrf
                                <label for="customer_name">Name:</label>
                                <input type="text" name="customer_name" required>

                                <label for="customer_email">Email:</label>
                                <input type="email" name="customer_email" required>

                                <button type="submit">Complete Order</button>
                            </form>
                        @else
                            <p>Your cart is empty.</p>
                        @endif --}}
                    </div>
                </div>
                <!-- //about -->
            </div>
        </div>
    </section>
@endsection
