<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="{{url('/')}}">
                    <span class="w3yellow">Shoppy</span>Kart
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('/') ? 'active' : ''}} " aria-current="page" href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="{{url('/about')}}">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('products') ? 'active' : ''}}" href="{{url('/products')}}">Sản phẩm</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{request()->is('blog') || request()->is('faq') ? 'active' : ''}}" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Trang <span class="fa fa-angle-down ms-1"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/blog')}}">Trang Blog</a></li>
                            <li><a class="dropdown-item" href="{{url('/faq')}}">FaQ</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->is('contact') ? 'active' : ''}}" href="tel:+84012319723">Liên hệ</a>
                    </li>
                    <li class="nav-item search-right">
                        <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h3 class="title-w3l two mb-4 text-left">Tìm kiếm ở đây</h3>
                                <form action="{{ route('search.product') }}" method="GET" class="search-box d-flex position-relative">
                                    <input class="text-white" type="search" placeholder="Nhập tên sản phẩm" name="keyword" required="required" autofocus="">
                                    <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </li>
                </ul>
                <!--/search-right-->

            </div>
            <ul class="header-search me-lg-4 d-flex align-items-center">
                <li class="get-btn me-2">
                    @guest
                    <a href="{{url('/login')}}" class="btn btn-style btn-primary" title="Đăng nhập"><i class="fas fa-user me-lg-2"></i> <span class="btn-texe-inf">Đăng nhập</span></a>
                    @else
                <li class="nav-item dropdown me-2">
                    <a class="btn btn-success " id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào, {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                        <li><a class="dropdown-item pt-2" href="{{url('order-history')}}">Lịch sử đơn hàng</a></li>
                        <li>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button type="submit" class="dropdown-item pt-2" title="Đăng xuất">Đăng xuất</button>
                            </form>
                        </li>

                    </ul>
                </li>

                @endguest
                </li>
                <li class="shopvcart galssescart2 cart cart box_1 get-btn">
                    <form class="m-0" action="{{route('cart.view')}}">
                        <button class="top_shopv_cart">
                            <span class="fas fa-shopping-bag me-lg-2"></span><span class="btn-texe-inf">Giỏ hàng</span>
                        </button>
                    </form>
                </li>
            </ul>
            <!--//search-right-->
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>