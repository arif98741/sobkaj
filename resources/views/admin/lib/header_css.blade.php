<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Sobkaj, Service, Job Seeker, Job Provider">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/admin/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/admin/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/admin/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/admin/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/admin/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/admin/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/admin/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{ asset('assets/admin/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/admin/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/admin/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/admin/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/admin/vendors/@coreui/icons/css/free.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.min.css')}}" rel="stylesheet">
    @stack('extra-css')
</head>
