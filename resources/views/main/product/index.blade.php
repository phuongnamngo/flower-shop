@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Sản phẩm </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{url('/')}}">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Sản phẩm </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>
<!--/w3l-ecommerce-main-->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
        <div class="container py-lg-5">
            <div class="ecommerce-grids row">
                <div class="ecommerce-left-hny col-lg-4">
                    <!--/ecommerce-left-hny-->
                    <aside class="pe-lg-4">
                        <div class="sider-bar">
                            <!-- /Gallery-imgs -->

                            <div class="single-gd mb-5">
                                <h4>Danh mục</h4>
                                <ul class="list-group single">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="fw-bolder" href="{{route('product.index')}}">Tất cả</a>
                                    </li>
                                    @foreach($categories as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="fw-bolder" href="{{route('product.by.category', $item->id)}}">{{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <!--//ecommerce-left-hny-->
                </div>
                <!-- /row-->
                <div class="ecommerce-right-hny col-lg-8">
                    <div class="ecom-products-grids row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-6 product-incfhny mt-4">
                            <div class="product-grid2 shopv">
                                <div class="product-image2">
                                    <a href="{{route('product.detail', $product->id)}}">
                                        <img class="pic-1 img-fluid radius-image" src="{{asset('public/' .$product->img)}}">
                                        <img class="pic-2 img-fluid radius-image" src="{{asset('public/' .$product->img)}}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{route('product.detail', $product->id)}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="{{route('product.detail', $product->id)}}">{{$product->name}} </a></h3>
                                    <span class="price">${{ $product['price'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="pagination">
                        <ul>
                            <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
                            <li><a href="#page-number" class="active">1</a></li>
                            <li><a href="#page-number">2</a></li>
                            <li><a href="#page-number">3</a></li>

                            <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection