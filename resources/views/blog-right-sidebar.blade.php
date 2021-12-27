@extends('template')
@section('content')

<div class="single-post-tag">

</div>
<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="assets/images/bg/">
    <div class="container">

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Blog Section Start -->
<div class="blog-section section pt-10 pt-lg-8 pt-md-7 pt-sm-6 pt-xs-5">

    <div class="row">
        <div class="col-lg-3 order-lg-2 order-2">
            <!-- Single Sidebar Start  -->
            <div class="common-sidebar-widget">
                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-search">
                    <form action="#">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!-- Single Sidebar End  -->
            <!-- Single Sidebar Start  -->
            <div class="common-sidebar-widget">
                <h3 class="sidebar-title">Recent posts</h3>
                @php
                $no=1;
                foreach($data_recent_blog as $row):
                @endphp
                <div class="sidebar-blog">
                    <a href="{{url('blog-right-sidebar/'.$row->id_blog)}}">
                        @php
                        $batas = 1;
                        $jumlah_gambar=1;

                        foreach($gambar as $item):
                        if($item->id_blog == $row->id_blog):

                        if($jumlah_gambar <= $batas):
                        @endphp
                        <img src="{{ asset('storage/upload/'.$item->nama_file) }}"  alt="" style="width: 70px !important; height: 50px !important; padding-bottom: 5px !important; padding-top: 0px !important; padding-right: 10px"></a>
                    @php
                    endif;

                    $jumlah_gambar=$jumlah_gambar+1;
                    endif;
                    endforeach;
                    @endphp
                    <ul class="sidebar-list">

                        <h5 class="title"><a href="">{{ substr($row->judul, 0, 20) }}</a></h5>
                        <ul class="meta">
                            <span>By <a href="#" tabindex="0">{{ $row->penulis }}</a></span>

                        </ul>


                </div>
                @php
                endforeach;
                @endphp
            </div>
            <!-- Single Sidebar End  -->

        </div>
        <div class="col-lg-9 order-lg-1 order-1">
            <div class="row">
                <div class="col-12">
                    <!-- Single Blog List Start -->
                    <div class="blog-list mb-40">
                        @php
                        $no=1;
                        foreach($data_blog as $row):
                        @endphp
                        <div class="row mb-40">
                            <div class="col-md-5">
                                <div class="blog-image">

                                    <a href="{{url('blog-right-sidebar/'.$row->id_blog)}}">
                                        @php
                                        $batas = 1;
                                        $jumlah_gambar=1;

                                        foreach($gambar as $item):
                                        if($item->id_blog == $row->id_blog):

                                        if($jumlah_gambar <= $batas):
                                        @endphp

                                        <img src="{{ asset('storage/upload/'.$item->nama_file) }}"  alt="" style="width: 550px !important; height: 250px !important; padding-bottom: 15px !important; padding-top: 0px !important; padding-left: 30px"></a>

                                    @php
                                    endif;

                                    $jumlah_gambar=$jumlah_gambar+1;
                                    endif;
                                    endforeach;
                                    @endphp

                                    </a>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="blog-content">
                                    <a href="{{url('blog-details-gallery/')}}")}}"><img src="assets/images/blog/blog-details-1.jpg" alt=""></a>
                                    <ul class="sidebar-list">

                                        <h3 class="title"><a href="">{{ substr($row->judul, 0, 20) }}</a></h3>


                                        <ul class="meta">
                                            <li>By <a href="#" tabindex="0">{{ $row->penulis }}</a></li>

                                            <li>30 October 2018</li>
                                        </ul>

                                        <p>{{ substr($row->isi, 0, 250) }}...</p>
                                </div>
                            </div>
                        </div>
                        @php
                        endforeach;
                        @endphp
                    </div>

                    <!-- Single Blog List End -->
                </div>
                <div class="col-12">
                    <!-- Single Blog List Start -->
                    <div class="blog-list mb-40">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="blog-image">
                                    <div class="blog-gallery tf-element-carousel" data-slick-options='{
                                         "slidesToShow": 1,
                                         "slidesToScroll": 1,
                                         "infinite": true,
                                         "arrows": false,
                                         "autoplay": true
                                         }' data-slick-responsive='[
                                         {"breakpoint":768, "settings": {
                                         "slidesToShow": 1
                                         }},
                                         {"breakpoint":575, "settings": {
                                         "slidesToShow": 1
                                         }}
                                         ]'>
                                        <a href="{{url('blog-details-gallery/')}}")}}"><img src="assets/images/blog/blog-details-1.jpg" alt=""></a>
                                        <a href="{{url('blog-details-gallery/')}}")}}"><img src="assets/images/blog/blog-details-2.jpg" alt=""></a>
                                        <a href="{{url('blog-details-gallery/')}}")}}"><img src="assets/images/blog/blog-details-3.jpg" alt=""></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Blog List End -->
                </div>

            </div>
            <div class="row mb-0 mb-xs-35 mb-sm-35">
                <div class="col">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Blog Section End -->

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