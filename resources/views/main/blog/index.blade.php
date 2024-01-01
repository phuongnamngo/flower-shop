@extends('main.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Trang Blog</h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{url('/')}}">Trang chủ</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Blog</li>
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
<!--/w3l-blog-->
<section class="w3l-blog bloghny-page">
    <div class="blog py-5" id="Newsblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-12 bloghnypage-left">
                    <div class="row">
                        @foreach($blog as $item)
                        <div class="item mb-4 ">
                            <div class="card pb-4">
                                <div class="card-header p-0 position-relative">
                                    <a href="blog-single.html" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ asset('public/'. $item->img )}}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="card-body blog-details">
                                    <div class="price-review d-flex justify-content-between mb-1 align-items-center">
                                        <p>Mới</p>
                                    </div>
                                    <a href="#" class="blog-desc">{{$item->title}}</a>
                                    <p class="mt-1">{{$item->content}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--//sidebar-->
            </div>
        </div>
    </div>
</section>
@endsection