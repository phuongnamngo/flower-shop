@extends('main.app')
@section('content')
    <section class="w3l-ecommerce-main">
        <div class="ecom-contenthny py-2">
            <div class="container py-lg-2">
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <h4 class="text-uppercase fw-normal mb-3" style="color: #ef233c;">Order History</h4>
                    <div class="checkout-right mt-2">
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Shipping address</th>
                                    <th>Payment Method</th>
                                    <th>Total amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp
                            <tbody>

                                @foreach ($orderHistory as $item)
                                    <tr class="rem1">
                                        <td class="invert">{{ $counter++ }}</td>
                                        <td class="invert">
                                            {{ $item->id }}
                                        </td>
                                        <td class="invert">
                                            {{ $item->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="invert">
                                            {{ $item->shipping_address }}
                                        </td>
                                        <td class="invert">
                                            {{ $item->payment_method }}
                                        </td>
                                        <td class="invert">

                                            ${{ $item->total_price }}

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
                                                    <div class="btn btn-danger">Hoàn thành</div>
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
                                                <form method="POST" action="{{ route('orders.edit', $item->id) }}">
                                                    @csrf
                                                    <button>
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>

                                                    </button>
                                                </form>
                                                <button>
                                                    <i class="fa fa-eye" aria-hidden="true"></i>

                                                </button>
                                            @else
                                                <button>
                                                    <i class="fa fa-eye" aria-hidden="true"></i>

                                                </button>
                                            @endif
                                        </td>
                                    </tr>
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
