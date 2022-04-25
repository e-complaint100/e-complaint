<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>login - E-Complaint System</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base/themes/dark-layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base/themes/bordered-layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base/themes/semi-dark-layout.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/authentication.css') }}">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
{{--                    <img width="70px" src="{{ asset('images/logo.png') }}" alt="">--}}

                    <!-- Brand logo--><a class="brand-logo" href="/">
                        <h2 class="brand-text text-primary ms-1">E-Complaint System</h2></a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('/images/pages/forgot-password-v2.svg')}}" alt="Forgot password V2"/></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Forgot password-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <h2 class="card-title fw-bold mb-1">Forgot Password? 🔒</h2>
                            <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

                            @if (Session::has('fail'))
                                <div class="text-danger">
                                    {{Session::get('fail')}}
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="text-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <form class="auth-forgot-password-form mt-2" action="{{route('forget-password.post')}}" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label class="form-label" for="forgot-password-email">Email</label>
                                    <input class="form-control" id="forgot-password-email" type="text" name="email" placeholder="john@example.com" aria-describedby="forgot-password-email" autofocus="" tabindex="1"/>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="2">Send reset otp</button>
                            </form>
                            <p class="text-center mt-2"><a href="auth-login-cover.html"><i data-feather="chevron-left"></i> Back to login</a></p>
                        </div>
                    </div>
                    <!-- /Forgot password-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('/js/core/app-menu.js')}}"></script>
<script src="{{ asset('/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('/js/scripts/pages/auth-register.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>

<!-- END: Body-->

</html>
