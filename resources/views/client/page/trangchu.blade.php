@extends('layout.master')
@section('content')
<div class="trending-light d-md-block d-lg-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="trending-title">Tin mới nhất</h3>
                <div id="trending-slide" class="owl-carousel owl-theme trending-slide">
                    @if($new_lasted)
                        @foreach($new_lasted as $new)
                            <div class="item">
                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <a href="#">{{ $new->new_title }}</a>
                                    </h2>
                                </div>
                                <!-- Post content end -->
                            </div>
                        @endforeach
                    @endif
                    <!-- Item 1 end -->
                   
                </div>
                <!-- Carousel end -->
            </div>
            <!-- Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
</div>
<!--/ Trending end -->
<section class="featured-post-area no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 pad-r">
                <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                    @if($new_lasted)
                        @foreach($new_lasted as $new)
                            <div class="item" style="background-image:url({{ pare_url_file($new->new_image, 'news') }})">
                                <div class="featured-post">
                                    <div class="post-content">
                                        <a class="post-cat" >{{ $new->category->cat_name }}</a>
                                        <h2 class="post-title title-extra-large">
                                            <a href="{{ route('') }}">{{ $new->new_title }}</a>
                                        </h2>
                                        <span class="post-date">{{ $new->created_at }}</span>
                                    </div>
                                </div>
                                <!--/ Featured post end -->
                            </div>
                            <!-- Item 1 end -->
                        @endforeach
                    @endif



                   
                </div>
                <!-- Featured owl carousel end-->
            </div>
            <!-- Col 6 end -->
            <div class="col-lg-6 col-md-12 pad-l">
                <div class="row">
                    <div class="col-md-6 pad-r-small">
                        <div class="post-overaly-style contentTop fourNewsboxTop clearfix">
                            <div class="post-thumb">
                                <a href="#"><img class="img-fluid" src="frontend/images/news/tech/gadget2.jpg" alt="" /></a>
                            </div>
                            <div class="post-content">
                                <a class="post-cat" href="#">Nhận định</a>
                                <h2 class="post-title title-medium">
                                    <a href="#">LA Galaxy vs Dallas, 09h30 ngày 15/8…</a>
                                </h2>
                            </div>
                            <!-- Post content end -->
                        </div>
                        <!-- Post Overaly end -->
                    </div>
                   
                    <!-- Col end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Col 6 end -->
        </div>
        <!-- Row end -->
    </div>
    <!-- Container end -->
</section>
<!-- Trending post end -->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!--- Featured Tab startet -->
                <div class="featured-tab color-blue">
                    <h3 class="block-title"><span>Xổ số</span></h3>
                    <ul class="nav nav-tabs">
                        <li>
                            <a class="active animated fadeIn" href="#tab_a" data-toggle="tab">
                            <span class="tab-head">
                            <span class="tab-text-title">Miền Bắc</span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                            <span class="tab-head">
                            <span class="tab-text-title">Miền Trung</span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                            <span class="tab-head">
                            <span class="tab-text-title">Miền Nam</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                            <img class="img-fluid" src="frontend/images/news/tech/gadget1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Xổ số</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Kết quả xổ số hôm nay</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">Admin</a></span>
                                                <span class="post-date">13 tháng 08, 2019</span>
                                            </div>
                                            <p>abcdefgh</p>
                                        </div>
                                        <!-- Post content end -->
                                    </div>
                                    <!-- Post Block style end -->
                                </div>
                                <!-- Col end -->
                                <div class="col-md-6">
                                    <div class="list-post-block">
                                        <ul class="list-post">
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget2.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 12/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">12 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 1 end -->
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget3.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 11/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">11 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 2 end -->
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget4.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 10/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">10 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 3 end -->
                                        </ul>
                                        <!-- List post end -->
                                    </div>
                                    <!-- List post block end -->
                                </div>
                                <!-- List post Col end -->
                            </div>
                            <!-- Tab pane Row 1 end -->
                        </div>
                        <!-- Tab pane 1 end -->
                        <div class="tab-pane animated fadeInRight" id="tab_b">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                            <img class="img-fluid" src="frontend/images/news/tech/game1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Xổ số</a>
                                                                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Kết quả xổ số hôm nay</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">Admin</a></span>
                                                <span class="post-date">13 tháng 08, 2019</span>
                                            </div>
                                            <p>abcdefgh</p>
                                        </div>
                                        <!-- Post content end -->
                                    </div>
                                    <!-- Post Block style end -->
                                </div>
                                <!-- Col end -->
                                <div class="col-md-6">
                                    <div class="list-post-block">
                                        <ul class="list-post">
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget2.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 12/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">12 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 1 end -->
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget3.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 11/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">11 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 2 end -->
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget4.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="#">Kết quả xổ số ngày 10/08/2019</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">10 tháng 8, 2019</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 3 end -->
                                        </ul>
                                        <!-- List post end -->
                                    </div>
                                    <!-- List post block end -->
                                </div>
                                <!-- List post Col end -->
                            </div>
                            <!-- Tab pane Row 2 end -->
                        </div>
                        <!-- Tab pane 2 end -->
                        <div class="tab-pane animated fadeInLeft" id="tab_c">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                            <img class="img-fluid" src="frontend/images/news/tech/robot1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Xổ số</a>
                                                                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Kết quả xổ số hôm nay</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">Admin</a></span>
                                                <span class="post-date">13 tháng 08, 2019</span>
                                            </div>
                                            <p>abcdefgh</p>
                                        </div>
                                        <!-- Post content end -->
                                    </div>
                                    <!-- Post Block style end -->
                                </div>
                                <!-- Col end -->
                                                                        <div class="col-md-6">
                                                                                <div class="list-post-block">
                                                                                        <ul class="list-post">
                                                                                                <li class="clearfix">
                                                                                                        <div class="post-block-style post-float clearfix">
                                                                                                                <div class="post-thumb">
                                                                                                                        <a href="#">
                                                                                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget2.jpg" alt="" />
                                                                                                                        </a>
                                                                                                                </div>
                                                                                                                <!-- Post thumb end -->
                                                                                                                <div class="post-content">
                                                                                                                        <h2 class="post-title title-small">
                                                                                                                                <a href="#">Kết quả xổ số ngày 12/08/2019</a>
                                                                                                                        </h2>
                                                                                                                        <div class="post-meta">
                                                                                                                                <span class="post-date">12 tháng 8, 2019</span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                <!-- Post content end -->
                                                                                                        </div>
                                                                                                        <!-- Post block style end -->
                                                                                                </li>
                                                                                                <!-- Li 1 end -->
                                                                                                <li class="clearfix">
                                                                                                        <div class="post-block-style post-float clearfix">
                                                                                                                <div class="post-thumb">
                                                                                                                        <a href="#">
                                                                                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget3.jpg" alt="" />
                                                                                                                        </a>
                                                                                                                </div>
                                                                                                                <!-- Post thumb end -->
                                                                                                                <div class="post-content">
                                                                                                                        <h2 class="post-title title-small">
                                                                                                                                <a href="#">Kết quả xổ số ngày 11/08/2019</a>
                                                                                                                        </h2>
                                                                                                                        <div class="post-meta">
                                                                                                                                <span class="post-date">11 tháng 8, 2019</span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                <!-- Post content end -->
                                                                                                        </div>
                                                                                                        <!-- Post block style end -->
                                                                                                </li>
                                                                                                <!-- Li 2 end -->
                                                                                                <li class="clearfix">
                                                                                                        <div class="post-block-style post-float clearfix">
                                                                                                                <div class="post-thumb">
                                                                                                                        <a href="#">
                                                                                                                        <img class="img-fluid" src="frontend/images/news/tech/gadget4.jpg" alt="" />
                                                                                                                        </a>
                                                                                                                </div>
                                                                                                                <!-- Post thumb end -->
                                                                                                                <div class="post-content">
                                                                                                                        <h2 class="post-title title-small">
                                                                                                                                <a href="#">Kết quả xổ số ngày 10/08/2019</a>
                                                                                                                        </h2>
                                                                                                                        <div class="post-meta">
                                                                                                                                <span class="post-date">10 tháng 8, 2019</span>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                <!-- Post content end -->
                                                                                                        </div>
                                                                                                        <!-- Post block style end -->
                                                                                                </li>
                                                                                                <!-- Li 3 end -->
                                                                                        </ul>
                                                                                        <!-- List post end -->
                                                                                </div>
                                                                                <!-- List post block end -->
                                                                        </div>
                                <!-- List post Col end -->
                            </div>
                            <!-- Tab pane Row 3 end -->
                        </div>
                        <!-- Tab pane 3 end -->
                    </div>
                    <!-- tab content -->
                </div>
                <!-- Technology Tab end -->
                <div class="gap-40"></div>
                                        <div class="block color-orange">
                                            <h3 class="block-title"><span>Soi kèo - Nhận định bóng đá</span></h3>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="post-overaly-style clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="frontend/images/news/lifestyle/travel1.jpg" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="post-content">
                                                            <a class="post-cat" href="#">Soi kèo</a>
                                                            <h2 class="post-title">
                                                                <a href="#">Soi kèo tài xỉu trận Ajax vs PAOK ,01h30 ngày 14/08(Vòng sơ loại C1)...</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">13 tháng 8, 2019</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article end -->

                                                    <div class="list-post-block">
                                                        <ul class="list-post">
                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/food1.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Soi kèo</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Soi kèo tài xỉu trận Dinamo Kyiv vs Club Brugge, 23h30 ngày 13/08 (Vòng sơ loại C1) </a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 1 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/health1.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Soi kèo</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Soi kèo tài xỉu trận Rosenborg vs Maribor, 00h00 ngày 14/08 (Vòng sơ loại C1)…</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 2 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/travel2.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Soi kèo</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Soi kèo tài xỉu trận Hansa Rostock vs Stuttgart, 23h30 ngày 12/08 (Cúp QG Đức)  …</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 3 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/architecture2.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Soi kèo</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Soi kèo tài xỉu trận Cottbus vs Bayern Munich, 01h45 ngày 13/08 (Cúp QG Đức)  …</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 4 end -->

                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                                </div><!-- Col 1 end -->
                                                <div class="col-md-6">
                                                    <div class="post-overaly-style last clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-fluid" src="frontend/images/news/lifestyle/architecture3.jpg" alt="" />
                                                            </a>
                                                        </div>

                                                        <div class="post-content">
                                                            <a class="post-cat" href="#">Nhận định</a>
                                                            <h2 class="post-title">
                                                                <a href="#">Kobenhavn vs Crvena Zvezda, 01h00 ngày 14/08</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">13 tháng 8, 2019</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article end -->

                                                    <div class="list-post-block">
                                                        <ul class="list-post">
                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/health2.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Nhận định</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Ajax vs PAOK Saloniki, 01h30 ngày 14/8</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 1 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/food2.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Nhận định</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Porto vs Krasnodar, 02h00 ngày 14/8…</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 2 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/architecture1.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Nhận định</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Rosenborg vs Maribor, 00h00 ngày 14/8…</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 3 end -->

                                                            <li class="clearfix">
                                                                <div class="post-block-style post-float clearfix">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid" src="frontend/images/news/lifestyle/travel5.jpg" alt="" />
                                                                        </a>
                                                                        <a class="post-cat" href="#">Nhận định</a>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content">
                                                                        <h2 class="post-title title-small">
                                                                            <a href="#">Dynamo Kyiv vs Club Brugge, 00h30 ngày 14/8 …</a>
                                                                        </h2>
                                                                        <div class="post-meta">
                                                                            <span class="post-date">13 tháng 8, 2019</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div><!-- Post block style end -->
                                                            </li><!-- Li 4 end -->

                                                        </ul><!-- List post end -->
                                                    </div><!-- List post block end -->
                                                </div><!-- Col 2 end -->
                                            </div><!-- Row end -->
                                        </div><!-- Block Lifestyle end -->
                <div class="gap-50"></div>


                                        <div class="latest-news block color-red">
                                            <h3 class="block-title"><span>Game bài online</span></h3>

                                            <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                                                <div class="item">
                                                    <ul class="list-post">
                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/health5.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">LÔ ĐỀ ONLINE...</a>
                                                                    </h2>
                                                                    <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->

                                                        <div class="gap-30"></div>

                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel4.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">CÁ CƯỢC THỂ THAO…</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->
                                                    </ul><!-- List post 1 end -->

                                                </div><!-- Item 1 end -->

                                                <div class="item">

                                                    <ul class="list-post">
                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel5.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">ĐÁNH BÀI ONLINE…</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->

                                                        <div class="gap-30"></div>

                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/health4.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">CÁ CƯỢC THỂ THAO...</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->
                                                    </ul><!-- List post 2 end -->

                                                </div><!-- Item 2 end -->

                                                <div class="item">

                                                    <ul class="list-post">
                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/tech/gadget2.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">ĐÁNH BÀI ONLINE...</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->

                                                        <div class="gap-30"></div>

                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/architecture3.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">LÔ ĐỀ ONLINE…</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->
                                                    </ul><!-- List post 3 end -->

                                                </div><!-- Item 3 end -->

                                                <div class="item">
                                                    <ul class="list-post">
                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#">
                                                                        <img class="img-fluid" src="frontend/images/news/lifestyle/food3.jpg" alt="" />
                                                                    </a>
                                                                </div>
                                                                <a class="post-cat" href="#">Game</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">CÁ CƯỢC THỂ THAO…</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->

                                                        <div class="gap-30"></div>

                                                        <li class="clearfix">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#">
                                                                        <img class="img-fluid" src="frontend/images/news/tech/game1.jpg" alt="" />
                                                                    </a>
                                                                </div>
                                                                <a class="post-cat" href="#">Games</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-medium">
                                                                        <a href="#">ĐÁNH BÀI ONLINE...</a>
                                                                    </h2>
                              <div class="post-meta">
                                                                        <span class="post-author"><a href="#">Admin</a></span>
                                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </li><!-- Li end -->
                                                    </ul><!-- List post 4 end -->

                                                </div><!-- Item 4 end -->
                                            </div><!-- Latest News owl carousel end-->
                                        </div><!--- Latest news end -->
            </div>
            <!-- Content Col end -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="sidebar sidebar-right">
                                        <div class="widget">
                                            <h3 class="block-title"><span>Theo dõi chúng tôi</span></h3>

                                            <ul class="social-icon">
                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div><!-- Widget Social end -->

                                        <div class="widget m-bottom-0">
                                            <h3 class="block-title"><span>Đăng ký nhận ngay khuyến mãi Hot</span></h3>
                                            <div class="ts-newsletter">
                                                <div class="newsletter-introtext">
                                                    <p>Đăng ký ngay để nhận được khuyễn mãi Hot hàng ngày lên đến 30%!</p>
                                                </div>

                                                <div class="newsletter-form">
                                                    <form action="#" method="post">
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                                            <button class="btn btn-primary">Đăng ký</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- Newsletter end -->
                                        </div><!-- Newsletter widget end -->

                                        <div class="widget color-default">
                                            <h3 class="block-title"><span>Tin nổi bật</span></h3>

                                            <div class="post-overaly-style clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-fluid" src="frontend/images/news/lifestyle/health4.jpg" alt="" />
                                                    </a>
                                                </div>

                                                <div class="post-content">
                                                    <a class="post-cat" href="#">Xổ số</a>
                                                    <h2 class="post-title">
                                                        <a href="#">Kết quả xổ số hôm nay…</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-date">15 tháng 8 , 2019</span>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post Overaly Article end -->


                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                    <li class="clearfix">
                                                        <div class="post-block-style post-float clearfix">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="frontend/images/news/tech/gadget3.jpg" alt="" />
                                                                </a>
                                                                <a class="post-cat" href="#">Games</a>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="#">LÔ ĐỀ ONLINE…</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 1 end -->

                                                    <li class="clearfix">
                                                        <div class="post-block-style post-float clearfix">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="frontend/images/news/lifestyle/travel5.jpg" alt="" />
                                                                </a>
                                                                <a class="post-cat" href="#">Soi kèo</a>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="#">Soi kèo tài xỉu trận Dinamo Kyiv vs Club Brugge, 23h30 ngày 13/08 (Vòng sơ loại C1)</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 2 end -->

                                                    <li class="clearfix">
                                                        <div class="post-block-style post-float clearfix">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="frontend/images/news/tech/robot5.jpg" alt="" />
                                                                </a>
                                                                <a class="post-cat" href="#">Nhận định</a>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="#">Kobenhavn vs Crvena Zvezda, 01h00 ngày 14/08</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->

                                                    <li class="clearfix">
                                                        <div class="post-block-style post-float clearfix">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="frontend/images/news/lifestyle/food1.jpg" alt="" />
                                                                </a>
                                                                <a class="post-cat" href="#">Soi kèo</a>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content">
                                                                <h2 class="post-title title-small">
                                                                    <a href="#">Soi kèo tài xỉu trận Cottbus vs Bayern Munich, 01h45 ngày 13/08 (Cúp QG Đức)…</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 4 end -->

                                                </ul><!-- List post end -->
                                            </div><!-- List post block end -->

                                        </div><!-- Popular news widget end -->

                                        <div class="widget text-center">
                                            <img class="banner img-fluid" src="frontend/images/banner-ads/ad-sidebar.png" alt="" />
                                        </div><!-- Sidebar Ad end -->

                                        <div class="widget color-default m-bottom-0">
                                            <h3 class="block-title"><span>Tin xem nhiều nhất</span></h3>

                                            <div id="post-slide" class="owl-carousel owl-theme post-slide">
                                                <div class="item">
                                                    <div class="post-overaly-style text-center clearfix">
                                                         <div class="post-thumb">
                                                                <a href="#">
                                                                     <img class="img-fluid" src="frontend/images/news/tech/gadget1.jpg" alt="" />
                                                                </a>
                                                         </div><!-- Post thumb end -->

                                                         <div class="post-content">
                                                                <a class="post-cat" href="#">Soi kèo</a>
                                                                <h2 class="post-title">
                                                                     <a href="#">Soi kèo tài xỉu trận Cottbus vs Bayern Munich, 01h45 ngày 13/08 (Cúp QG Đức)…</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                     <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                         </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article 1 end -->

                                                    <div class="post-overaly-style text-center clearfix">
                                                         <div class="post-thumb">
                                                                <a href="#">
                                                                     <img class="img-fluid" src="frontend/images/news/video/video1.jpg" alt="" />
                                                                </a>
                                                         </div><!-- Post thumb end -->

                                                         <div class="post-content">
                                                                <a class="post-cat" href="#">Games</a>
                                                                <h2 class="post-title">
                                                                     <a href="#">ĐÁNH BÀI ONLINE……</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                     <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                         </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article 2 end -->

                                                </div><!-- Item 1 end -->

                                                <div class="item">

                                                    <div class="post-overaly-style text-center clearfix">
                                                         <div class="post-thumb">
                                                                <a href="#">
                                                                     <img class="img-fluid" src="frontend/images/news/lifestyle/health5.jpg" alt="" />
                                                                </a>
                                                         </div><!-- Post thumb end -->

                                                         <div class="post-content">
                                                                <a class="post-cat" href="#">Nhận định</a>
                                                                <h2 class="post-title">
                                                                     <a href="#">Rosenborg vs Maribor, 00h00 ngày 14/8…</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                     <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                         </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article 3 end -->

                                                    <div class="post-overaly-style text-center clearfix">
                                                         <div class="post-thumb">
                                                                <a href="#">
                                                                     <img class="img-fluid" src="frontend/images/news/tech/robot1.jpg" alt="" />
                                                                </a>
                                                         </div><!-- Post thumb end -->

                                                         <div class="post-content">
                                                                <a class="post-cat" href="#">Xổ số</a>
                                                                <h2 class="post-title">
                                                                     <a href="#">Kết quả xổ số hôm nay</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                     <span class="post-date">15 tháng 8 , 2019</span>
                                                                </div>
                                                         </div><!-- Post content end -->
                                                    </div><!-- Post Overaly Article 4 end -->

                                                </div><!-- Item 2 end -->

                                            </div><!-- Post slide carousel end -->

                                        </div><!-- Trending news end -->

                                    </div><!-- Sidebar right end -->
                                </div><!-- Sidebar Col end -->
            </div>
        <!-- Row end -->
    </div>
    <!-- Container end -->
</section>
<!-- First block end -->
<section class="ad-content-area text-center no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="frontend/images/banner-ads/ad-content-one.jpg" alt="" />
            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Ad content top end -->

<section class="block-wrapper">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-12">
                <div class="block color-dark-blue">
                    <h3 class="block-title"><span>LÔ ĐỀ ONLINE</span></h3>
                    <div class="post-overaly-style clearfix">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="img-fluid" src="frontend/images/news/lifestyle/travel1.jpg" alt="" />
                            </a>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">Win2888 là nhà cái lô đề online có tỉ lệ ăn và chi chả hoa hồng cao nhất thị trường hiện nay với đa dạng các hình thức lô đề…</a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">14 tháng 8 , 2019</span>
                            </div>
                        </div><!-- Post content end -->
                    </div><!-- Post Overaly Article end -->
                </div><!-- Block end -->
            </div><!-- Travel Col end -->

            <div class="col-lg-4 col-md-12">
                <div class="block color-aqua">
                    <h3 class="block-title"><span>CÁ CƯỢC THỂ THAO</span></h3>
                    <div class="post-overaly-style clearfix">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="img-fluid" src="frontend/images/news/tech/gadget1.jpg" alt="" />
                            </a>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">Nhà cái Win2888 có đa dạng và đầy đủ số lượng kèo ở tất cả các bộ môn, giải đấu lớn trong lĩnh vực cá cược thể thao </a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">14 tháng 08 , 2019</span>
                            </div>
                        </div><!-- Post content end -->
                    </div><!-- Post Overaly Article end -->
                </div><!-- Block end -->
            </div><!-- Gadget Col end -->

            <div class="col-lg-4 col-md-12">
                <div class="block color-violet">
                    <h3 class="block-title"><span>ĐÁNH BÀI ONLINE</span></h3>
                    <div class="post-overaly-style clearfix">
                        <div class="post-thumb">
                            <a href="#">
                                <img class="img-fluid" src="frontend/images/news/lifestyle/health1.jpg" alt="" />
                            </a>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="#">Nhà cái Win2888 với hệ thống camera hiện đại cùng cá Dealer chuyên nghiệp, xinh đẹp được đào tạo theo chuẩn Quốc tế …</a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">14 tháng 08 , 2019</span>
                            </div>
                        </div><!-- Post content end -->
                    </div><!-- Post Overaly Article end -->
                </div><!-- Block end -->
            </div><!-- Health Col end -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- 2nd block end -->

@endsection
