
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
                <form method="POST" action="{{ route('notifyme') }}>
                <div class="row">
                    <div class="col-md-12">

                        <h1 class="text-uppercase text-white title-dark mt-2 mb-4 coming-soon">We are Launching Soon</h1>
                        <h2 class="h2 text-white">Signup for early access</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label class="text-white">email<span class="text-danger">*</span></label>
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <input type="text" class="form-control pl-5 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="" autocomplete="lastname" autofocus>
                            @error('lastname')
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
                            <input type="text" class="form-control pl-5 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="" autocomplete="lastname" autofocus>
                            @error('lastname')
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
                           <select class="form-control pl-5 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}">
                            <option>I am ...</option>
                               <option>a recent graduate</option>
                               <option>an experienced hire</option>
                           </select>
                            @error('lastname')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary mt-4 -2"><i class="mdi mdi-plus"></i> Notify Me</button>
                    </div>
                </div>
            </div> <!-- end container -->
        </form>
        </section>
        <!-- COMING SOON PAGE -->

        <!-- Subscribe start -->
        <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Subscribe Me</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="bg-white p-3 rounded box-shadow">
                            <p>We are comingsoon. Please, Enter your mail id and subscribe.</p>
                            <form>
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email :" required="" aria-describedby="newssubscribebtn">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary submitBnt" type="submit" id="paypalmail">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe end -->

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