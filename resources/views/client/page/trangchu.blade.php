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
                                            <a href="{{route('detail',$new->new_id)}}">{{ $new->new_title }}</a>
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
                    <h3 class="block-title"><span>{{$menus[0]}}</span></h3>
                      <ul class="nav nav-tabs">
                        @for($i = 1; $i < count($menus); $i++)
                        @if($menus[$i])
                          <li>
                              <a class="active animated" href="#tab_a" data-toggle="tab">
                              <span class="tab-head">
                              <span class="tab-text-title">{{$menus[$i]}}</span>
                              </span>
                              </a>
                          </li>
                        @endif
                        @endfor
                      </ul>
                    <div class="tab-content">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                            <img class="img-fluid" src="{{pare_url_file($posts[0]['new_image'],'news')}}" alt="" />
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Xổ số</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="{{route('detail',$posts[0]->new_id)}}">{{$posts[0]['new_title']}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">Admin</a></span>
                                                <span class="post-date">{{$posts[0]['created_at']}}</span>
                                            </div>
                                            <p>{{$posts[0]['new_description']}}</p>
                                        </div>
                                        <!-- Post content end -->
                                    </div>
                                    <!-- Post Block style end -->
                                </div>
                                <!-- Col end -->
                                <div class="col-md-6">
                                    <div class="list-post-block">
                                        <ul class="list-post">
                                          @for($i = 1 ; $i < count($posts); $i++)
                                          @if($i)
                                            <li class="clearfix">
                                                <div class="post-block-style post-float clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                        <img class="img-fluid" src="{{pare_url_file($posts[$i]['new_image'],'news')}}" height="150px" alt="" />
                                                        </a>
                                                    </div>
                                                    <!-- Post thumb end -->
                                                    <div class="post-content">
                                                        <h2 class="post-title title-small">
                                                            <a href="{{route('detail',$posts[$i]->new_id)}}">{{$posts[$i]['new_title']}}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-date">{{$posts[$i]['created_at']}}</span>
                                                        </div>
                                                    </div>
                                                    <!-- Post content end -->
                                                </div>
                                                <!-- Post block style end -->
                                            </li>
                                            <!-- Li 1 end -->
                                            @endif
                                          @endfor
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
                    </div>
                    <!-- tab content -->
                </div>
                <!-- Technology Tab end -->
                <div class="gap-40"></div>

                <div class="block color-orange">
                    <h3 class="block-title"><span>{{$menus_soikeo[0]}}</span></h3>
                    <div class="row">
                      @for($i=1 ; $i < count($menus_soikeo) ;$i++)
                      @if($i)
                        <div class="col-md-6">
                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="frontend/images/news/lifestyle/travel1.jpg" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <a class="post-cat" href="#">{{$menus_soikeo[$i]}}</a>
                                    <h2 class="post-title">
                                        <a href="#">{{$posts_soikeo[1]['new_title']}}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">13 tháng 8, 2019</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->

                            <div class="list-post-block">
                                <ul class="list-post">
                                  @if($posts_soikeo)
                                  @foreach($posts_soikeo as $posts)
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
                                                    <a href="#">{{$posts->new_title}} </a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">13 tháng 8, 2019</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                  @endforeach
                                  @endif
                                </ul><!-- List post end -->
                            </div><!-- List post block end -->
                        </div><!-- Col 1 end -->
                      @endif
                      @endfor
                    </div><!-- Row end -->
                </div><!-- Block Lifestyle end -->

                <div class="gap-50"></div>

                <div class="latest-news block color-red">
                  <h3 class="block-title"><span>{{$menus_casino[0]}}</span></h3>

                  <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                    @foreach($posts_casino as $post_casino)
                      <div class="item">
                          <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style clearfix">
                                        <div class="post-thumb">
                                            <a href="{{route('detail',$post_casino->new_id)}}"><img class="img-fluid" src="{{pare_url_file($post_casino->new_image,'news')}}" alt="" /></a>
                                        </div>
                                        <a class="post-cat" href="#">Game</a>
                                        <div class="post-content">
                                            <h2 class="post-title title-medium">
                                                <a href="{{route('detail',$post_casino->new_id)}}">{{$post_casino->new_title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">Admin</a></span>
                                                <span class="post-date">{{$post_casino->created_at}}</span>
                                            </div>
                                        </div>
                                        <!-- Post content end -->
                                    </div>
                                    <!-- Post Block style end -->
                                </li>
                                <!-- Li end -->

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
                                      </div>
                                      <!-- Post content end -->
                                  </div>
                                  <!-- Post Block style end -->
                              </li>
                                <!-- Li end -->

                          </ul>
                          <!-- List post 1 end -->

                      </div>
                    @endforeach
                      <!-- Item 1 end -->
                  </div>
                  <!-- Latest News owl carousel end-->
                </div>
                <!--- Latest news end -->
            </div>
            <!-- Content Col end -->
            @include('layout.sidebar')
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
              @foreach($adverts_bottom as $key => $ads_bottom)
                <img class="img-fluid" src="{{ pare_url_file($ads_bottom->img, 'images_bn') }}" alt="" />
              @endforeach
              <?php $key = $key +1; ?>
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

{{--<div class="chatbox chatbox--tray chatbox--empty">--}}
{{--    <div class="chatbox__title">--}}
{{--        <h5>Hỗ trợ trực tuyến</h5>--}}
{{--        <button class="chatbox__title__tray">--}}
{{--            <span></span>--}}
{{--        </button>--}}

{{--    </div>--}}
{{--    <div class="chatbox__body">--}}
{{--        <div class="chatbox__body__message chatbox__body__message--left">--}}
{{--            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="Picture">--}}
{{--            <p>Chào bạn, chúng tôi có thể giúp được gì cho bạn ?.</p>--}}
{{--        </div>--}}
{{--        <div class="chatbox__body__message chatbox__body__message--right">--}}
{{--            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" alt="Picture">--}}
{{--            <p>Em muốn hỏi hoa hồng.</p>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <form class="chatbox__credentials">--}}
{{--        <div class="form-group">--}}
{{--            <label for="inputName">Tên của bạn:</label>--}}
{{--            <input type="text" name="chat_name" class="form-control" id="inputName" required>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="inputEmail">Email:</label>--}}
{{--            <input type="email" name="chat_email" class="form-control" id="inputEmail" required>--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-success btn-block">Chat ngay</button>--}}
{{--    </form>--}}
{{--    <form action="">--}}
{{--        <textarea class="chatbox__message" placeholder="Đặt câu hỏi cho chúng tôi ngay"></textarea>--}}
{{--    </form>--}}
{{--</div>--}}
@endsection
