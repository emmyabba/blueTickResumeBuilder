<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

       @include('layouts.landing_meta')
        <!-- favicon -->
        <link rel="shortcut icon" href="{!! asset('blue/images/favicon.png') !!}">
        <!-- Bootstrap -->
        <link href="{!! asset('blue/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="{!! asset('blue/css/magnific-popup.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{!! asset('blue/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{!! asset('blue/css/unicons.css') !!}">
        <!-- Slider -->
        <link rel="stylesheet" href="{!! asset('blue/css/owl.carousel.min.css') !!}"/>
        <link rel="stylesheet" href="{!! asset('blue/css/owl.theme.default.min.css') !!}"/>
        <!-- Main Css -->
        <link href="{!! asset('blue/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{!! asset('blue/css/colors/default.css') !!}" rel="stylesheet" id="color-opt">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        @yield('head')
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
                    <a class="logo" href="{{route('welcome')}}">
                        <img src="{!! asset('blue/images/bluetick-logo.png') !!}" height="24" alt="">
                    </a>
                </div>
                @guest
                    <div class="buy-button">
                            <a href="{{route('login')}}" class="btn btn-outline-white">Login</a>
                        @if (Route::has('register'))
                            <a href="{{route('register')}}" class="btn btn-primary">Signup</a>
                        @endif
                    </div><!--end login button-->
                @else
                    <div class="buy-button">
                        <a href="{{route('login')}}" class="btn btn-primary"">My Account</a>
                        <a class="btn btn-outline-secondary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
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
        @yield('footer')
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->


        <script src="{!! asset('blue/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! asset('blue/js/jquery.easing.min.js') !!}"></script>
        <script src="{!! asset('blue/js/scrollspy.min.js') !!}"></script>
        <!-- Magnific Popup -->
        <script src="{!! asset('blue/js/jquery.magnific-popup.min.js') !!}"></script>
        <script src="{!! asset('blue/js/magnific.init.js') !!}"></script>
        <!-- SLIDER -->
        <script src="{!! asset('blue/js/owl.carousel.min.js') !!} "></script>
        <script src="{!! asset('blue/js/owl.init.js ') !!}"></script>
        <!-- Icons -->
        <script src="{!! asset('blue/js/feather.min.js') !!}"></script>
        <script src="{!! asset('blue/js/bundle.js') !!}"></script>
        <!-- Main Js -->
        <script src="{!! asset('blue/js/app.js') !!}"></script>


    </body>
</html>

