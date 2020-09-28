    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
  <!-- Footer Start -->
  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="{!! asset('blue/images/bluetick-logo-inverse.png') !!}" height="24" alt="">
                </a>
                <p class="mt-4">Send us an email at hello@bluetick.ng for all enquiries.</p>

                <ul class="list-unstyled social-icon social mb-0 mt-4">
                    <li class="list-inline-item"><a href="https://twitter.com/BluetickHQ" target="_new" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Useful Links</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="{{route('home')}}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Create CV</a></li>
                    <li><a href="{{route('welcome').'/#pricing'}}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Newsletter</h4>
                <p class="mt-4">Sign up and receive the latest job application tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe form-group position-relative">
                                <label>Write your email <span class="text-danger">*</span></label>
                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary btn-block" value="Subscribe">
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© {{date('Y')}}. <i class="mdi mdi-heart text-danger"></i> bluetick.ng<a href="https://twitter.com/gr8nexx" target="_New" class="text-reset"></a></p>
                </div>
            </div><!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->
