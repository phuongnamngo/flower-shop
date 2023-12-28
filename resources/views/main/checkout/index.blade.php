@extends('main.app')
@section('content')
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            New order </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>checkout </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="w3l-ecommerce-main">
        <div class="ecom-contenthny py-5">

            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row justify-content-between align-items-start container py-4"
                    style="box-shadow: -6px 6px 20px 0px rgba(91, 111, 163, 0.15); border-radius: 10px">
                    <div class="col-md-6 col-12 ecom-contenthny-w3lcheckout">

                        <div class="checkout-right mt-2 mb-0">
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
                                            <td class="invert">${{ number_format($item['price']) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex flex-column align-items-start justify-content-center mt-4" style="gap: 5px;">
                                <div class="d-flex align-items-center" style="gap: 10px">
                                    <h3 class="h5 text-uppercase">Total Payment:</h3>
                                    <h5 class="h5" style="color: #ef233c ">
                                        ${{ number_format(array_sum(array_column($cart, 'price'))) }}
                                        <input type="hidden" value="{{ array_sum(array_column($cart, 'price')) }}"
                                            name="total_price">
                                    </h5>
                                </div>
                                <h3 class="h6">Charge Fee: $0</h3>
                                <h3 class="h6">Transport fee: $0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="row flex-column">
                            <div class="col-auto ">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5">Payment Methods:</h3>
                                </div>
                                {{-- <section class="creditly-wrapper wthree w3_agileits_wrapper mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cash on Delivery
                                        </label>
                                    </div>
                          
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Bank Transfer
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input " type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Momo
                                        </label>
                                        <div class="bg-dark">
                                            Number: +84 37 887 8087
                                        </div>
                                    </div>
                                </section> --}}
                                <div class="d-flex justify-content-start align-items-center cursor-pointer" style="gap: 10px">
                                    <div class="p-2" style="border: 1px solid #f7f6f6; color: black">
                                        <div class="top_shopv_cart">Cash on Delivery</div>
                                    </div>
                                    <div class="p-2" style="border: 1px solid #f7f6f6; color: black">
                                        <span class="top_shopv_cart">Bank Transfer</span>
                                    </div>
                                    <div class="p-2" style="border: 1px solid #f7f6f6; color: black">
                                        <span class="top_shopv_cart">Momo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto m-0 mt-4">
                                <h3 class="h5">Shipping Infomation:</h3>
                                <section class="creditly-wrapper wthree w3_agileits_wrapper mt-2">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <input class="form-control" type="text" name=""
                                                            placeholder="Phone Number" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <input class="form-control" type="text" name="billing_address"
                                                            placeholder="Billing address" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <input class="form-control" name="shipping_address" type="text"
                                                            placeholder="Shipping Address" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="checkout-right-basketm-0">
                                    <button class="btn btn-style btn-primary w-100"
                                        href="{{ route('checkout.store') }}">Payment<i
                                            class="fas fa-arrow-right ms-lg-3 ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

<style>
</style>
