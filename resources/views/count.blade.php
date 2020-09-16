
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>BLUETICK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="email" content="" />
        <meta name="website" content="" />
        <meta name="Version" content="" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{!! asset('blue/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{!! asset('blue/css/materialdesignicons.min.css')!!}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Main Css -->
        <link href="{!! asset('blue/css/style.css')!!}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{!! asset('blue/css/colors/default.css')!!}" rel="stylesheet" id="color-opt">

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



        <!-- COMING SOON PAGE -->
        <section class="bg-home bg-animation-left dark-left d-flex align-items-center" data-jarallax='{"speed": 0.5}' style="background-image: url('blue/images/comingsoon2.jpg');" id="home">

            <div class="container position-relative text-md-left text-center" style="z-index: 1;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-white title-dark mt-2 mb-4 coming-soon">We are Launching Soon</h1>
                        <h3 class="text-white">Bluetick helps you create a CV employers love. <br>Use our CV templates developed by the recruiters you are applying to. <br>We are building easy to use templates for you, whether you are an undergraduate student applying for an internship, have no experience or a university graduate.</h3>
                        <h2 class="h2 text-white">Signup for early access</h2>
                     </div>
                    @include('flash')
                </div>
                <form method="POST" action="{{ route('notifyme')}}">
                        @csrf
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative">
                                    <label class="text-white">Email<span class="text-danger">*</span></label>
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="text" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label class="text-white">Phone Number<span class="text-danger">*</span></label>
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input type="text" class="form-control pl-5 @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="" autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label class="text-white">Designation<span class="text-danger">*</span></label>
                                <i data-feather="user" class="fea icon-sm icons"></i>
                            <select class="form-control pl-5 @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}">
                                <option value="">I am ...</option>
                                <option>An Undergraduate</option>
                                <option>Post Graduate</option>
                                <option>A Recent graduate</option>
                                <option>An Experienced hire</option>
                            </select>
                                @error('designation')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary mt-4 -2" type="submit"><i class="mdi mdi-plus"></i> Notify Me</button>
                        </div>
                    </div>
                </form>
            </div> <!-- end container -->

        </section>
        <!-- COMING SOON PAGE -->



        <!-- javascript -->
        <script src="{!! asset('blue/js/jquery-3.5.1.min.js')!!}"></script>
        <script src="{!! asset('blue/js/bootstrap.bundle.min.js')!!}"></script>
        <script src="{!! asset('blue/js/jquery.easing.min.js')!!}"></script>
        <script src="{!! asset('blue/js/scrollspy.min.js')!!}"></script>
        <!-- Comingsoon -->
        <script src="{!! asset('blue/js/jquery.countdown.min.js')!!}"></script>
        <script src="{!! asset('blue/js/countdown.init.js')!!}"></script>
        <!-- Typed -->
        <script src="{!! asset('blue/js/typed.js')!!}"></script>
        <script src="{!! asset('blue/js/typed.init.js')!!}"></script>
        <!-- Video -->
        <script src="{!! asset('blue/js/jquery.mb.YTPlayer.min.js')!!}"></script>
        <!-- Icons -->
        <script src="{!! asset('blue/js/feather.min.js')!!}"></script>
        <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Main Js -->
        <script src="{!! asset('blue/js/app.js')!!}"></script>
        <script>
            $(".player").mb_YTPlayer();
        </script>
    </body>
</html>
