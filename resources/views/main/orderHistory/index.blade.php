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
                                            {{ $item->created_at->format('d-m-Y H:i') }}
                                        </td>
                                        <td class="invert">
                                            {{ $item->shipping_address }}
                                        </td>
                                        <td class="invert">
                                            ${{ $item->total_price }}
                                        </td>
                                        <td class="invert">
                                            {{ $item->status }}
                                        </td>
                                        <td class="invert">
                                            <i class="fa fa-pen-to-square"></i>
                                            <i class="fa fa-window-close"></i>
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
