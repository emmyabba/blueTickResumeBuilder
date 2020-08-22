<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

       @include('layouts.landing_meta')
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{!! ('blue/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{!! ('blue/css/magnific-popup.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{!! ('blue/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{!! ('blue/css/unicons.css') !!}">
        <!-- Slider -->
        <link rel="stylesheet" href="{!! ('blue/css/owl.carousel.min.css') !!}"/>
        <link rel="stylesheet" href="{!! ('blue/css/owl.theme.default.min.css') !!}"/>
        <!-- Main Css -->
        <link href="{!! ('blue/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{!! ('blue/css/colors/default.css') !!}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">
                        <img src="images/logo-dark.png" height="24" alt="">
                    </a>
                </div>
                @guest
                    <div class="buy-button">
                            <a href="{{route('login')}}" class="btn btn-outline-secondary">Login</a>
                        @if (Route::has('register'))
                            <a href="{{route('register')}}" class="btn btn-primary">Signup</a>
                        @endif
                    </div><!--end login button-->
                @else
                    <div class="buy-button">
                        <a href="{{route('login')}}" class="btn btn-primary"">My Account</a>
                        <a href="{{route('register')}}" class="btn btn-outline-secondary">Logout</a>
                    </div><!--end login button-->

                @endguest
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                 @include('layouts.landing_navigation')
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

    @yield('content')

        <!-- Footer Start -->
        @include('layouts.landing_footer')
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="{!! ('blue/js/jquery-3.5.1.min.js') !!}"></script>
        <script src="{!! ('blue/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! ('blue/js/jquery.easing.min.js') !!}"></script>
        <script src="{!! ('blue/js/scrollspy.min.js') !!}"></script>
        <!-- Magnific Popup -->
        <script src="{!! ('blue/js/jquery.magnific-popup.min.js') !!}"></script>
        <script src="{!! ('blue/js/magnific.init.js') !!}"></script>
        <!-- SLIDER -->
        <script src="{!! ('blue/js/owl.carousel.min.js') !!} "></script>
        <script src="{!! ('blue/js/owl.init.js ') !!}"></script>
        <!-- Icons -->
        <script src="{!! ('blue/js/feather.min.js') !!}"></script>
        <script src="{!! ('blue/js/bundle.js') !!}"></script>
        <!-- Main Js -->
        <script src="{!! ('blue/js/app.js') !!}"></script>
    </body>
</html>
