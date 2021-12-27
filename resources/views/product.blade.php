@extends('template')
@section('content')


<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="assets/images/bg/">
    <div class="container">

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Shop Section Start -->
<div class="shop-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area sb-border pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
                    <div class="row">
                        <div class="col-12">
                            <!-- Grid & List View Start -->
                            <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                <div class="grid-list-option d-flex">
                                    <p>Showing 1–9 of 41 results</p>
                                </div>
                                <!--Toolbar Short Area Start-->
                                
                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <!-- Single Sidebar Start  -->
                            <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Product categories</h3>
                                <ul class="sidebar-list">
                                    @php
                                    foreach($category as $row):
                                    @endphp
                                    <li><a href="#"><i class="ion-plus"></i> {{ $row->nama }}<span class="count">...</span></a></li>
                                    @php
                                    endforeach;
                                    @endphp
                                </ul>
                            </div>
                            <!-- Single Sidebar End  -->



                        </div>
                        <div class="col-lg-9 order-lg-2 order-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">
                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row">
                                                        @php
                                                        $no=1;
                                                        foreach($product as $row):
                                                        @endphp
                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-10">
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
                                                                    </a>
                                                                </div>

                                                                <div class="product-content">

                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">{{ $row->nama_kategori }}</a></span>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <h3 class="title"> <a>{{ $row->nama_product }}</a></h3>

                                                            </div>
                                                        </div>
                                                        @php
                                                        $no++;
                                                        endforeach;
                                                        @endphp    
                                                        <!--  Single Grid product End -->
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30 mb-sm-40 mb-xs-30">
                        <div class="col">
                            <ul class="page-pagination">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Section End -->

<!--NewsLetter section start-->
<div
    class="newsLetter-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="newsletter-wrapper">
                    
                    <p class="short-desc">Subscribe to our newsletters now and stay up to date with new collections, the latest lookbooks and exclusive offers.</p>

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