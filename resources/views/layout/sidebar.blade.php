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




          <div class="list-post-block">
              <ul class="list-post">
                @foreach($new_hot as $new)

                  <li class="clearfix">
                      <div class="post-block-style post-float clearfix">
                          <div class="post-thumb">
                              <a href="#">
                                  <img class="img-fluid" src="{{ pare_url_file($new->new_image, 'news') }}" alt="" style="width:150px; height:90px;" />
                              </a>
                              <a class="post-cat" href="#">Soi kèo</a>
                          </div><!-- Post thumb end -->

                          <div class="post-content">
                              <h2 class="post-title title-small">
                                  <a href="#">{!!$new-> new_title!!}</a>
                              </h2>
                              <div class="post-meta">
                                  <span class="post-date">Ngày đăng: {!!$new-> created_at!!}</span>
                              </div>
                          </div><!-- Post content end -->
                      </div><!-- Post block style end -->
                  </li><!-- Li 2 end -->

                @endforeach

              </ul><!-- List post end -->
          </div><!-- List post block end -->

      </div><!-- Popular news widget end -->

      <div class="widget text-center">
        @foreach($adverts_center as $key => $ads_center)
          <img class="banner img-fluid" src="{{ pare_url_file($ads_center->img, 'images_bn') }}" alt="" />
        @endforeach

      </div><!-- Sidebar Ad end -->

      <div class="widget color-default m-bottom-0">
          <h3 class="block-title"><span>Tin xem nhiều nhất</span></h3>

          <div id="post-slide" class="owl-carousel owl-theme post-slide">

              <div class="item">
             @foreach($new_views as $new)


              <div class="post-overaly-style text-center clearfix">
             <div class="post-thumb">
             <a href="#">
              <img class="img-fluid" src="{{ pare_url_file($new->new_image, 'news') }}" alt="" style="width:328px; height:300px;" />
              </a>
               </div><!-- Post thumb end -->

               <div class="post-content">

               <h2 class="post-title">
               <a href="{{route('detail',$new->new_id)}}">{!! $new-> new_title !!}</a>
              </h2>
               <div class="post-meta">
                   <span class="post-date">Ngày đăng: {!! $new-> created_at !!}</span><br>
                  <span class="post-date">Lượt xem: {!! $new-> new_view !!}</span>
              </div>
               </div><!-- Post content end -->
               </div><!-- Post Overaly Article 3 end -->

              @endforeach
              </div><!-- Item 2 end -->

          </div><!-- Post slide carousel end -->

      </div><!-- Trending news end -->

  </div><!-- Sidebar right end -->
</div><!-- Sidebar Col end -->
