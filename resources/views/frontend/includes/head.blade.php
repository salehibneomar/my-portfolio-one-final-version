<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>
    {{$appSettings->name}} | @yield('title')
</title>

<meta name="author" content="" />
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link rel="shortcut icon" href="{{asset($appSettings->logo)}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/extra.css')}}" rel="stylesheet">

@if (Request::is('/')==false)
<link href="{{asset('frontend/assets/css/custom-sidebar.css')}}" rel="stylesheet">
@endif

@yield('extra_styles')