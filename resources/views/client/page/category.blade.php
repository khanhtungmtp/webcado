@extends('layout.master')
@section('content')
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <div class="block category-listing category-style2">
                    <h3 class="block-title"><span>Technology</span></h3>

                    <!-- <ul class="subCategory unstyled">
                        <li><a href="#">Robotics</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Gadgets</a></li>
                    </ul> -->

                   @foreach ($news as $new)
                        <div class="post-block-style post-list clearfix">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="post-thumb thumb-float-style">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ pare_url_file($new->new_image, 'news') }}" alt="" />
                                        </a>
                                        <a class="post-cat" href="#">{{ $new->new_title }}</a>
                                    </div>
                                </div><!-- Img thumb col end -->

                                <div class="col-lg-7 col-md-6">
                                    <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="#">{{ $new->new_title }}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="post-author"><a href="#">John Doe</a></span>
                                            <span class="post-date">Feb 24, 2017</span>
                                            <span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
                                        <a href="#" class="comments-link"><span>03</span></a></span>
                                        </div>
                                        <p>{{ $new->new_description }}</p>
                                    </div><!-- Post content end -->
                                </div><!-- Post col end -->
                            </div><!-- 1st row end -->
                        </div><!-- 1st Post list end -->
                   @endforeach


                </div><!-- Block Technology end -->

                <div class="paging">
                <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">»</a></li>
                  <li>
                    <span class="page-numbers">Page 1 of 2</span>
                  </li>
                </ul>
            </div>


            </div><!-- Content Col end -->

{{--        @include('layout.sidebar');--}}

        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- First block end -->
@endsection
