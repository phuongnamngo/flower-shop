@extends('main.app')
@section('content')
<header id="site-header" class="fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                    <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.html">
                            <span class="w3yellow">Shoppy</span>Kart
                        </a></h1>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="about.html">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Products <span class="fa fa-angle-down ms-1"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item pt-2" href="products.html">Products</a></li>
                                    <li><a class="dropdown-item" href="product-single.html">Product Single</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Cart Page</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages <span class="fa fa-angle-down ms-1"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item pt-2" href="blog.html">Blog Page</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                    <li><a class="dropdown-item" href="error.html">Error Page</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FaQ</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item search-right">
                                <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2"
                                        aria-hidden="true"></span></a>
                                <!-- search popup -->
                                <div id="search" class="pop-overlay">
                                    <div class="popup">
                                        <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                        <form action="#" method="GET" class="search-box d-flex position-relative">
                                            <input type="search" placeholder="Enter Keyword here" name="search"
                                                required="required" autofocus="">
                                            <button type="submit" class="btn"><span class="fas fa-search"
                                                    aria-hidden="true"></span></button>
                                        </form>
                                    </div>
                                    <a class="close" href="#close">×</a>
                                </div>
                                <!-- /search popup -->
                            </li>
                        </ul>

                    </div>
                    <ul class="header-search me-lg-4 d-flex">
                        <li class="get-btn me-2">
                            <a href="login.html" class="btn btn-style btn-primary" title="search"><i
                                    class="fas fa-user me-lg-2"></i> <span class="btn-texe-inf">Login</span></a>
                        </li>
                        <li class="shopvcart galssescart2 cart cart box_1 get-btn">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_shopv_cart" type="submit" name="submit" value="">
                                    <span class="fas fa-shopping-bag me-lg-2"></span> <span
                                        class="btn-texe-inf">Cart</span>

                                </button>
                            </form>
                        </li>
                    </ul>
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
        <!--//Header-->
        <section class="w3mid-gap"></section>
        <!--/Banner-Start-->
        <!--/inner-page-->
        <div class="inner-banner py-5">
            <section class="w3l-breadcrumb text-left py-sm-5 ">
                <div class="container">
                    <div class="w3breadcrumb-gids">
                        <div class="w3breadcrumb-left text-left">
                            <h2 class="inner-w3-title">
                                Login </h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Login </li>
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
        <section class="w3l-forml-main py-5">
            <div class="form-hnyv-sec py-sm-5 py-3">
                <!--form-stars-here-->
                <div class="form-wrapv">

                    <h2>Login to your account</h2>
                    <form action="#" method="post">
                        <div class="form-sub-w3">
                            <input type="text" name="Username" placeholder="Username " required="" />
                            <div class="icon-w3">
                                <span class="fas fa-user" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-sub-w3">
                            <input type="password" name="Password" placeholder="Password" required="" />
                            <div class="icon-w3">
                                <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-sub-content">
                            <p class="forgot-w3ls">Forgot Password?<a class href="#"> Click here</a></p>
                            <p class="forgot-w3ls1">New User? <a class href="#register">Signup here</a></p>
                        </div>
                        <div class="submit-button text-center">
                            <button class="btn btn-style btn-primary">Login Now</button>

                        </div>
                    </form>

                </div>
                <!--//form-ends-here-->
            </div>
            <!-- //coming -->
        </section>
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!--/w3l-footer-29-main-->
        <footer class="w3l-footer-29-main">
            <div class="footer-29 py-5">
                <div class="container py-lg-4">
                    <h2>Special Offer All Branded Sandals are <br>Flat 50% Discount</h2>
                    <div class="row footer-top-29 mt-md-5">
                        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 pe-lg-5">
                            <h6 class="footer-title-29">USeful Links</h6>
                            <div class="footer-listw3-grids">
                                <ul class="footer-listw3">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#support">Support</a></li>
                                    <li><a href="#news">News & Media</a></li>
                                    <li><a href="#Careers">Careers</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-list-29 footer-1 ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                            <h6 class="footer-title-29">Information</h6>
                            <div class="footer-listw3-grids">
                                <ul class="footer-listw3">
                                    <li><a href="#terms">Terms & Conditions</a></li>
                                    <li><a href="#deivery">Delivery Terms</a></li>
                                    <li><a href="#order">Order Tracking</a></li>
                                    <li><a href="#returns">Returns Policy</a></li>
                                    <li><a href="#support">Privacy Policy</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#shop">The Shop</a></li>

                                </ul>

                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-md-5 mt-4 pe-lg-5">
                            <h6 class="footer-title-29">Address</h6>
                            <div class="footer-listw3-grids">
                                <ul class="footer-listw3">
                                    <li>London, UK</li>
                                    <li>998 13h Street, Office 436</li>
                                    <li>Harlo 61466</li>
                                    <li><a href="tel:+(21) 255 999 8888">+(21) 255 999 8888</a></li>
                                    <li><a href="/cdn-cgi/l/email-protection#7e2d16110e0e07351f0c0a3e131f1712501d1113"
                                            class="mail"><span class="__cf_email__"
                                                data-cfemail="1a4972756a6a63517b686e5a777b737634797577">[email&#160;protected]</span></a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-md-5 mt-4  ps-lg-5">
                            <h6 class="footer-title-29">Payment Method</h6>
                            <ul class="pay-method-grids">
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-visa"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-discover"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-paypal"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-mastercard"
                                            aria-hidden="true"></span></a>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-stripe"
                                            aria-hidden="true"></span></a>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-amex"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fab fa-cc-jcb"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="cc-diners-club"
                                            aria-hidden="true"></span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="row bottom-copies">
                        <p class="copy-footer-29 col-lg-8">© 2021 ShoppyKart. All rights reserved | Designed by <a
                                href="https://w3layouts.com" target="_blank">W3layouts</a></p>
                        <div class="col-lg-4 main-social-right mt-lg-0 mt-4">
                            <div class="main-social-footer-29">
                                <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                                <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                                <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                                <a href="#linkd" class="linkd"><span class="fab fa-linkedin-in"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }

            </script>
            <!-- //move top -->
        </footer>
@endsection