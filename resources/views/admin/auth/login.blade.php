<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Admin Login</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/admin/favicon/apple-icon-57x57.png')}}">
    <link rel="manifest" href="{{ asset('assets/admin/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/admin/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/admin/css/style.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->

</head>
<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <form method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In Admin Panel</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user')}}"></use>
                      </svg></span></div>
                                <input type="email" name="email" value="{{ old('email') }}" autofocus
                                       class="form-control" type="text" placeholder="Username">


                            </div>
                            @if ($errors->has('email'))

                                <p>{{ $errors->first('email') }}</p>

                            @endif
                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use
                            xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked')}}"></use>
                      </svg></span></div>
                                <input class="form-control" type="password" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Login
                                    </button>

                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ url('/admin/password/reset') }}" class="btn btn-link px-0"
                                       type="button">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%; display: none">
                <div class="card-body text-center">
                    <div>
                        <h2>Sign up</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('assets/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
<!--[if IE]><!-->
<script src="{{ asset('assets/admin/vendors/@coreui/icons/js/svgxuse.min.js')}}"></script>
<!--<![endif]-->

</body>
</html>
