<div class="col-lg-4 col-md-12">
    <div class="sidebar sidebar-right">
        <div class="widget color-default">
            <h3 class="block-title"><span>Các tin xem nhiều nhất</span></h3>
            <div class="post-overaly-style clearfix">
                <div class="post-thumb">
                    <a href="#">
                    <img class="img-fluid" src="frontend/images/news/lifestyle/health4.jpg" alt="" />
                    </a>
                </div>
                <div class="post-content">
                    <a class="post-cat" href="#">Health</a>
                    <h2 class="post-title title-small">
                        <a href="{{ route('detail',$new->new_id)}}">{!! $new->new_title !!}</a>
                    </h2>
                    <div class="post-meta">
                        <span class="post-date">{!! $new->created_at !!}</span>
                    </div>
                </div>
                <!-- Post content end -->
            </div>
            <!-- Post Overaly Article end -->
            <div class="list-post-block">
                <ul class="list-post">

                    @foreach($new_k as $new)
                    <li class="clearfix">
                        <div class="post-block-style post-float clearfix">
                            <div class="post-thumb">
                                <a href="#">
                                <img class="img-fluid" src="frontend/images/news/tech/gadget3.jpg" alt="" />
                                </a>
                                <a class="post-cat" href="#">Gadgets</a>
                            </div>
                            <!-- Post thumb end -->
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <a href="#">{!! $new->new_title !!}</a>
                                </h2>
                                <div class="post-meta">
                                    <span class="post-date">Mar 13, 2017</span>
                                </div>
                            </div>
                            <!-- Post content end -->
                        </div>
                        <!-- Post block style end -->
                    </li>
                    <!-- Li 1 end -->
                    @endforeach
                    <!-- Li 4 end -->
                </ul>
                <!-- List post end -->
            </div>
            <!-- List post block end -->
        </div>
        <!-- Popular news widget end -->
        <div class="widget text-center">
            <img class="banner img-fluid" src="frontend/images/banner-ads/ad-sidebar.png" alt="" />
        </div>
        <!-- Sidebar Ad end -->
        <div class="widget m-bottom-0">
            <h3 class="block-title"><span>Nhập Email để nhận ngay khuyến mãi</span></h3>
            <div class="ts-newsletter">
                <div class="newsletter-introtext">
                    <h4>Khuyến mãi hot  </h4>
                    <p>Chương trình khuyến mãi nhận ngay thẻ cào 200k</p>
                </div>
                <div class="newsletter-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                            <button class="btn btn-primary">Đăng ký ngay</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Newsletter end -->
        </div>
        <!-- Newsletter widget end -->
    </div>
    <!-- Sidebar right end -->
</div>
