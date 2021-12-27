
@extends('template')
@section('content')
<!--Blog Post Tag-->
<div class="single-post-tag">

</div>
<!--Blog Post Tag-->
<!-- Blog Section Start -->
<div class="blog-section section pt-10 pt-lg-10 pt-md-70 pt-sm-50 pt-xs-40">
    <div class="container sb-border pb-10 pb-lg-60 pb-md-50 pb-sm-60 pb-xs-50">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
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
                    <div class="sidebar-blog">
                        <a href="{{url('blog-details-gallery')}}" class="image"><img src="{ asset('assets/images/rc-post/blog1.jpg')}}" alt=""></a>
                        <div class="content">
                            <h5><a href="{{url('blog-details-gallery')}}">Blog image post (sticky)</a></h5>
                            <span>April 24, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <a href="{{url('blog-details-gallery')}}" class="image"><img src="assets/images/rc-post/blog-detailss-1.jpg" alt=""></a>
                        <div class="content">
                            <h5><a href="{{url('blog-details-gallery')}}">Post with Gallery</a></h5>
                            <span>April 24, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <a href="{{url('blog-details-gallery')}}" class="image"><img src="assets/images/rc-post/blog3.jpg" alt=""></a>
                        <div class="content">
                            <h5><a href="{{url('blog-details-gallery')}}">Post with Audio</a></h5>
                            <span>April 24, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-blog">
                        <a href="{{url('blog-details-gallery')}}" class="image"><img src="assets/images/rc-post/blog4.jpg" alt=""></a>
                        <div class="content">
                            <h5><a href="{{url('blog-details-gallery')}}">Post with Video</a></h5>
                            <span>April 24, 2018</span>
                        </div>
                    </div>
                </div>
                <!-- Single Sidebar End  -->

                <!-- Single Sidebar Start  -->
                <div class="common-sidebar-widget">
                    <h3 class="sidebar-title">Categories</h3>
                    <ul class="sidebar-list">
                        <li><a href="#"><i class="ion-plus"></i>Accessories <span class="count">(14)</span></a></li>
                        <li><a href="#"><i class="ion-plus"></i>Decor <span class="count">(14)</span></a></li>

                    </ul>
                </div>
                <!-- Single Sidebar End  -->

            </div>
            <div class="col-lg-9 mb-sm-40 mb-xs-30">
                <div class="blog_area">
                    <article class="blog_single blog-details">
                        <header class="entry-header">
                           
                            <span class="post-author">
                                <span class="post-by"> Posts by : </span> admin </span>
                            <span class="post-separator">|</span>
                            <span class="post-date"><i class="fas fa-calendar-alt"></i>On March 10, 2018 </span>
                        </header>
                        <div class="post-gallery tf-element-carousel" data-slick-options='{
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
                            <img src="{{ asset('assets/images/blog/blog-detailss-1.jpg')}}" alt="">
                            <img src="{{ asset('assets/images/blog/NA1039-01.jpg')}}" alt="">

                        </div>
                        <div class="postinfo-wrapper">
                            <div class="post-info">
                                <div class="entry-summary blog-post-description">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
                                    <blockquote><p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p></blockquote>
                                    <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                    <!--Blog Post Tag-->
                                    <div class="single-post-tag">

                                    </div>
                                    <!--Blog Post Tag-->
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title">Share this post</h3>
                                            <ul class="blog-social-icons">
                                                <li>
                                                    <a target="_blank" title="Facebook" href="#" class="facebook social-icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" title="twitter" href="#" class="twitter social-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" title="pinterest" href="#" class="pinterest social-icon">
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" title="linkedin" href="#" class="linkedin social-icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="relatedposts">
                        <h3>Related posts</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="relatedthumb mb-xs-30">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/blog-details-1.jpg" alt=""></a>
                                    </div>
                                    <h4><a href="#">Post with Gallery</a></h4>
                                    <span class="rl-post-date">December 1, 2018</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="relatedthumb mb-xs-30">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/blog-details-2.jpg" alt=""></a>
                                    </div>
                                    <h4><a href="#">Post with Gallery</a></h4>
                                    <span class="rl-post-date">December 1, 2018</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="relatedthumb mb-xs-30">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/blog-details-3.jpg" alt=""></a>
                                    </div>
                                    <h4><a href="#">Post with Gallery</a></h4>
                                    <span class="rl-post-date">December 1, 2018</span>
                                </div>
                            </div>
                        </div>
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
          
                    <p class="short-desc">Subscribe to our newsletters now and stay up to date with new collections,
                        the latest lookbooks and exclusive offers.</p>

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