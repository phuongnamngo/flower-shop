@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Chi tiết sản phẩm </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{url('/')}}">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Chi tiết</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!--/w3l-ecommerce-main-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
        <div class="container py-lg-5">
            <!--/row1-->
            <div class="sp-store-single-page row">
                <div class="col-lg-5 single-right-left">
                    <div class="flexslider1">

                        <ul class="slides">
                            <li data-thumb="{{ asset('public/' . $product->img) }}">
                                <div class="thumb-image"> <img src="{{ asset('public/' . $product->img) }}" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-7 single-right-left ps-lg-5">
                    <h3>{{ $product->name }}
                    </h3>
                    <div class="col-lg-12 mb-3">
                        <h5>Đánh giá sản phẩm:</h5>
                        <div class="d-flex">
                            @for($count = 1; $count <= 5; $count ++) @php if($count <=$rating) { $color='color:#ef233c;' ; } else { $color='color:#ccc;' ; } @endphp <li title="Rating" id="{{$product->id}}-{{$count}}" data-index="{{$count}}" data-product-id="{{$product->id}}" data-rating="{{$rating}}" class="rating" style="cursor:pointer;{{$color}} font-size:30px">
                                &#9733;
                                </li>
                                @endfor
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2">Giá:</h5>
                        <h6>
                            <span class="item_price">{{ number_format($product->price) }} VNĐ</span>
                        </h6>
                    </div>
                    <div class="desc_single mb-4">
                        <h5>Mô tả:</h5>
                        <p>{{ $product->desc }}</p>
                    </div>
                    <div class="eco-buttons mt-5 d-flex">

                        <div class="shopv single-item">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->name }}">
                                <input type="hidden" name="product_img" value="{{ $product->img }}">
                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                <input type="hidden" name="product_quantity" value="1">

                                <button type="submit" class="shopv-cart pshopv-cart add-to-cart btn btn-style btn-primary">
                                    Thêm vào giỏ hàng
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--//row1-->

    </div>
</section>
<section style="background-color: #FFF;">

    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    @foreach ($comment as $item)
                    <div class="card-body">
                        <div class="d-flex flex-start align-items-center">
                            <div>

                                <h6 class="fw-bold text-primary mb-1">{{ $item->name }}</h6>
                            </div>
                        </div>
                        <p class="mt-2 pb-2">
                            {{ $item->body }}
                        </p>
                    </div>
                    @endforeach
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <form action="{{ route('comment') }}" method="POST" novalidate>
                            @csrf
                            <div class="d-flex flex-start w-100">
                                <div class="form-outline w-100">
                                    <textarea class="form-control" name="body" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                                    @if ($errors->has('body'))
                                    <span class="text-danger">{{ $errors->first('body') }}</span>
                                    @endif
                                    <label class="form-label" for="textAreaExample">Bình luận</label>
                                    <input type="text" hidden placeholder="Enter pincode" value="{{ $product->id }}" required name="product_id">
                                    <input type="text" hidden placeholder="Enter pincode" required class="hidden" value="{{ auth()->id() ? auth()->id() : '' }}" name="user_id">
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn btn-primary btn-sm">Gửi bình luận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        @if(session('success'))
        alert("Thêm sản phẩm vào giỏ hàng thành công");
        @endif
    });
</script>