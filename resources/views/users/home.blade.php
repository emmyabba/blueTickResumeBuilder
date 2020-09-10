@extends('layouts.landing')

@section('content')
  <!-- Hero Start -->
  <section class="bg-profile d-table w-100 bg-primary" style="background: url('blue/images/account/bg.png') center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                         <h3 class="title mb-0"><span class="h4">{{Auth()->user()->lastname.' '.Auth()->user()->othernames.'\'s'}}</span> Dashboard</h3>
                                    </div><!--end col-->
                                    <div class="col-md-5 text-md-right text-center">
                                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Add Friend"><i data-feather="user-plus" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Messages"><i data-feather="message-circle" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i data-feather="bell" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="account-setting.html" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
                                        </ul><!--end icon-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--ed container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-lg-block d-none">
                <div class="sidebar sticky-bar p-4 rounded shadow">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <h3 class="alert text-primary">Personal Details</h3><hr>
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>First Name</label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="first" type="text" class="form-control pl-5" value="{{Auth()->user()->othernames.'\'s'}}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Other Name</label>
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input name="name" id="last" type="text" class="form-control pl-5" value="{{Auth()->user()->lastname}}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Your Email</label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control pl-5" value="{{Auth()->user()->email}}">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Phone Number</label>
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="name" id="occupation" type="text" class="form-control pl-5" value="{{Auth()->user()->phone_number}}">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Professional Summary</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Include 2-3 clear sentences about your overall experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <h3 class="alert text-info">Personal Details</h3><hr>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                             <a href="#"><span class="alert text-info">+ Educational History</span></a>
                                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <h3 class="alert text-info">Personal Details</h3><hr>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                             <a href="#"><span class="alert text-info">+ Educational History</span></a>
                                                            </div>
                                        </div>
                                    </div><!--end row-->

                                </form><!--end form-->
                            </div><!--end col-->

                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-12">
                <div class="rounded shadow p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0"> </h5>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>

                        <div class="row">
                            <div class="col-sm-12">

                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Download CV">
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Profile End -->

@endsection

@section('footer')
    @include('layouts.landing_footer')
@endsection
