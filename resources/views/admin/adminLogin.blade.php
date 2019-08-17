<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <title>Đăng nhập vào hệ thống admin</title>
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/css/toastr.css">
    <style>
        .box {
            width: 500px;
            margin: 200px 0;
        }

        .shape1{
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -50px;
        }
        .shape2 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -30px;
            float: left;
        }
        .shape3 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -30px;
            float: left;
            margin-left: -31px;
        }
        .shape4 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            margin-top: -25px;
            float: left;
            margin-left: -32px;
        }
        .shape5 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -48px;
            margin-left: -32px;
            margin-top: -30px;
        }
        .shape6 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -20px;
            margin-top: -35px;
        }
        .shape7 {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #0074d9;
            border-radius: 80px;
            float: left;
            margin-right: -20px;
            margin-top: -57px;
        }
        .float {
            position: absolute;
            z-index: 2;
        }

        .form {
            margin-left: 145px;
        }
    </style>
</head>
<body>



<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div class="box">
                <div class="shape1"></div>
                <div class="shape2"></div>
                <div class="shape3"></div>
                <div class="shape4"></div>
                <div class="shape5"></div>
                <div class="shape6"></div>
                <div class="shape7"></div>
                <div class="float">
                    <form class="form" action="{{ route('admin.post.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="admin_username" class="text-white">Tài khoản:</label><br>
                            <input type="text" name="admin_username" id="admin_username" class="form-control">
                            @if ($errors->has('admin_username'))
                                <span class="text-warning">
                                    {{ $errors->first('admin_username') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="admin_password" class="text-white">Mật khẩu:</label><br>
                            <input type="password" name="admin_password" id="admin_password" class="form-control">
                            @if ($errors->has('admin_password'))
                                <span class="text-warning">
                                    {{ $errors->first('admin_password') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/admin/js/toastr.min.js"></script>
@if(session('error'))
    <script type="text/javascript">
        toastr.options = {
            "positionClass" : "toast-top-center",
            "closeButton" : false,
            "debug" : false,
            "newestOnTop" : false,
            "progressBar" : false,
            "preventDuplicates" : false,
            "onclick" : null,
            "showDuration" : "300",
            "hideDuration" : "1000",
            "timeOut" : "5000",
            "extendedTimeOut" : "1000",
            "showEasing" : "swing",
            "hideEasing" : "linear",
            "showMethod" : "fadeIn",
            "hideMethod" : "fadeOut"
        }
        Command: toastr["error"]
        ('{{ session('error') }}')

    </script>
@endif

@if(session('message'))
    <script type="text/javascript">
        toastr.options = {
            "positionClass" : "toast-top-center",
            "closeButton" : false,
            "debug" : false,
            "newestOnTop" : false,
            "progressBar" : false,
            "preventDuplicates" : false,
            "onclick" : null,
            "showDuration" : "300",
            "hideDuration" : "1000",
            "timeOut" : "5000",
            "extendedTimeOut" : "1000",
            "showEasing" : "swing",
            "hideEasing" : "linear",
            "showMethod" : "fadeIn",
            "hideMethod" : "fadeOut"
        }
        Command: toastr["success"]
        ('{{ session('message') }}')

    </script>
@endif
<!------ Include the above in your HEAD tag ---------->
</body>
</html>
