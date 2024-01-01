@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Thanh toán </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Thanh toán</li>
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
            <div class="row justify-content-between align-items-start container py-4" style="box-shadow: -6px 6px 20px 0px rgba(91, 111, 163, 0.15); border-radius: 10px">
                <div class="col-md-6 col-12 ecom-contenthny-w3lcheckout">
                    <div class="checkout-right mt-2 mb-0">
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
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
                                            <img src="{{ asset('public/' . $item['img']) }}" class="img-fluid radius-image" alt=""></a></td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry "><span>{{ $item['quantity'] }}</span></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">{{ $item['name'] }}</td>
                                    <td class="invert">{{ number_format($item['price'])}} VNĐ</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex flex-column align-items-start justify-content-center mt-4" style="gap: 5px;">
                            <div class="d-flex align-items-center" style="gap: 10px">
                                <h3 class="h5 text-uppercase">Tổng tiền thanh toán:</h3>
                                <h5 class="h5" style="color: #ef233c ">
                                    {{ number_format($total)}} VNĐ
                                    <input type="hidden" value="{{ number_format($total)}}" name="total_price">
                                </h5>
                            </div>
                            <h3 class="h6">Phí: 0 VNĐ</h3>
                            <h3 class="h6">Phí vận chuyển: 0 VNĐ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row flex-column">
                        <div class="col-auto ">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="h5">Phương thức thanh toán:</h3>
                            </div>
                            <div class="d-flex justify-content-start align-items-center" style="gap: 30px">
                                <form>
                                    <div class="d-flex justify-content-center align-items-center" style="gap: 5px">
                                        <input class="form-check-input m-0" type="radio" name="payment_method" value="Thanh toán khi giao hàng" checked>
                                        <label class="form-check-label" style="color: #ef233c; padding: 10px">Thanh toán khi giao hàng</label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="gap: 5px">
                                        <input class="form-check-input m-0" type="radio" name="payment_method" value="Momo">
                                        <label class="form-check-label" style="color: #ef233c; padding: 10px">Momo</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto m-0 mt-4">
                            <h3 class="h5">Thông tin vận chuyển:</h3>
                            <section class="creditly-wrapper wthree w3_agileits_wrapper mt-2">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="w3_agileits_card_number_grids">

                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <input class="form-control" type="text" name="" placeholder="Số điện thoại" required>
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <input class="form-control" type="text" name="billing_address" placeholder="Địa chỉ thanh toán" required>
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <input class="form-control" name="shipping_address" type="text" placeholder="Địa chỉ giao hàng" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="checkout-right-basketm-0">
                                <button class="btn btn-style btn-primary w-100" href="{{ route('checkout.store') }}">Thanh toán<i class="fas fa-arrow-right ms-lg-3 ms-2"></i></button>
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