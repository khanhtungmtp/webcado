@extends('layout.master')
@section('content')
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="single-post">
                    <div class="post-media post-featured-image">
                        <img src="frontend/images/news/lifestyle/food1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="post-title-area">
                        <a class="post-cat" href="#">Food</a>
                        <h2 class="post-title">
                        {{ $new->new_title }}
                        </h2>
                        <div class="post-meta">
                            <span class="post-author">
                            By <a href="#">John Doe</a>
                            </span>
                            <span class="post-date"><i class="fa fa-clock-o"></i> March 14, 2017</span>
                            <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
                            <span class="post-comment"><i class="fa fa-comments-o"></i>
                            <a href="#" class="comments-link"><span>01</span></a></span>
                        </div>
                    </div>
                    <!-- Post title end -->
                    <div class="post-content-area">
                        <div class="entry-content">
                            {!! $new->new_content !!}
                        </div>
                        <!-- Entery content end -->
                        <div class="share-items clearfix">
                            <ul class="post-social-icons unstyled">
                                <div class="rating">
                                    <!--
                                        --><input name="stars" id="e5" type="radio"></a><label for="e5">☆</label><!--
                                        --><input name="stars" id="e4" type="radio"></a><label for="e4">☆</label><!--
                                        --><input name="stars" id="e3" type="radio"></a><label for="e3">☆</label><!--
                                        --><input name="stars" id="e2" type="radio"></a><label for="e2">☆</label><!--
                                        --><input name="stars" id="e1" type="radio"></a><label for="e1">☆</label>
                                </div>
                                <div class="share">
                                    <div class="share-container">
                                        <div>
                                            <a class="share-button share-button-twitter" href="#" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span>Share on twitter</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="share-button share-button-facebook" href="#" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span>Share on Facebook</span>
                                            </a>
                                        </div>
                                        <div class="share-button-hide">
                                            <a class="share-button share-button-whatsapp" href="#" target="_blank">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            <span>Share on WhatsApp</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="share-button share-button-googleplus" href="#" target="_blank">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            <span>Share on Google+</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </ul>
                        </div>
                        <!-- Share items end -->
                    </div>
                    <!-- post-content end -->
                </div>
                <!-- Single post end -->
                <div class="related-posts block">
                    <h3 class="block-title"><span>Các bài viết cùng chuyên mục</span></h3>
                    <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">

                        @foreach($same_news as $new_t)

                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel5.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Health</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="{{route('detail',$new_t->new_id)}}">{{ $new_t->new_title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">John Doe</a></span>
                                        <span class="post-date">Feb 19, 2017</span>
                                    </div>
                                </div>
                                <!-- Post content end -->
                            </div>
                            <!-- Post Block style end -->
                        </div>
                        <!-- Item 1 end -->
                        @endforeach
                    </div>
                    <!-- Carousel end -->
                </div>
                <!-- Related posts end -->
                <!-- Post comment start -->
                <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Comments</div>

                            <div class="panel-body comment-container" >

                                @foreach($comments as $comment)
                                    <div class="well">
                                        <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                                        <span> {{ $comment->comment }} </span>
                                        <div style="margin-left:10px;">
                                            <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                            <a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a>
                                            <div class="reply-form">

                                                <!-- Dynamic Reply form -->

                                            </div>
                                            @foreach($comment->replies as $rep)
                                                 @if($comment->id === $rep->comment_id)
                                                    <div class="well">
                                                        <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                                        <span> {{ $rep->reply }} </span>
                                                        <div style="margin-left:10px;">
                                                            <a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
                                                        </div>
                                                        <div class="reply-to-reply-form">

                                                            <!-- Dynamic Reply form -->

                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post comment end -->
                <div class="comments-form">
                    <h3 class="title-normal">Nhập để bình luận</h3>
                    <form role="form" action="{{route('comment')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <!-- @if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
						@endif -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control required-field" name="comment_author_email" type="email" placeholder="Nhập email" name="email" required >
                                </div>
                            </div>
                            <!-- Col end -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" name="comments_content" id="message" placeholder="Your Comment" rows="10" required></textarea>
                                </div>
                            </div>
                            <!-- Col end -->
                        </div>
                        <!-- Form row end -->
                        <div class="clearfix">
                            <button class="comments-btn btn btn-primary" type="submit">Bình luận</button>
                        </div>
                    </form>
                    <!-- Form end -->
                </div>
                <!-- Comments form end -->
            </div>
            <!-- Content Col end -->
            @include('layout.sidebar');
            <!-- Sidebar Col end -->
        </div>
        <!-- Row end -->
    </div>
    <!-- Container end -->
</section>
@endsection
