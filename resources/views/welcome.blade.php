@extends('layouts.landing')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 order-1 order-md-2">
                    <div class="title-heading mt-4 ml-lg-5">
                        <h2 class="heading mb-3">Get help writing a CV employers love</h2>
                        <p class="para-desc text-muted">Use our CV template developed by the expert recruiters that hire you. We have developed an easy to use template for you, whether you are an undergraduate student applying for an internship with no experience or a graduate with several years of experience</p>
                        <div class="watch-video mt-4 pt-2">
                            <a href="{{route('home')}}" class="btn btn-primary">Create CV <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{!! asset('blue/images/working_with_computer.svg')!!}" class="img-fluid" alt="">
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
                            <span class="h1 text-primary text-bold">1</span>
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Sign Up</h4>
                            <p class="text-muted mb-0">Create an account, select one of our payment plans to gain access to our job-winning templates that fit your profile whether you are an undergraduate student, have no experience, applying for an internship or a fresh graduate.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <span class="h1 text-primary text-bold">2</span>
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Edit Template</h4>
                            <p class="text-muted mb-0">Easily edit our CV template online using a design format that hightlights your skills and experiences. This is a format suggested by knowledge experts and hiring practices gathered from actual recruiters.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <span class="h1 text-primary text-bold">3</span>
                        </div>

                        <div class="content mt-4">
                            <h4 class="title-2">Download</h4>
                            <p class="text-muted mb-0">Save your created CV as a PDF and start sharing with recruiters today to stand out in an overcrowded job market.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                {{-- <div class="col-lg-6 col-md-6">
                    <img src="{!! ('blue/images/bluetick-cv-img.jpg')!!}" class="img-fluid" alt="">
                </div><!--end col--> --}}

                <div class="col-lg-12 col-md-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ml-lg-3">
                        <h4 class="title mb-4 text-center">Learn how to write a job-winning CV to get your dream job</h4>
                        <p class="text-center">Save time with our easy to use 3-step CV builder. In one click you can start a creating professionally-designed CV using a template approved by recruiters. Just edit and download in less than 5 minutes. </p>
                        <div class="watch-video mt-4 pt-2 text-center">
                            <a href="{{route('home')}}" class="btn btn-primary">Create CV <i class="mdi mdi-chevron-right"></i></a>
                        </div>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->
     <!-- Key Feature Start -->
     <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Template Key Features</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Designed for you to save time. Our CV builder and template is based on what employers actually look for in a candidate. How do we know? We’ve talked with hundreds of recruiters to get the answers. Landing your dream job starts here.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Developed by Recruiters</h4>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Outstanding template layouts</h4>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Easy online CV builder</h4>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Approved by employers</h4>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Your data is safe</h4>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="icon text-center rounded-circle mr-3">
                            <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="title mb-0">Atention grabbing keywords</h4>
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Key Feature End -->


    <section class="section" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Pricing </h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Select a plan to get started with creating your CV</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row align-items-center">

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates bg-light rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4">Bronze</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">&#8358;</span>
                                <span class="price h1 mb-0">1, 000</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>1 month access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Easily Edit CV template</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Download as PDF</li>

                            </ul>
                            <a href="{{route('process.subscription', 'bronze')}}" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates bg-light rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase mb-4">Silver</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">&#8358; </span>
                                <span class="price h1 mb-0">1, 500</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>3 month access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Easily Edit CV templates</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Download as PDF</li>
                            </ul>
                            <a href="{{route('process.subscription', 'silver')}}" class="btn btn-primary mt-4">Get started</a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates starter-plan bg-white shadow rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase text-primary mb-4">Gold</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">&#8358; </span>
                                <span class="price h1 mb-0">2, 500</span>
                            </div>

                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>6 month access</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Easily Edit CV template</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Download as PDF</li>
                            </ul>
                            <a href="{{route('process.subscription', 'gold')}}" class="btn btn-primary mt-4">Get Started</a>

                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        </div><!--end container-->
    </section>
@endsection


@section('footer')
    @include('layouts.landing_footer')
@endsection
