<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Nhà cái Fabet 188.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <!--Favicon-->
    <link rel="shortcut icon" href="frontend/images/logos/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="frontend/images/logos/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="frontend/css/style.css"/>
    <link rel="stylesheet" href="frontend/css/responsive.css"/>
    <link rel="stylesheet" href="frontend/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="frontend/css/animate.css"/>
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="frontend/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="frontend/css/onlinechat.css"/>
</head>
<body>
    <div id="app">
      @include('layout.header')
      <!-- Menu wrapper end -->
      @yield('content')
      <!-- Footer -->
      @include('layout.footer')

    </div>
<script type="text/javascript" src="frontend/js/jquery.js"></script>
<script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="frontend/js/popper.min.js"></script>
<script type="text/javascript" src="frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="frontend/js/custom.js"></script>
<script type="text/javascript" src="frontend/js/onlinechat.js"></script>
<script src="js/app.js"></script>
</body>
</html>
