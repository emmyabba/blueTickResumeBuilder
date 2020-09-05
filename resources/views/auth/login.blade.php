
<!DOCTYPE html>
<html lang="en">

    <head>
       @include('layouts.landing_meta')
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('blue/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('blue/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{ asset ('blue/js/bundle.js') }}"></script>
        <!-- Main Css -->
        <link href="{{ asset('blue/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('blue/css/colors/default.css')}}" rel="stylesheet" id="color-opt">
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

        <div class="back-to-home rounded d-none d-sm-block">
            <a href="{{route('welcome')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home bg-circle-gradiant d-flex align-items-center">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="card login-page bg-white shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Login</h4>
                                <form class="login-form mt-4"method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email" id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                                <p class="forgot-pass mb-0"><a href="{{ route('password.request') }}" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-0">
                                            <button class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6></h6>
                                            <ul class="list-unstyled social-icon mb-0 mt-3">
                                                {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>--}}
                                                <li class="list-inline-item">Or Login With</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                            </ul><!--end icon-->
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{route('register')}}" class="text-dark font-weight-bold">Sign Up</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!---->
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="{{ asset('blue/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('blue/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Icons -->
        <script src="{{ asset('blue/js/feather.min.js')}}"></script>
        <script src="{{ asset ('blue/js/bundle.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset ('blue/js/app.js')}}"></script>
    </body>
</html>
