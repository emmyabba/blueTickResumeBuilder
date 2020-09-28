@extends('layouts.landing')

@section('content')

    <section class="section" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Select a Pricing Plan</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Job applications for different roles and industries will require different CVs. Our plans ensure that you can continuosly login over your selected plan duration to make changes to your CV. Discounts are only available for a limited period of time. </p>
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
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Easily Edit CV template</li>
                                <li class="h6 text-muted mb-0"><span class="text-primary h5 mr-2"><i class="uim uim-check-circle"></i></span>Download as PDF</li>
                            </ul>
                            <a href="{{route('process.subscription', 'silver')}}" class="btn btn-primary mt-4">Get started</a>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card pricing-rates starter-plan bg-white shadow rounded text-center border-0">
                        <div class="card-body py-5">
                            <h2 class="title text-uppercase text-primary mb-4">Gold <br><sub class="alert alert-danger" style="font-size: 10px">Most popular</sub></h2>
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
