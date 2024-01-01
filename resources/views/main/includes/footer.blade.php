<footer class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-lg-4">
            <h2>Ưu đãi đặc biệt </h2>
            <div class="row footer-top-29 mt-md-5">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 pe-lg-5">
                    <h6 class="footer-title-29">Liên kết hữu ích</h6>
                    <div class="footer-listw3-grids">
                        <ul class="footer-listw3">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('about')}}">Về chúng tôi</a></li>
                            <li><a href="{{url('blog')}}">Blogs</a></li>
                            <li><a href="{{url('products')}}">Sản phẩm</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                    <h6 class="footer-title-29">Thông tin</h6>
                    <div class="footer-listw3-grids">
                        <ul class="footer-listw3">
                            <li><a href="#faq">FAQ</a></li>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-md-5 mt-4 pe-lg-5">
                    <h6 class="footer-title-29">Địa chỉ</h6>
                    <div class="footer-listw3-grids">
                        <ul class="footer-listw3">
                            <li>Thành phố Hồ Chí Minh</li>
                            <li><a href="tel:+(84) 255 999 8888">+(84) 255 999 8888</a></li>
                            <li><a href="mailto:hanh@gmail.com">hanh@gmail.com</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
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