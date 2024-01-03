@extends('main.app')
@section('content')
<section class="w3l-ecommerce-main">
    <div class="ecom-contenthny py-2">
        <div class="container py-lg-2">
            <div class="ecom-contenthny-w3lcheckout privacy">
                <h4 class="text-uppercase fw-normal mb-3" style="color: #ef233c;">Lịch sử đơn hàng</h4>
                <div class="checkout-right mt-2">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        @php
                        $counter = 1;
                        @endphp
                        <tbody>

                            @foreach ($orderHistory as $item)
                            @if($item->errorCode != 42)
                            <tr class="rem1">
                                <td class="invert">{{ $counter++ }}</td>
                                <td class="invert">
                                    {{ $item->id }}
                                </td>
                                <td class="invert">
                                    {{ $item->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="invert">
                                    {{ $item->shipping_address }}
                                </td>
                                <td class="invert">
                                    {{ $item->payment_method }}
                                </td>
                                <td class="invert">

                                    {{ number_format($item->total_price) }} VNĐ

                                </td>
                                <td class="invert">
                                    @switch($item->status)
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
                                <td class="invert">
                                    @if ($item->status == 0)
                                    <input type="hidden" name="">
                                    @if($item->payment_method != 'Momo')
                                    <form method="POST" action="{{ route('orders.edit', $item->id) }}">
                                        @csrf
                                        <button>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>

                                        </button>
                                    </form>
                                    @endif
                                    <button>
                                        <a href="{{route('orders.detail.view', $item->id)}}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </button>
                                    @else
                                    <button>
                                        <a href="{{route('orders.detail.view', $item->id)}}">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

<style>
    .invert {
        font-weight: 400 !important;
    }
</style>