<div id="top-bar" class="top-bar">
  <div class="container">
 <div class="row">
  <div class="col-md-8">
  </div><!--/ Top bar left end -->

  <div class="col-md-4 top-social text-lg-right text-md-center">
     <ul class="unstyled">
        <li>
          <button  class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Đăng ký</button>
          <button  class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#elegantModalForm">Đăng nhập</button>

        </li>
     </ul><!-- Ul end -->
  </div><!--/ Top social col end -->
 </div><!--/ Content row end -->
</div><!--/ Container end -->
</div><!--/ Topbar end -->

<!-- Header start -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="./">
                    <img src="frontend/images/logos/logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- logo col end -->
            <div class="col-md-9 col-sm-12 header-right">
                <div class="ad-banner float-right">
                    <a href="#"><img src="frontend/images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
                </div>
            </div>
            <!-- header right end -->
        </div>
        <!-- Row end -->
    </div>
    <!-- Logo and banner area end -->
</header>
<!--/ Header end -->

<div class="main-nav clearfix">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg col">
                <div class="site-nav-inner float-left">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End of Navbar toggler -->
                    <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link" data-toggle="dropdown">TRANG CHỦ </a>
                            </li>
<!--                            --><?php
//                            echo "<pre>";
//                            print_r($menus);
//                            echo "</pre>";
//                            ?>
                            @foreach($menus as $key => $menu)
                            <li class="dropdown">
                                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
{{ $key }}
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($menu as $mn)
                                    <li class="dropdown-submenu">
                                        <a href="">{{$mn}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>
                            @endforeach
                            <!-- Tab menu end -->
                            <!-- Features menu end -->
                        </ul>
                        <!--/ Nav ul end -->
                    </div>
                    <!--/ Collapse end -->
                </div>
                <!-- Site Navbar inner end -->
            </nav>
            <!--/ Navigation end -->
            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div>
            <!-- Search end -->
            <div class="search-block" style="display: none;">
                <input type="text" class="form-control" placeholder="Tìm...">
                <span class="search-close">&times</span>
            </div>
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
</div>
