@extends('admin.dashboard')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Đơn hàng</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Đơn hàng</h6>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="d-flex align-items-center justify-content-between px-4 pt-4 pb-2">
                        <div class="card-header p-0">
                            <h6>Đơn hàng</h6>
                        </div>

                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Khách hàng</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Địa chỉ</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nội dung</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Thành tiền</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Phương thức</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Trạng thái</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                    <tr>
                                        <td class="px-4">
                                            <span class="text-secondary text-xs font-weight-bold">{{ ++$i }}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->name }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->email }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->shipping_address }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->message ?? 'Đặt hàng thành công'}}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->total_price }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $item->payment_method }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @switch($item->status)
                                            @case(0)
                                            <span class="text-secondary text-xs font-weight-bold">Đã đặt hàng</span>
                                            @break

                                            @case(1)
                                            <span class="text-secondary text-xs font-weight-bold">Đã xác nhận</span>
                                            @break

                                            @case(2)
                                            <span class="text-secondary text-xs font-weight-bold">Đang vận chuyển</span>
                                            @break

                                            @case(3)
                                            <span class="text-secondary text-xs font-weight-bold">Hoàn thành</span>
                                            @break

                                            @case(4)
                                            <span class="text-secondary text-xs font-weight-bold">Đơn hàng hủy</span>
                                            @break
                                            @default
                                            @endswitch
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="flexcolumn p-0 justify-content-center">
                                                @switch($item->status)
                                                @case(0)
                                                <button class="btn btn-primary order_status" id="{{ $item->id }}" value="1">Xác nhận</button>
                                                @break

                                                @case(1)
                                                <button class="btn btn-info order_status" id="{{ $item->id }}" value="2">vận chuyển</button>
                                                @break

                                                @case(2)
                                                <button class="btn btn-success order_status" id="{{ $item->id }}" value="3">Hoàn thành</button>
                                                @break
                                                @default
                                                @endswitch
                                                @if($item->status != 4)
                                                <button class="btn btn-danger order_status" id="{{ $item->id }}" value="4">Hủy</button>
                                                @endif
                                                <a class="btn btn-secondary order_status" href="{{route('admin.order.detail', $item->id )}}">Chi tiết</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection