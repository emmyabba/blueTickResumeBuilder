
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
                                <h4 class="card-title text-center">Signup</h4>
                                <form class="login-form mt-4"method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Last name <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" autocomplete="lastname" autofocus>
                                                @error('lastname')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Other names <span class="text-danger">*</span></label>
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5 @error('othernames') is-invalid @enderror" name="othernames" value="{{ old('othernames') }}" placeholder="Other Names" autocomplete="othernames" autofocus>
                                                @error('othernames')
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Phone Number<span class="text-danger">*</span></label>
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5 @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number" autofocus>
                                                @error('phone_number')
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5 @error('password') is-invalid @enderror" placeholder="Password"  name="password" value="{{ old('password') }}" autocomplete="password" autofocus>
                                                @error('password')
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="terms_and_conditions" required>
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-block">Register</button>
                                        </div>
                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6></h6>
                                            <ul class="list-unstyled social-icon mb-0 mt-3">
                                                {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>--}}
                                                <li class="list-inline-item">Or Signup With</li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                            </ul><!--end icon-->
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="{{route('login')}}" class="text-dark font-weight-bold">Sign in</a></p>
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
