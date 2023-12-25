@extends('main.app')
@section('content')
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Single </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Single Page</li>
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
                                    <div class="thumb-image"> <img src="{{ asset('public/' . $product->img) }}"
                                            data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <!-- <li data-thumb="{{ asset('public/images/cart2.jpg') }}">
                                            <div class="thumb-image"> <img src="{{ asset('public/images/cart2.jpg') }}" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                        </li>
                                        <li data-thumb="{{ asset('public/images/cart3.jpg') }}">
                                            <div class="thumb-image"> <img src="{{ asset('public/images/cart3.jpg') }}" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                        </li>
                                        <li data-thumb="{{ asset('public/images/cart4.jpg') }}">
                                            <div class="thumb-image"> <img src="{{ asset('public/images/cart4.jpg') }}" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                        </li> -->
                            </ul>
                            <div class="clearfix"></div>
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

                                    <button type="submit"
                                        class="shopv-cart pshopv-cart add-to-cart btn btn-style btn-primary">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                            <div class="buyhny-now"><a href="#buy" class="btn btn-style btn-primary">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col-lg-7 single-right-left ps-lg-5">
                        <h3>{{ $product->name }}
                        </h3>
                        <div class="caption">

                            <ul class="rating-single">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star-half yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>

                            <h6>
                                <span class="item_price">${{ $product->price }}</span>
                                <!-- <del>$1,199</del> Free Delivery -->
                            </h6>
                        </div>
                        <!-- <div class="desc_single my-4">
                                    <ul class="emi-views">
                                        <li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
                                        <li><span>Bank Offer</span> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card</li>
                                        <li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
                                        <li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li>
                                    </ul>
                                </div> -->
                        <div class="desc_single mb-4">
                            <h5>Description:</h5>
                            <p>{{ $product->desc }}</p>
                        </div>
                        <!-- <div class="description-apt d-grid mb-4">
                                    <div class="occasional">
                                        <h5 class="sp_title mb-3">Highlights:</h5>
                                        <ul class="single_specific">
                                            <li>
                                                Neck : Collar Neck</li>
                                            <li>
                                                Fit : Slim</li>

                                            <li> Sleeve : Full Sleeve
                                            </li>
                                            <li> Material : Pure Cutton</li>

                                        </ul>

                                    </div>

                                    <div class="color-quality">
                                        <h5 class="sp_title">Services:</h5>
                                        <ul class="single_serv">
                                            <li>
                                                <a href="#">30 Day Return Policy</a>
                                            </li>
                                            <li class="gap">
                                                <a href="#">Cash on Delivery available</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->

                    </div>
                </div>
            </div>
            <!--//row1-->

        </div>
    </section>
    <section style="background-color: #eee;">
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
                                        <label class="form-label" for="textAreaExample">Comment</label>
                                        <input type="text" hidden placeholder="Enter pincode"
                                            value="{{ $product->id }}" required name="product_id">
                                        <input type="text" hidden placeholder="Enter pincode" required class="hidden"
                                            value="{{ auth()->id() ? auth()->id() : '' }}" name="user_id">
                                    </div>
                                </div>
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <h3 class="title-w3l">New Collections</h3>
            <!--/row-1-->
            <div class="witemshny-grids row mt-lg-3">
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d1.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 40% Off on Formal Wear</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d2.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 60% Off on Active Wear</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d3.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 40% Off on Shoes</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d4.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 50% Off on Shirts</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d5.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 50% Off on Clothing</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.html" class="d-block zoom"><img src="assets/images/d6.jpg" alt=""
                                class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.html">Min. 60% Off on Sandles</a>
                    </h4>
                </div>
            </div>
            <!--//row-1-->

        </div>
    </section>
    <!--/w3l-ecommerce-main-->
    <!-- //products-->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="title-w3l">Featured Products</h3>
                <p class="">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-4 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 shopv">
                            <div class="product-image2">
                                <a href="product-single.html">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-1.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-1.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.html" data-tip="Add to Cart"><span
                                                class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Checkered Casual Shirt">
                                        <input type="hidden" name="amount" value="899.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.html">Checkered Casual Shirt </a></h3>
                                <span class="price"><del>$975.00</del>$899.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.html">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-2.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.html" data-tip="Add to Cart"><span
                                                class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Cotton Flared Kurta">
                                        <input type="hidden" name="amount" value="599.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.html">Cotton Flared Kurta</a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.html">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-3.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-3.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.html" data-tip="Add to Cart"><span
                                                class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Men Casual Shirt">
                                        <input type="hidden" name="amount" value="799.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.html">Men Casual Shirt </a></h3>
                                <span class="price"><del>$875.00</del>$799.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.html">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-4.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-4.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.html" data-tip="Add to Cart"><span
                                                class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Blend Straight Kurta">
                                        <input type="hidden" name="amount" value="399.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.html">Blend Straight Kurta </a></h3>
                                <span class="price"><del>$475.00</del>$399.99</span>
                            </div>
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
        @if (session('success'))
            alert('{{ session('success') }}');
        @endif
    });
</script>
