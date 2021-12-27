
@extends('template')
@section('content')

<div class="single-post-tag">

</div>
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

                    <li class="menu-item-has-children"><a href="#">Product</a>
                    <li class="menu-item-has-children"><a href="{{url('about')}}">About Us</a>
                    </li>
                    <li class="menu-item-has-children"><a href="{{url('contact')}}">Contact Us</a>
                    </li>

                </ul>
            </nav>

            <div class="offcanvas-settings">

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

<!-- Single Product Section Start -->
<div class="single-product-section section pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area">
                    <div class="row">
                        <div class="col-md-6">
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
                                    @php
                                    foreach($detail_gambar as $row):
                                    @endphp
                                    <div class="lg-image">

                                        <img src="{{asset('storage/upload/'.$row->nama_file)}}" alt="" width="100px" height="400px"
                                             class="" data-gall="myGallery"><i
                                             class=""></i></a>

                                    </div>
                                    @php
                                    endforeach;
                                    @endphp
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
                                    @php
                                    foreach($detail_gambar as $row):
                                    @endphp
                                    <div class="sm-image"><img src="{{asset('storage/upload/'.$row->nama_file)}}"
                                                               alt="product image thumb" width="150px" height="100px"></div>
                                    @php
                                    endforeach;
                                    @endphp
                                </div>
                            </div>

                            <!--Product Details Left -->
                        </div>
                        <div class="col-md-6">
                            <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <!--Product Nav Start-->

                                <!--Product Nav End-->

                                <h2>{{ $detail_product->nama }}</h2>
                                <div class="product-description">
                                    <p>{{ $detail_product->deskripsi }}</p>
                                </div>

                                </form>
                            </div>

                            <div class="product-meta">
                                <span class="posted-in">
                                    Categories:
                                    <a href="#">{{ $detail_product->nama }}</a>,

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
<!-- Single Product Section End -->


<!--Review And Description Tab Content End-->
</div>
</div>
</div>
</div>
</div>
<!--Product Description Review Section Start-->

<!--Product section start-->
<div
    class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-55 pb-xs-45">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section-title st-border mb-20 pt-20">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="product-slider tf-element-carousel" data-slick-options='{
             "slidesToShow": 4,
             "slidesToScroll": 1,
             "infinite": true,
             "arrows": true,
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
            @php
            $no=1;
            foreach($product as $row):
            @endphp

            <div class="col">
                <!--  Single Grid product Start -->
                <div class="single-grid-product">
                    <div class="product-image">
                        <a href="{{url('single-product/'.$row->id_product)}}">
                            @php
                            $batas = 2;
                            $jumlah_gambar=1;

                            foreach($gambar as $item):
                            if($item->id_product == $row->id_product):

                            if($jumlah_gambar <= $batas):
                            @endphp

                            <img src="{{ asset('storage/upload/'.$item->nama_file) }}"  class="img-fluid" alt="" style="width: 300px !important; height: 250px !important;  "/>

                            @php
                            endif;

                            $jumlah_gambar=$jumlah_gambar+1;
                            endif;
                            endforeach;
                            @endphp

                    </div>
                    <div class="product-content">
                        <span class="category"><a href="{{url('product')}}">{{ $row->nama_kategori }}</a></span>
                        <h3 class="title"><a href="">{{ $row->nama_product }}</a></h3>      
                    </div>
                </div>
                <!--  Single Grid product End -->
            </div>


            @php
            $no++;
            endforeach;
            @endphp
        </div>
    </div>
</div>


<!--Product section end-->

<!--NewsLetter section start-->
<div
    class="newsLetter-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter-wrapper">
                    <p class="small-text">Special Ofers For Subscribers</p>

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