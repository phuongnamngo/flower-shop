@extends('main.app')
@section('content')
<!--/Banner-Start-->
<!--/main-slider -->
<section class="w3l-main-slider banner-slider position-relative" id="home">
    <div class="owl-one owl-carousel owl-theme">
        <div class="item">
            <div class="slider-info banner-view banner-top1">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Up To 60% Off Now</h5>
                        <h3 class="title-hero-19">Mid Season Sale 40%</h3>
                        <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top2">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Fall Summer Clearance</h5>
                        <h3 class="title-hero-19">Enjoy The Season Sale</h3>
                        <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top3">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Up To 60% Off Now</h5>
                        <h3 class="title-hero-19">Mid Season Sale 40%</h3>
                        <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top4">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Fall Summer Clearance</h5>
                        <h3 class="title-hero-19">Enjoy The Season Sale</h3>
                        <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //main-slider -->
<!-- /Free-Ship-->
<section class="w3free-ship text-center py-md-5 py-4">
    <h2>Free Shipping For You Till Midnight <i class="fas fa-shipping-fast ms-lg-3"></i></h2>
</section>
<!--//Free-Ship-->
<!--/bottom-3-grids-->
<div class=" w3l-3-grids py-5" id="grids-3">
    <div class="container py-md-4">
        <div class="row">
            <div class="col-md-6 mt-md-0">
                <div class="grids3-info position-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/banner5.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h4 class="gdnhy-1"><a href="#">Platform Velvet <br>Sandals</a>
                            <a class="w3item-link btn btn-style mt-4" href="{{url('/products')}}">
                                Shop Now <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                <div class="grids3-info second position-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/banner4.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info second">
                        <h4 class="gdnhy-1"><a href="#">Pebbled Weekend <br>Bag</a>
                            <a class="w3item-link btn btn-style mt-4" href="{{url('/products')}}">
                                Shop Now <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </h4>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//bottom-3-grids-->
<section class="w3l-witemshny-main py-5">
    <div class="container py-md-4">
        <h3 class="title-w3l">Deals Of The Day</h3>
        <!--/row-1-->
        <div class="witemshny-grids row mt-lg-3">
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d1.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Formal Wear</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d2.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 60% Off on Active Wear</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d3.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Shoes</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d4.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 50% Off on Shirts</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d5.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 50% Off on Clothing</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d6.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 60% Off on Sandles</a>
                </h4>
            </div>
        </div>
        <!--//row-1-->
        <h3 class="title-w3l mt-5 pt-lg-4">Best Discounts for You</h3>
        <!--/row2-->
        <div class="witemshny-grids row mt-lg-3">
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d7.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Swings</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d8.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 30% Off on Office Chairs</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d9.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Glass Mirror</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d10.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 50% Off on Makeup Kit</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d11.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 60% Off on Handbgs</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d12.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Perfumes</a>
                </h4>
            </div>
        </div>
        <!--//row-2-->
        <h3 class="title-w3l mt-5 pt-lg-4">Best Offers for You</h3>
        <!--/row2-->
        <div class="witemshny-grids row mt-lg-3">
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d13.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">40% Off on Kids Wear</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d14.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 30% Off on Face Packs</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d15.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 30% Off on Women Heels</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d16.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 40% Off on Baby Toys</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d17.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">Min. 60% Off on Herbal Products</a>
                </h4>
            </div>
            <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                <div class="weitemshny-grid oposition-relative">
                    <a href="#" class="d-block zoom"><img src="{{asset('public/images/d8.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="witemshny-inf">
                    </div>
                </div>
                <h4 class="gdnhy-1 mt-4"><a href="#">30% Off on Office Chairs</a>
                </h4>
            </div>
        </div>
        <!--//row-2-->
    </div>
</section>
<!--/w3l-ecommerce-main-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>
<!-- /home-page-video-popup-->
<section class="w3l-index5 py-5" id="video">
    <div class="new-block py-5">
        <div class="container">
            <div class="video-info">
                <div class="title-content text-center">
                    <h3 class="title-w3l two mb-5">Pre-Fall Collection,That mid-summer<br> craving for fall
                        styles?</h3>
                </div>
            </div>
            <div class="history-info py-lg-5 align-self pt-0">
                <div class="position-relative mt-lg-3 py-5 pt-lg-0">
                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://player.vimeo.com/video/145014989" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //home-page-video-popup-->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny py-5">
        <div class="container py-lg-5">
            <h3 class="title-w3l">Shop With Us</h3>
            <p class="">Handpicked Favourites just for you</p>
            <!-- /row-->
            <div class="ecom-products-grids row mt-lg-4 mt-3">
                @foreach($products as $item)
                <div class="col-lg-3 col-6 product-incfhny mt-4">
                    <div class="product-grid2 shopv">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1 img-fluid radius-image" src="{{asset('public/' .$item->img)}}">
                                <img class="pic-2 img-fluid radius-image" src="{{asset('public/' .$item->img)}}">
                            </a>
                            <ul class="social">
                                <li><a href="{{route('product.detail', $item->id)}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
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
                            <h3 class="title"><a href="{{route('product.detail', $item->id)}}">{{$item->name}}</a></h3>
                            <span class="price">{{$item->price}}{{' '}}VNĐ</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- //products-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>
<!-- testimonials section -->
<section class="w3l-clients w3l-test" id="testimonials">
    <div class="container py-lg-5 py-md-4 pt-5 pb-5">
        <div class="row">
            <div class="col-lg-4 testimonials-con-left-info py-sm-5 pt-0 py-3">
                <div class="title-content text-left p-xl-3">
                    <h6 class="title-subw3hny">Reviews</h6>
                    <h3 class="title-w3l two">What Clients Say ?</h3>
                    <p class="test-p mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel.
                    </p>
                </div>
            </div>
            <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                <div id="owl-demo2" class="owl-carousel owl-theme testimonials-2 py-sm-5 pt-0 py-3">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">

                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team1.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>Johnson william</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team2.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>Alexander sakura</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team3.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>John wilson</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team4.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>Julia sakura</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team2.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>John wilson</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Lorem ipsum dolor sit amet elit. hic
                                    odio tenetur. ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere.</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team3.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>Julia sakura</h3>
                                    <p class="identity">Example City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials-section-->
<!--/w3l-subscription-infhny-->
<section class="w3l-subscription-infhny py-5">
    <div class="container py-md-5">
        <div class="subscription-info text-center mx-auto">
            <i class="far fa-envelope"></i>
            <h3 class="title-w3l mb-2">Get On The List</h3>
            <p>Shop Exclusive Promos & SAVE 20% on Your First Order</p>

            <form action="#" method="post" class="w3l-signin-form mt-4 mb-3">
                <div class="forms-gds">
                    <div class="form-input">
                        <input type="email" name="" placeholder="Your email here" required="">
                    </div>
                    <div class="form-input"><button class="btn btn-style btn-primary">Subscribe</button></div>
                </div>
            </form>
            <p>By entering your email, you are accepting our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
        </div>
    </div>
</section>
@endsection