
<!doctype html>
<html class="no-js" lang="zxx">
<title>App Name - @yield('title')</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home|| JAVA_ART</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/iconfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-sticky d-none d-lg-block">
            <div class="header-default">
                <div
                    class="container-fluid pl-115 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-115 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                    <div class="row align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-lg-12">
                            <div class="header-nav d-flex justify-content-between align-items-center">
                                <div class="header-logo text-center">
                                    <a href="{{url('home')}}"><img src="{{ asset('assets/images/jawaart2.png') }}" alt=""></a>
                                </div>
                                <nav class="main-menu main-menu-two">
                                    <ul>
                                        <li><a href="{{url('home')}}">Home</a></li>
                                        <li><a href="{{url('product')}}">Product</a></li>
                                            <ul class="mega-menu four-column left-0">
                                                <li><a href="#" class="item-link">Pages</a>
                                                    <ul>
                                                        <li><a href="{{url('compare')}}">Compare</a></li>
                                                        
                                                        <li><a href="{{url('my-account')}}">My Account</a></li>
                                                        <li><a href="{{url('login-register')}}">Login Register</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                
                                                <li><a href="#" class="item-link">Product Details</a>
                                                    <ul>
                                                        <li><a href="{{url('single-product')}}">Single Product</a></li>
                                                        <li><a href="{{url('single-product-variable')}}">Variable Product</a>
                                                        </li>
                                                        <li><a href="{{url('single-product-group')}}">Group Product</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('blog-right-sidebar')}}">Blog</a>

                                        </li>
                                        <li><a href="{{url('about')}}">About Us</a></li>
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div class="header-right_wrap d-flex">
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <!-- Header Logo Start -->

                    </div>

                </div>
            </div>
        </header>
        <!--Header section end-->
        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img src="assets/images/jawaart2.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.html"><i
                                                                    class="ion-bag"></i><span>2</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon"
                                                            id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->
@yield('content')


        <!--Footer section start-->
        <footer class="footer-section section bg-gray-two">

            <!--Footer Top start-->
            <div
                class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-15 pb-xs-5">
                <div class="container">
                    <div class="row">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-6 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <div class="row">
                                <div class="col-md-3">
                            <div class="footer-logo">
                                  <a href="{{url('home')}}"><img src="{{ asset('assets/images/jawaart2.png') }}" alt=""></a>
                                </div>
                            </div>
                                <div class="col-md-8">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis.</p>

                            </div>
                            </div>
                            <div class="f-social-title">
                                <h3>Follow Us On Social:</h3>
                            </div>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Opening Time</span></h4>
                            <p class="mb-15">Mon – Fri: 8AM – 10PM</p>
                            <p class="mb-15">Sat: 9AM-8PM</p>
                            <p class="mb-15">Sun: Closed</p>
                            <h4 class="opeaning-title">We Work All The Holidays</h4>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">My Account</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">About Us</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Store</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->
                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-12 ft-border pt-25 pb-25">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="copyright text-left">
                                        <p>Copyright &copy;2021 <a href="#">Java ART</a>. All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-nav text-right">
                                        <nav>
                                            <ul>
                                                <li><a href="#">Policy</a></li>
                                                <li><a href="#">Questions</a></li>
                                                <li><a href="#">Affiliate</a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->

        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1 tf-element-carousel"
                                            data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "asNavFor": ".slider-thumbs-1",
                                                "arrows": false,
                                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                                }'>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-1.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-1.jpg"></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-2.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-2.jpg"></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-3.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-3.jpg"></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-4.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-4.jpg"></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="assets/images/product/large-product/l-product-5.jpg" alt="">
                                                <a href="assets/images/product/large-product/l-product-5.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel"
                                            data-slick-options='{
                                                "slidesToShow": 4,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "focusOnSelect": true,
                                                "asNavFor": ".slider-lg-image-1",
                                                "arrows": false,
                                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                                }' data-slick-responsive='[
                                                {"breakpoint":991, "settings": {
                                                    "slidesToShow": 3
                                                }},
                                                {"breakpoint":767, "settings": {
                                                    "slidesToShow": 4
                                                }},
                                                {"breakpoint":479, "settings": {
                                                    "slidesToShow": 2
                                                }}
                                            ]'>
                                            <div class="sm-image"><img
                                                    src="assets/images/product/small-product/s-product-1.jpg"
                                                    alt="product image thumb"></div>
                                            <div class="sm-image"><img
                                                    src="assets/images/product/small-product/s-product-2.jpg"
                                                    alt="product image thumb"></div>
                                            <div class="sm-image"><img
                                                    src="assets/images/product/small-product/s-product-3.jpg"
                                                    alt="product image thumb"></div>
                                            <div class="sm-image"><img
                                                    src="assets/images/product/small-product/s-product-4.jpg"
                                                    alt="product image thumb"></div>
                                            <div class="sm-image"><img
                                                    src="assets/images/product/small-product/s-product-5.jpg"
                                                    alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et
                                                mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div class="wishlist-compare-btn">
                                            <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                            <a href="#" class="add-compare">Compare</a>
                                        </div>
                                        <div class="product-meta">
                                            <span class="posted-in">
                                                Categories:
                                                <a href="#">Accessories</a>,
                                                <a href="#">Electronics</a>
                                            </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Area End -->

    </div>
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script
        src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>