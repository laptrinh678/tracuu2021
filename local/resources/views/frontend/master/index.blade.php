<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title> 
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh/vendors')}}/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh/vendors')}}/owl-carousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/all')}}/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/all')}}/css/reponsive.css">
    
    <!--end of page level css-->

@yield('meta')

@yield('style')
</head>
<body>
@include('frontend.header.header_josh')
@yield('content')
@include('frontend.footer.footer_josh')

    <!--global js starts-->
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/frontend/frontend_josh')}}/js/style-switcher.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/raphael.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/josh_frontend.js"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/jquery.circliful.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/carousel.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/frontend_josh')}}/js/index.js"></script>
    <!--page level js ends-->

@yield('script')
</html>