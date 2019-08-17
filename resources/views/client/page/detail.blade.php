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
                            Tacos ditched the naked chicken chalupa, so here's how to make your own
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
                            <p> <span class="dropcap">T</span> ityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                            <blockquote>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone and feel the charm of existence.</blockquote>
                            <p>Lo-fi cred gastropub, brunch aliquip stumptown culpa. Banh mi eiusmod tattooed, freegan Schlitz master cleanse pug. Eu 8-bit id PBR Pinterest taxidermy, swag church-key Echo Park commodo yr. Adipisicing leggings enim laboris wayfarers, cliche Carles placeat typewriter mixtape cold-pressed. Etsy Pitchfork Austin, selvage beard reprehenderit ea ugh.</p>
                            <h3>When, while the lovely valley teems with vapour around me, and the meridian sun strikes.</h3>
                            <p><img class="pull-left" src="frontend/images/news/news-details/news-details2.jpg" class="img-fluid" alt=""></p>
                            <p>Pitchfork kitsch plaid forage aliquip, sustainable taxidermy deserunt health goth stumptown cred VHS butcher. Mixtape fap Intelligentsia small batch placeat labore, bitters swag chia Echo Park. Four loko aliquip id, delectus beard Bushwick bespoke Blue Bottle eu keytar veniam ethical High Life pour-over.</p>
                            <p>Art party photo booth deserunt exercitation plaid squid. Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby chic. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby Velit non seitan, tilde art party minim Thundercats viral.  Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo. Listicle paleo, drinking vinegar sint direct trade vegan 3 wolf moon.</p>
                            <h3>Farm-to-table selfies labore leggings:</h3>
                            <ul>
                                <li>Plaid fashion axe semiotics skateboard</li>
                                <li>Mixtape fap Intelligentsia small batch placeat labore</li>
                                <li>Gleams steal into the inner sanctuary grow</li>
                                <li>Like these sweet mornings of spring which</li>
                            </ul>
                            <p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights. Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>
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
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel5.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Health</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
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
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/health5.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Health</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">Netcix cuts out the chill with an integrated...</a>
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
                        <!-- Item 2 end -->
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel3.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Travel</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">This Aeroplane that looks like a butt is the largest aircraft in the world</a>
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
                        <!-- Item 3 end -->
                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img class="img-fluid" src="frontend/images/news/lifestyle/travel4.jpg" alt="" /></a>
                                </div>
                                <a class="post-cat" href="#">Travel</a>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="#">19 incredible photos from Disney's 'Star Wars' cruise algore</a>
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
                        <!-- Item 4 end -->
                    </div>
                    <!-- Carousel end -->
                </div>
                <!-- Related posts end -->
                <!-- Post comment start -->
                <div id="comments" class="comments-area block">
                    <h3 class="block-title"><span>03 Bình luận</span></h3>
                    <ul class="comments-list">
                        <li>
                            <div class="comment">
                                <img class="comment-avatar pull-left" alt="" src="frontend/images/news/user1.png">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Michelle Aimber</span>
                                        <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights.</p>
                                    </div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Comments end -->
                            <ul class="comments-reply">
                                <li>
                                    <div class="comment">
                                        <img class="comment-avatar pull-left" alt="" src="frontend/images/news/user2.png">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Genelia Dusteen</span>
                                                <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                            </div>
                                            <div class="comment-content">
                                                <p>Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo.</p>
                                            </div>
                                            <div class="text-left">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comments end -->
                                </li>
                            </ul>
                            <!-- comments-reply end -->
                            <div class="comment last">
                                <img class="comment-avatar pull-left" alt="" src="frontend/images/news/user1.png">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Michelle Aimber</span>
                                        <span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>VHS Wes Anderson Banksy food truck vero. Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo.</p>
                                    </div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Comments end -->
                        </li>
                        <!-- Comments-list li end -->
                    </ul>
                    <!-- Comments-list ul end -->
                </div>
                <!-- Post comment end -->
                <div class="comments-form">
                    <h3 class="title-normal">Nhập để bình luận</h3>
                    <form role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>
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
