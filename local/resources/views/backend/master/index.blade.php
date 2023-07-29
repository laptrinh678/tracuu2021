<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <base href="{{asset('public/backend/josh')}}/">
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <link href="css/lap.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    @yield('style')
</head>

<body class="skin-josh">
        @include('backend.master.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('backend.master.menu')
        <!-- Right side column. Contains the navbar and content of the page -->
        @yield('content')
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
    @yield('script')
</body>
<script>
    $(document).ready(function()
    {
        $('#showmenu').click(function()
        {
            $('#leftmenu').toggleClass("collapse-left")
        })

    })
</script>
</html>

