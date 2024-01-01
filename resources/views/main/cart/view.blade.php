@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Giỏ hàng</h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{url('/')}}">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Giỏ hàng </li>
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
        <div class="container py-lg-2">
            <div class="ecom-contenthny-w3lcheckout privacy">
                <div class="checkout-right mt-2">
                    <div class="checkout-left-basket" style="float: right">
                        <a href="{{ route('product.index') }}">
                            <h4>Tiếp tục mua hàng</h4>
                        </a>
                    </div>
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Xóa</th>
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
                                        <img src="{{ asset('public/' . $item['img']) }}" class="img-fluid radius-image" alt="">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select d-flex justify-content-center align-items-center">
                                            <div>
                                                <form method="post" action="{{ route('cart.update', ['productId' => $item['id']]) }}">
                                                    @csrf
                                                    <input type="hidden" name="action" value="decrease">
                                                    <button class="entry value-minus" type="submit"></button>
                                                </form>
                                            </div>
                                            <div class=" value" style="color: black">
                                                <span>{{ $item['quantity'] }}</span>
                                            </div>

                                            <div>
                                                <form method="post" action="{{ route('cart.update', ['productId' => $item['id']]) }}">
                                                    @csrf
                                                    <input type="hidden" name="action" value="increase">
                                                    <button class="entry value-plus" type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{ $item['name'] }}</td>
                                <td class="invert">{{ number_format($item['price']) }} VNĐ
                                </td>
                                <td class="invert">
                                    <div class="rem">
                                        <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button class="border-0 bg-white" style="color: #ef233c; font-size: 24px; display: unset"><i class="fa fa-window-close"></i>
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
                <div class="col-md-5 checkout-left-basket">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="h4">Tổng tiền thanh toán:</h3>
                        <h3 class="h4 text-black">{{ number_format($total) }} VNĐ</h3>
                    </div>
                    @if ($cart)
                    <div class="">
                        <a href="{{ route('checkout.view') }}">
                            <h4>Tiếp tục thanh toán</h4>
                        </a>
                    </div>
                    @else
                    <div>Giỏ hàng trống!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection