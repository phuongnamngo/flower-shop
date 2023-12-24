@extends('main.app')
@section('content')
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Cart</h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> View Cart </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div style="margin: 8px auto; display: block; text-align:center;">
    </div>

    <section class="w3l-ecommerce-main">
        <div class="ecom-contenthny py-2">
            <div class="container py-lg-5">
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <div class="checkout-right mt-4">
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>
                                    <th>Total Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        <td class="invert-image">
                                            <a href="product-single.html">
                                                <img src="assets/images/shop-1.jpg" class="img-fluid radius-image"
                                                    alt="">
                                            </a>
                                        </td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    {{-- <button class="entry value-minus">&nbsp;</button>
                                                    <div class="entry value " style="color: black">
                                                        <span>{{ $item['quantity'] }}</span>
                                                    </div>
                                                    <button class="entry value-plus active">&nbsp;</button> --}}

                                                    <div>
                                                        <button class="entry value-minus"
                                                            onclick="updateQuantity(-1, {{ $item['id'] }})">&nbsp;</button>
                                                        <div class="entry value" style="color: black">
                                                            <span
                                                                id="quantity_{{ $item['id'] }}">{{ $item['quantity'] }}</span>
                                                        </div>
                                                        <button class="entry value-plus"
                                                            onclick="updateQuantity(1, {{ $item['id'] }})">&nbsp;</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">{{ $item['name'] }}</td>
                                        <td class="invert">${{ number_format($item['price'], 2) }}</td>
                                        <td class="invert">
                                            <div class="rem">
                                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button style="color: #ef233c; font-size: 24px; display: unset"><i
                                                            class="fa fa-window-close"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <div class="d-flex align-items-center justify-content-between">

                            <h3 class="h4">Total Payment:</h3>
                            <h3 class="h4 text-black">${{ number_format(array_sum(array_column($cart, 'price')), 2) }}</h3>
                        </div>
                        <h4>Continue to Checkout</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function updateQuantity(change, productId) {
        let quantityElement = document.getElementById('quantity_' + productId);
        let currentQuantity = parseInt(quantityElement.innerText);
        let newQuantity = currentQuantity + change;

        axios.post('./update-cart', {
                productId: productId,
                quantity: newQuantity
            })
            .then(response => {
                if (response.data.success) {
                    quantityElement.innerText = newQuantity;
                } else {
                    console.error('Failed to update cart.');
                }
            })
            .catch(error => {
                console.error(error);
            });
    }
</script>
