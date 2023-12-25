<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ShoppyKart - Ecommerce Category Bootstrap Responsive Template | Home :: W3layouts </title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('public/css/style-liberty.css')}}">
</head>

<body>
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-98H8KRKT85');
    </script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css')}}">
        <!--/Header-->
        @include('main.includes.header')
        <section class="w3mid-gap"></section>
        @yield('content')
        @include('main.includes.footer')
        <!-- Template JavaScript -->
        @if(request()->is('/'))
        <script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
        @else
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        @endif
        <script src="{{asset('public/js/theme-change.js')}}"></script>
        <!-- cart-js -->
        <script src="{{asset('public/js/minicart.js')}}"></script>
        <script>
            shopv.render();

            shopv.cart.on('shopv_checkout', function(evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
        </script>
        <!-- //cart-js -->
        <!-- owlcarousel -->
        <script src="{{asset('public/js/owl.carousel.js')}}"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function() {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        667: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })
        </script>
        <!-- //script -->
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function() {
                $("#owl-demo2").owlCarousel({
                    loop: true,
                    nav: false,
                    margin: 50,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        736: {
                            items: 1,
                            nav: false
                        },
                        991: {
                            items: 2,
                            margin: 30,
                            nav: false
                        },
                        1080: {
                            items: 2,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //script for tesimonials carousel slider -->
        <!-- video popup -->
        <script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script>
        <!-- //video popup -->

        <!-- MENU-JS -->
        <script>
            $(window).on("scroll", function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function() {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function() {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>
        <!-- //MENU-JS -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!-- //bootstrap -->
        <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script type="text/javascript">
            function remove_background(product_id) {
                for (var count = 1; count <= 5; count++) {
                    $('#' + product_id + '-' + count).css('color', '#ccc')
                }
            }
            $(document).on('mouseenter', '.rating', function() {
                var index = $(this).data("index");
                var product_id = $(this).data("product-id");
                remove_background(product_id);
                for (var count = 1; count <= index; count++) {
                    $('#' + product_id + '-' + count).css('color', '#ef233c')
                }
            });
            $(document).on('mouseleave', '.rating', function() {
                var index = $(this).data("index");
                var product_id = $(this).data("product-id");
                var rating = $(this).data("rating");
                remove_background(product_id);
                for (var count = 1; count <= rating; count++) {
                    $('#' + product_id + '-' + count).css('color', '#ef233c')
                }
            });
            $(document).on('click', '.rating', function() {
                var index = $(this).data("index");
                var product_id = $(this).data("product-id");
                $.ajax({
                    url: '{{ route("insert.rating")}}',
                    type: 'POST',
                    data: {
                        index: index,
                        product_id: product_id,
                    },
                    success: function(response) {
                        alert(response.success)
                        location.reload();
                    }
                });
            });
        </script>
        <script>
            (function() {
                var js = "window['__CF$cv$params']={r:'830d1083a9a5403b',t:'MTcwMTc4NzQzOS41MjUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{asset('public/js/main.js')}}',document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');
                _0xh.height = 1;
                _0xh.width = 1;
                _0xh.style.position = 'absolute';
                _0xh.style.top = 0;
                _0xh.style.left = 0;
                _0xh.style.border = 'none';
                _0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);

                function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');
                        _0xj.innerHTML = js;
                        _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    }
                }
                if (document.readyState !== 'loading') {
                    handler();
                } else if (window.addEventListener) {
                    document.addEventListener('DOMContentLoaded', handler);
                } else {
                    var prev = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(e) {
                        prev(e);
                        if (document.readyState !== 'loading') {
                            document.onreadystatechange = prev;
                            handler();
                        }
                    };
                }
            })();
        </script>
    </body>

</html>