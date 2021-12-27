
@extends('template')
@section('content')


<!-- Offcanvas Menu Start -->
<div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
    <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
        <i class="ion-android-close"></i>
    </a>

    <div class="offcanvas-wrapper">

        <div class="offcanvas-inner-content">
            <div class="offcanvas-mobile-search-area">
                <form action="#">
                    <input type="search" placeholder="Search ...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="menu-item-has-children"><a href="#">Shop</a>
                        <ul class="submenu2">
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu2">
                                    <li><a href="{{url('compare')}}">Compare</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>

                                    <li><a href="{{url('my-account')}}">My Account</a></li>
                                    <li><a href="{{url('login-register')}}">Login Register</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Product</a>

                            </li>
                            <li class="menu-item-has-children"><a href="#">Product Details</a>
                                <ul class="submenu2">
                                    <li><a href="{{url('single-product')}}">Single Product</a></li>
                                    <li><a href="{{url('single-product-variable')}}">Variable Product</a></li>

                                    <li><a href="{{url('single-product-group')}}">Group Product</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Product Details</a>
                                <ul class="submenu2">
                                    <li><a href="single-product-sticky-left.html">Product Sticky
                                            Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky
                                            Right</a></li>
                                    <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Blog</a>


                    <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>

                </ul>
                </li>
                <li class="menu-item-has-children"><a href="{{url('about')}}">About Us</a>
                </li>
                <li class="menu-item-has-children"><a href="{{url('contact')}}">Contact Us</a>
                </li>

                </ul>
            </nav>

            <div class="offcanvas-settings">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                            <ul class="submenu2">
                                <li><a href="{{url('login-register')}}">Register</a></li>
                                <li><a href="{{url('login-register')}}">Login</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                            <ul class="submenu2">
                                <li><a href="javascript:void(0)">€ Euro</a></li>
                                <li><a href="javascript:void(0)">$ US Dollar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                            <ul class="submenu2">
                                <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png"
                                                                      alt=""> English</a></li>
                                <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png"
                                                                      alt=""> Germany</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <div class="header-contact-info">
                        <ul class="header-contact-info-list">
                            <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245)
                                    2456 012 </a></li>
                            <li><i class="ion-android-mail"></i> <a
                                    href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--Off Canvas Widget Social Start-->
                <div class="off-canvas-widget-social">
                    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                </div>
                <!--Off Canvas Widget Social End-->
            </div>
        </div>
    </div>

</div>
<!-- Offcanvas Menu End -->

<!--slider section start-->
<div class="hero-section section position-relative">

    <div class="tf-element-carousel slider-nav white-text_color" data-slick-options='{
         "slidesToShow": 1,
         "slidesToScroll": 1,
         "infinite": true,
         "arrows": false,
         "dots": true,
         "autoplay" : true,
         "fade" : true,
         "autoplaySpeed" : 7000,
         "pauseOnHover" : false,
         "pauseOnFocus" : false
         }' data-slick-responsive='[
         {"breakpoint":768, "settings": {
         "slidesToShow": 1
         }},
         {"breakpoint":575, "settings": {
         "slidesToShow": 1
         }}
         ]'>
        <!--Hero Item start-->
        <div class="hero-item bg-image image-height" data-bg="assets/images/hero/NA1039-01.jpg">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--Hero Content start-->
                        <div class="hero-content-2 left">

                            <h3>New Arrivals</h3>
                            <h1> Rare... <br> Unique <strong>Asmat Tribe Statue</strong></h1>
                            <a class="btn" href="{{url('product')}}">view more</a>

                        </div>
                        <!--Hero Content end-->

                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->

        <!--Hero Item start-->
        <div class="hero-item bg-image image-height" data-bg="assets/images/hero/hero.jpg">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--Hero Content start-->
                        <div class="hero-content-2 left">

                            <h3>New Arrivals</h3>
                            <h1>Elegant and <br> luxurious <strong>Indonesian Batik</strong> </h1>
                            <a class="btn" href="{{url('product')}}">view more</a>

                        </div>
                        <!--Hero Content end-->

                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->

    </div>

</div>
<!--slider section end-->

<!--Banner section start-->
<div class="banner-section section pt-30">
    <div
        class="container-fluid pl-20 pr-20 pl-lg-15 pr-lg-15 pl-md-15 pr-md-15 pl-sm-15 pr-sm-15 pl-xs-15 pr-xs-15">
        <div class="row">
            <div class="col-md-6 pb-xs-30">
                <!-- Single Banner Start -->
                <div class="single-banner-item">
                    <div class="banner-image">
                        <a href="{{url('product')}}">
                            <img src="assets/images/banner/472_1 (1).jpg" alt="">
                        </a>
                    </div>
                    <div class="banner-content banner-content-two">
                        <h4 class="title-light">BLACK FRIDAY</h4>
                        <h3 class="title">Save Up To 50% Off</h3>
                        <a href="{{url('product')}}">View Collection <i
                                class="ion-android-arrow-dropright-circle"></i></a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-md-6">
                <!-- Single Banner Start -->
                <div class="single-banner-item">
                    <div class="banner-image">
                        <a href="{{url('product')}}">
                            <img src="assets/images/banner/yyy.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner-content banner-content-two">
                        <h4 class="title-light">BEST SELLING !</h4>
                        <h3 class="title">Indonesian statues Up To 35% Off</h3>
                        <a href="{{url('product')}}">View Collection <i
                                class="ion-android-arrow-dropright-circle"></i></a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!--Banner section end-->

<!--Feature section start-->
<div class="feature-section feature-section-2 section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
    
</div>
<!--Feature section end-->

<!--Product section start-->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-30 pt-20 single-post-tag">
                    <h2>All Product</h2>
                    <p>Browse the collection of our top rated products.</p>
                </div>
            </div>
        </div>
        <div class="product-slider tf-element-carousel normal-nav" data-slick-options='{
             "slidesToShow": 4,
             "slidesToScroll": 1,
             "infinite": true,
             "arrows": true,
             "rows" : 2,
             "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
             "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
             }' data-slick-responsive='[
             {"breakpoint":1199, "settings": {
             "slidesToShow": 3
             }},
             {"breakpoint":992, "settings": {
             "slidesToShow": 2
             }},
             {"breakpoint":768, "settings": {
             "slidesToShow": 2
             }},
             {"breakpoint":576, "settings": {
             "slidesToShow": 1,
             "arrows": false,
             "autoplay": true
             }}
             ]'>
            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/hhh1.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/hhh.jpg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Decor</a></span>
                        <h3 class="title"> <a href="{{url('single-product')}}">Asmat Statue</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/lll.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/lll.jpeg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decor</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Tembika Yoyyakarta</a></h3>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/bee.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/be.jpeg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Storage</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Woven bag</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>


            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/amm (1).jfif" class="img-fluid" alt="">
                            <img src="assets/images/product/amm (2).jfif" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Storage</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Woven bag</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/tam3.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/tam5.jpg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Decoration</a></span>


                        <h3 class="title"> <a href="{{url('single-product')}}">Macrame Vas</a></h3>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>
            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/dd.jfif" class="img-fluid" alt="">
                            <img src="assets/images/product/dd.jpg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decore</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Vase</a></h3>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/uki1.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/uki.jpg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decore</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Woodcarving</a></h3>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/aaaa.jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/bbbb.jpg" class="img-fluid" alt="">
                        </a>

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Decore</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Coconut shell Craft</a></h3>

                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/dd.jfif" class="img-fluid" alt="">
                            <img src="assets/images/product/dd.jpg" class="img-fluid" alt="">
                        </a>

                        <div class="product-action d-flex justify-content-between">

                            <li><a href="{{url('compare')}}"><i class="ion-ios-shuffle"></i></a></li>
                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                   title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decore</a></span>

                        <h3 class="title"> <a href="{{url('single-product')}}">Vase</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/2 (6).jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/1.jpg" class="img-fluid" alt="">
                        </a>

                        
                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">Decore</a></span>
                        <h3 class="title"> <a href="{{url('single-product')}}">lorem ipsum decoration item</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/amm (2).jfif" class="img-fluid" alt="">
                            <img src="assets/images/product/amm (1).jfif" class="img-fluid" alt="">
                        </a>

                        <div class="product-action d-flex justify-content-between">

                            <li><a href="{{url('compare')}}"><i class="ion-ios-shuffle"></i></a></li>
                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal"
                                   title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decore</a></span>
                        <h3 class="title"> <a href="{{url('single-product')}}">Tas Anyaman</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>
             <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product mb-40">
                    <div class="product-image">

                        <a href="{{url('single-product')}}">
                            <img src="assets/images/product/2 (5).jpg" class="img-fluid" alt="">
                            <img src="assets/images/product/hhh1.jpg" class="img-fluid" alt="">
                        </a>

                        
                    </div>
                    <div class="product-content">

                        <span class="category"><a href="{{url('product')}}">Decore</a></span>
                        <h3 class="title"> <a href="{{url('single-product')}}">Tas Anyaman</a></h3>
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>
        </div>

    </div>
</div>
<!--Product section end-->

<!--Banner section start-->
<div class="banner-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Single Banner Start -->
                <div class="single-banner-item mb-30">
                    <div class="banner-image">
                        <a href="{{url('product')}}">
                            <img src="assets/images/banner/kkkk.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
            <div class="col-md-6">
                <!-- Single Banner Start -->
                <div class="single-banner-item mb-30">
                    <div class="banner-image">
                        <a href="{{url('product')}}">
                            <img src="assets/images/banner/rrrr.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
<!--Banner section end-->

<!-- List Product Section Start -->
<div class="list-product-section section pt-80 pt-lg-60 pt-md-50 pt-sm-40 pt-xs-20">
    <div class="container sb-border  pb-75 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-25">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!--  Product List Widget Wrapper -->
                <div class="product-list-widget-wrapper">
                    <!-- widget product list title -->
                    <div class="list-product-section-title mb-35">
                        <h3><span>On Sale</span></h3>
                        <div class="on-sale-nav slick-btns"></div>
                    </div>
                    <!-- widget product list title -->

                    <!--  widget product list wrapper -->
                    <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                         "slidesToShow": 1,
                         "slidesToScroll": 1,
                         "infinite": true,
                         "arrows": true,
                         "rows": 2,
                         "appendArrows": ".on-sale-nav",
                         "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                         "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                         }' data-slick-responsive='[
                         {"breakpoint":1199, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":992, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":768, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":576, "settings": {
                         "slidesToShow": 1,
                         "arrows": false,
                         "autoplay": true
                         }}
                         ]'>
                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/2 (7).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Wayang</a></h3>
                                <div class="product-category-rating">

                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (2).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Asmat Statue
                                        hendrerit</a></h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Macrame</a></h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (3).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kaoreet lobortis sagittis</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (5).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Furniture</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kerajinan Tanduk</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (1).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Cermin</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (7).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Wayang Kulit Kayu</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/dd.jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decore</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kejajinan Pantai</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (1).jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Storage</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Tas Anyaman</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->
                    </div>
                    <!-- End of widget product list wrapper -->
                </div>
                <!--  Product List Widget Wrapper -->

            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Product List Widget Wrapper -->
                <div class="product-list-widget-wrapper">
                    <!-- widget product list title -->
                    <div class="list-product-section-title mb-35">
                        <h3><span>Latest Arrivals</span></h3>
                        <div class="latest-nav slick-btns"></div>
                    </div>
                    <!-- widget product list title -->

                    <!--  widget product list wrapper -->
                    <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                         "slidesToShow": 1,
                         "slidesToScroll": 1,
                         "infinite": true,
                         "arrows": true,
                         "rows": 2,
                         "appendArrows": ".latest-nav",
                         "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                         "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                         }' data-slick-responsive='[
                         {"breakpoint":1199, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":992, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":768, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":576, "settings": {
                         "slidesToShow": 1,
                         "arrows": false,
                         "autoplay": true
                         }}
                         ]'>
                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (10).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}"></a>Storage</span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Sling Bag</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (2).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Macrame</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/2 (7).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Wayang Kulit</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (2).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Accessories</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Macrame</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (5).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kerajinan Tanduk Rusa</a></h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133.jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kerajinan Pantai</a></h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (1).jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Storage</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Tas Anyaman Rotan</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (8).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Patunbg Pahat Penunggang kuda</a>
                                </h3>
                                <div class="product-category-rating">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of widget product list wrapper -->
                </div>
                <!--  Product List Widget Wrapper -->

            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Product List Widget Wrapper -->
                <div class="product-list-widget-wrapper">
                    <!-- widget product list title -->
                    <div class="list-product-section-title mb-35">
                        <h3><span>Top Rated Products</span></h3>
                        <div class="top-rated-nav slick-btns"></div>
                    </div>
                    <!-- widget product list title -->

                    <!--  widget product list wrapper -->
                    <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                         "slidesToShow": 1,
                         "slidesToScroll": 1,
                         "infinite": true,
                         "arrows": true,
                         "rows": 2,
                         "appendArrows": ".top-rated-nav",
                         "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                         "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                         }' data-slick-responsive='[
                         {"breakpoint":1199, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":992, "settings": {
                         "slidesToShow": 1
                         }},
                         {"breakpoint":768, "settings": { 
                         "slidesToShow": 1
                         }},
                         {"breakpoint":576, "settings": {
                         "slidesToShow": 1,
                         "arrows": false,
                         "autoplay": true
                         }}
                         ]'>
                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (4).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Lampu Tempurung Kelapa</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (3).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Pajangan Ukiran Kayu</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (2).jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Macrame</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (1).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Cermin Kulit Kerang</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (6).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kapal Layar Tempurung Kelapa</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (5).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kerajinan Tanduk</a></h3>
                                <div class="product-category-rating">
                                </div>

                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133.jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Kerajinan Pantai</a></h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (1).jfif" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Storage</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Tas Anyaman Rotan</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->

                        <!--  single widget product -->
                        <div class="single-grid-product list-mode">
                            <div class="list-mode-image">
                                <a href="{{url('single-product')}}">
                                    <img src="assets/images/product/100x133 (8).jpeg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="list-mode-content">
                                <span class="category"><a href="{{url('product')}}">Decor</a></span>
                                <h3 class="title"> <a href="{{url('single-product')}}">Patung Pahatan Peria Penunggang Kuda Suku Asmat</a>
                                </h3>
                                <div class="product-category-rating">
                                </div>
                            </div>
                        </div>
                        <!--  single widget product -->
                    </div>
                    <!-- End of widget product list wrapper -->
                </div>
                <!--  Product List Widget Wrapper -->
            </div>
        </div>
    </div>
</div>
<!-- List Product Section End -->

<!-- Testimonial Area Start -->
<div class="testimonial-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-wrap bg-gray-two">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial-wrapper section-space--inner">
                                <div class="tf-element-carousel" data-slick-options='{
                                     "slidesToShow": 1,
                                     "slidesToScroll": 1,
                                     "infinite": true,
                                     "arrows": false,
                                     "dots": true
                                     }' data-slick-responsive='[
                                     {"breakpoint":768, "settings": {
                                     "slidesToShow": 1
                                     }},
                                     {"breakpoint":575, "settings": {
                                     "slidesToShow": 1
                                     }}
                                     ]'>
                                    <div class="item">
                                        <!-- single testimonial item Strat-->
                                        <div class="single-testimonial-item">
                                            <div class="testimonial-image">
                                                <img src="assets/images/testimonial/testimonial1.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                    gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                    velit quam facilisis elit, sit amet lacinia est est id
                                                    ligula. Duis feugiat quam non justo faucibus, in gravida
                                                    diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                    blandit diam mattis. Maecenas gravida mol..</p>
                                                <img src="assets/images/icons/quote-icon.png" alt="">
                                                <p class="testimonial-author">juki</p>
                                                <span class="post">Customer</span>
                                            </div>
                                        </div>
                                        <!-- single testimonial item End-->
                                    </div>
                                    <div class="item">
                                        <!-- single testimonial item Strat-->
                                        <div class="single-testimonial-item">
                                            <div class="testimonial-image">
                                                <img src="assets/images/testimonial/testimonial2.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                    gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                    velit quam facilisis elit, sit amet lacinia est est id
                                                    ligula. Duis feugiat quam non justo faucibus, in gravida
                                                    diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                    blandit diam mattis. Maecenas gravida mol..</p>
                                                <img src="assets/images/icons/quote-icon.png" alt="">
                                                <p class="testimonial-author">juliet</p>
                                                <span class="post">Customer</span>
                                            </div>
                                        </div>
                                        <!-- single testimonial item Strat-->
                                    </div>
                                    <div class="item">
                                        <!-- single testimonial item Strat-->
                                        <div class="single-testimonial-item">
                                            <div class="testimonial-image">
                                                <img src="assets/images/testimonial/testimonial3.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-content">
                                                <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                    gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                    velit quam facilisis elit, sit amet lacinia est est id
                                                    ligula. Duis feugiat quam non justo faucibus, in gravida
                                                    diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                    blandit diam mattis. Maecenas gravida mol..</p>
                                                <img src="assets/images/icons/quote-icon.png" alt="">
                                                <p class="testimonial-author">juliet</p>
                                                <span class="post">Customer</span>

                                            </div>
                                        </div>
                                        <!-- single testimonial item Strat-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->

<!--Blog section start-->
<div class="blog-section section pt-50 pt-lg-30 pt-md-20 pt-sm-10 pt-xs-0">
    <div class="container sb-border  pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-30">

        <div class="row">
            <!-- Section Title Start -->
            <div class="col">
                <div class="section-title text-center mb-30 pt-20">
                    <h2>Post From Blogs</h2>
                    <p>Browse the collection of our new products.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="blog-slider tf-element-carousel normal-nav" data-slick-options='{
             "slidesToShow": 3,
             "slidesToScroll": 1,
             "infinite": true,
             "arrows": true,
             "dots": false,
             "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
             "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
             }' data-slick-responsive='[
             {"breakpoint":1199, "settings": {
             "slidesToShow": 3
             }},
             {"breakpoint":992, "settings": {
             "slidesToShow": 2
             }},
             {"breakpoint":768, "settings": {
             "slidesToShow": 2
             }},
             {"breakpoint":575, "settings": {
             "slidesToShow": 1,
             "arrows": false,
             "autoplay": true
             }}
             ]'>
            <!-- Single Blog Start -->
            <div class="blog col">
                <div class="blog-inner">
                    <div class="media"><a href="{{url('blog-right-sidebar')}}" class="image"><img
                                src="assets/images/blog/blog-detailss-1.jpg" alt=""></a></div>
                    <div class="content">
                        <h3 class="title"><a href="{{url('blog-right-sidebar')}}">Cool boy with statue</a></h3>
                        <ul class="meta">
                            <li>By <a href="#" tabindex="0">admin</a></li>
                            <li>30 October 2019</li>
                        </ul>
                        <a class="btn" href="{{url('blog-right-sidebar')}}">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="blog col">
                <div class="blog-inner">
                    <div class="media"><a href="{{url('blog-right-sidebar')}}" class="image"><img
                                src="assets/images/blog/blog-detailss-2.jpeg" alt=""></a></div>
                    <div class="content">
                        <h3 class="title"><a href="{{url('blog-right-sidebar')}}">Blog post</a></h3>
                        <ul class="meta">
                            <li>By <a href="#" tabindex="0">admin</a></li>
                            <li>30 October 2018</li>
                        </ul>
                        <a class="btn" href="{{url('blog-right-sidebar')}}">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="blog col">
                <div class="blog-inner">
                    <div class="media"><a href="{{url('blog-right-sidebar')}}" class="image"><img
                                src="assets/images/blog/blog-detailss-3.jpg" alt=""></a></div>
                    <div class="content">
                        <h3 class="title"><a href="{{url('blog-right-sidebar')}}">Blog  post</a></h3>
                        <ul class="meta">
                            <li>By <a href="#" tabindex="0">admin</a></li>
                            <li>30 October 2020</li>
                        </ul>
                        <a class="btn" href="{{url('blog-right-sidebar')}}">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
            <!-- Single Blog Start -->
            <div class="blog col">
                <div class="blog-inner">
                    <div class="media"><a href="{{url('blog-right-sidebar')}}" class="image"><img
                                src="assets/images/blog/1000x700 (1).jpg" alt=""></a></div>
                    <div class="content">
                        <h3 class="title"><a href="{{url('blog-right-sidebar')}}">Blog post</a></h3>
                        <ul class="meta">
                            <li>By <a href="#" tabindex="0">admin</a></li>
                            <li>30 October 2016</li>
                        </ul>
                        <a class="btn" href="{{url('blog-right-sidebar')}}">Read more</a>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->
        </div>
    </div>
</div>
<!--Blog section end-->

<!--NewsLetter section start-->
<div
    class="newsLetter-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter-wrapper">
                    <p class="small-text">Special Ofers For Subscribers</p>
                    <h3 class="title">Ten Percent Member Discount</h3>
                    <p class="short-desc">Subscribe to our newsletters now and stay up to date with new
                        collections, the latest lookbooks and exclusive offers.</p>

                    <div class="newsletter-form">
                        <form id="mc-form" class="mc-form">
                            <input type="email" placeholder="Enter Your Email Address Here..." required>
                            <button type="submit" value="submit">SUBSCRIBE!</button>
                        </form>

                    </div>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--NewsLetter section end-->

@stop       