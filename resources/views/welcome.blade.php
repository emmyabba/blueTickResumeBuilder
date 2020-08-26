@extends('layouts.landing')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-1 order-md-2">
                    <div class="title-heading mt-4 ml-lg-5">
                        <h2 class="heading mb-3">Less than <span class="text-primary">10%</span> of resumes make it past the first round of recruiters review.</h2>
                        <p class="para-desc text-muted">start creating professionally-designed CV templates approved by recruiters to get into the top 5% of job seekers who get invited for interviews.</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary">Create a CV <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{!! asset('blue/images/user_interface.svg')!!}" class="img-fluid" alt="">
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

     <!-- Feature Start -->
     <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/pen.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Select CV Template</h4>
                            <p class="text-muted mb-0">Find job-winning templates that fit your profile whether you are an undergraduate student, have no experience, applying for an internship or a fresh graduate.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/video.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Edit Template</h4>
                            <p class="text-muted mb-0">Easily edit CV templates online using pre-generated keywords suggested by knowledge experts and hiring practices gathered from actual recruiters.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="images/icon/intellectual.svg" class="avatar avatar-small" alt="">
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Download or Share</h4>
                            <p class="text-muted mb-0">Save your perfect CV in any common format, including Microsoft Word and PDF in a single click.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="images/saas/2.png" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-3">
                        <h4 class="title mb-4">Designed for you to save time and avoid errors.</h4>
                        <p class="text-muted">Our CV builder and templates are based on what employers actually look for in a candidate. How do we know? We’ve talked with hundreds of employers to get the answers. Landing your dream starts here.
                            ●	Easy to create
                            ●	Developed by recruiters
                            ●	Approved by employers
                            ●	Outstanding template layouts
                            ●	Your data is safe
                            ●	Attention-grabbing keywords
                            .</p>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->


    <section class="section" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Pricing </h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Startcreating CVs <span class="text-primary font-weight-bold"></span>Save your perfect CV in any common format, including Microsoft Word and PDF in a single click.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase text-primary mb-4">Starter</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">&#8358;</span>
                                <span class="price h1 mb-0">39</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                {{-- <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Appointments</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Free Installment</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li> --}}
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 col-12 mt-4 pt-2">
                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4">Professional</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">&#8358; </span>
                                <span class="price h1 mb-0">59</span>
                                <span class="h4 align-self-end mb-1">/mo</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                {{-- <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Full Access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Enhanced Security</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Source Files</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 Domain Free</li> --}}
                            </ul>
                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
@endsection
