<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AdminPanel SmartCity</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications  -->
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS  -->
    <link href="{{ asset('/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>

    <!-- CSS for Demo Purpose, don't include it in your project  -->
    <link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />


      <!--   Fonts and icons
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
</head>

<body>

<div class="wrapper">
<div class="sidebar" data-color="purple" data-image="{{ asset('/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('admin.layout') }}" class="simple-text">
                    SmartCity
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="pe-7s-user">
                            <img src="{{ asset('/img/user.png') }}" alt="user" style="height: 30px; weight: 30px">
                        </i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.points.index') }}">
                        <i class="pe-7s-note2">
                            <img src="{{ asset('/img/maps-and-flags.png') }}" alt="user" style="height: 30px; weight: 30px">
                        </i>
                        <p>Points</p>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.tags.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Tags</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pointTags.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>PointTags</p>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('admin.maps.index') }}">
                        <i class="pe-7s-map-marker">
                            <img src="{{ asset('/img/pointer-spot-tool-for-maps.png') }}" alt="user" style="height: 30px; weight: 30px">
                        </i>
                        <p>Maps</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
{{--                        @if (Auth::guest())--}}
                            <li><a href="#">Login</a></li>
{{--                            <li><a href="{{ url('/register') }}">Register</a></li>--}}
                    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
{{--                        @else--}}
                            
{{--                        @endif--}}
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            {{-- <div class="container-fluid"> --}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                @yield('content')
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
</body>
<!--<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-right">
            <p class="copyright pull-right">
                @SmartCity project - for a People with love
            </p>
        </nav>
    </div>
</footer>-->

<!--   Core JS Files   -->
<script src="{{ asset('/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ asset('/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('/js/demo.js') }}"></script>

<!-- Добавляем гугл карту с ключем -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEO9UPaEVLGrXid8MBqQ1icVF-ySdHrFY&callback=myMap" async defer></script>

</html>
