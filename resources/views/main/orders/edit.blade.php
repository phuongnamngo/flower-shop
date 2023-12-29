@extends('main.app')

@section('content')
<div class="">

    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            EDIT order </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Edit </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <section class="w3l-ecommerce-main">
        <div class="ecom-contenthny py-5">
            <form action="{{ route('orders.update', $orderItem->idOrder) }}" method="POST">
                @csrf
                @method('put')
                <div class="row justify-content-between align-items-start container py-4" style="box-shadow: -6px 6px 20px 0px rgba(91, 111, 163, 0.15); border-radius: 10px">
                    <div class="col-md-6 col-12 ecom-contenthny-w3lcheckout">
                        <div class="checkout-right mt-2 mb-0">
                            <table class="timetable_sub">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Quantity</th>
                                        <th>Product Name</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                @php
                                $counter = 1;
                                @endphp
                                <tbody>
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        {{-- <td class="invert-image"><a href="product-single.html">
                                                        <img src="{{ asset('public/' . $orderItem['img']) }}"
                                        class="img-fluid radius-image" alt=""></a></td> --}}
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <div class="entry "><span>{{ $orderItem->quantity }}</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{ $orderItem->product_name }}</td>
                                        <td class="invert">${{ number_format($orderItem->price) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex flex-column align-items-start justify-content-center mt-4" style="gap: 5px;">
                                <div class="d-flex align-items-center" style="gap: 10px">
                                    <h3 class="h5 text-uppercase">Total Payment:</h3>
                                    <h5 class="h5" style="color: #ef233c ">
                                        ${{ $orderItem->total_price }}
                                        <input type="hidden" value="{{ $orderItem->total_price }}" name="total_price">
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
                                <div class="d-flex justify-content-start align-items-center" style="gap: 30px">
                                    <form>
                                        <div class="d-flex justify-content-center align-items-center" style="gap: 5px">
                                            <input class="form-check-input m-0" type="radio" name="payment_method" value="Cash on Delivery" checked>
                                            <label class="form-check-label" style="color: #ef233c; padding: 10px">Cash on
                                                Delivery</label>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center" style="gap: 5px">
                                            <input class="form-check-input m-0" type="radio" name="payment_method" value="Momo">
                                            <label class="form-check-label" style="color: #ef233c; padding: 10px">Momo</label>
                                        </div>
                                    </form>
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
                                                        <input class="form-control" type="text" name="" placeholder="Phone Number" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <input class="form-control" type="text" name="billing_address" value="{{$orderItem->billing_address}}" placeholder="Billing address" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <input class="form-control" name="shipping_address" type="text" value="{{$orderItem->shipping_address}}" placeholder="Shipping address" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="checkout-right-basketm-0">
                                    <button type="submit" class="btn btn-style btn-primary w-100">Update Order<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

<style>
    .hidden {
        display: none;
    }

    .form-check-input:checked {
        background-color: #ef233c !important;
        border-color: #ef233c !important;
    }
</style>
<script>
    function showContent(contentId) {
        var allContents = document.querySelectorAll('.hidden');
        allContents.forEach(function(content) {
            content.style.display = 'none';
        });
        var selectedContent = document.getElementById(contentId);
        selectedContent.style.display = 'block';
    }
</script>