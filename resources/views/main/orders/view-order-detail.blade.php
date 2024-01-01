@extends('main.app')

@section('content')
<div class="">

    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Thông tin đơn hàng </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Thông tin đơn hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="w3l-ecommerce-main">
        <div class="ecom-contenthny py-5">
            <form>
                <div class="row justify-content-between align-items-start container py-4" style="box-shadow: -6px 6px 20px 0px rgba(91, 111, 163, 0.15); border-radius: 10px">
                    <div class="col-lg-12 ecom-contenthny-w3lcheckout">
                        <div class="checkout-right mt-2 mb-0">
                            <table class="timetable_sub">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Người mua</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Phương thức thanh toán</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                @php
                                $counter = 1;
                                @endphp
                                <tbody>
                                    @foreach ($orderItem as $item)
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        <td class="invert"> {{ $user->name }}</td>
                                        <td class="invert">{{ $user->email  }}</td>
                                        <td class="invert">{{ $item->shipping_address }}</td>
                                        <td class="invert">{{ $item->product_name }}</td>
                                        <td class="invert">{{ $item->payment_method }}</td>
                                        <td class="invert">{{ $item->quantity }}</td>
                                        <td class="invert">@switch($item->status)
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
                                        </td>
                                        <td class="invert">{{ $item->price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex flex-column align-items-start justify-content-center mt-4" style="gap: 5px;">
                                <div class="d-flex align-items-center" style="gap: 10px">
                                    <h3 class="h5 text-uppercase">Tổng thanh toán:</h3>
                                    <h5 class="h5" style="color: #ef233c ">
                                        {{ $orderItem[0]->total_price }} VNĐ
                                        <input type="hidden" value="{{ $orderItem[0]->total_price }}" name="total_price">
                                    </h5>
                                </div>
                                <h3 class="h6">Phí: 0 VNĐ</h3>
                                <h3 class="h6">Phí vận chuyển: 0 VNĐ</h3>
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