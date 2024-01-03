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
                        <h5>Giảm tới 60% ngay bây giờ</h5>
                        <h3 class="title-hero-19">Giảm Giá Giữa Mùa 40%</h3>
                        <p>Thông quan cuối cùng: Giảm giá 20% cho 'Những sản phẩm phải có'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Bắt đầu mua sắm <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top2">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Giải phóng mặt bằng mùa thu hè</h5>
                        <h3 class="title-hero-19">Tận hưởng đợt giảm giá theo mùa</h3>
                        <p>Thông quan cuối cùng: Giảm giá 20% cho 'Những sản phẩm phải có'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Bắt đầu mua sắm <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top3">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Giảm tới 60% ngay bây giờ</h5>
                        <h3 class="title-hero-19">Giảm Giá Giữa Mùa 40%</h3>
                        <p>Thông quan cuối cùng: Giảm giá 20% cho 'Những sản phẩm phải có'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Bắt đầu mua sắm <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-info banner-view banner-top4">
                <div class="container">
                    <div class="banner-info header-hero-19">
                        <h5>Giải phóng mặt bằng mùa thu hè</h5>
                        <h3 class="title-hero-19">Tận hưởng đợt giảm giá theo mùa</h3>
                        <p>Thông quan cuối cùng: Giảm giá 20% cho 'Những sản phẩm phải có'</p>
                        <a href="{{url('/products')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Bắt đầu mua sắm <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //main-slider -->
<!-- /Free-Ship-->
<section class="w3free-ship text-center py-md-5 py-4">
    <h2>Miễn phí vận chuyển cho bạn đến nửa đêm <i class="fas fa-shipping-fast ms-lg-3"></i></h2>
</section>
<!--//Free-Ship-->
<!--/bottom-3-grids-->
<!-- //home-page-video-popup-->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny py-5">
        @foreach($categories as $category)
        <div class="container py-4">

            <h3 class="title-w3l text-center">{{ $category->name }}</h3>
            <!-- /row-->
            <div class="ecom-products-grids row mt-lg-4 mt-3">
                @foreach($category->products as $item)
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
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    <input type="hidden" name="product_name" value="{{$item->name}}">
                                    <input type="hidden" name="product_img" value="{{$item->img}}">
                                    <input type="hidden" name="product_price" value="{{$item->price}}">
                                    <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                        Thêm vào giỏ hàng
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="{{route('product.detail', $item->id)}}">{{$item->name}}</a></h3>
                            <span class="price">{{number_format($item->price )}}{{' '}}VNĐ</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
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
                    <h6 class="title-subw3hny">ĐÁNH GIÁ</h6>
                    <h3 class="title-w3l two">Khách hàng nói gì?</h3>
                    <p class="test-p mt-3">Chào mừng đến với phim hoạt hình feugiat. Họ giúp bạn tự do như bóng rổ trong giải đấu. Luôn luôn ở tempufddfel.
                    </p>
                </div>
            </div>
            <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                <div id="owl-demo2" class="owl-carousel owl-theme testimonials-2 py-sm-5 pt-0 py-3">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <p><i class="fas fa-quote-left me-2"></i> Sản phẩm mang thương hiệu tốt và được đánh giá rất tốt trên tất cả mặt hàng</p>
                            </div>
                            <div class="bottom-info mt-4">
                                <a class="comment-img" href="#url"><img src="{{asset('public/images/team1.jpg')}}" class="img-fluid radius-image" alt="placeholder image"></a>
                                <div class="people-info align-self">
                                    <h3>Hạnh William</h3>
                                    <p class="identity">TP Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        @if(session('success'))
        alert("Thêm sản phẩm vào giỏ hàng thành công");
        @endif
    });
</script>
@endsection