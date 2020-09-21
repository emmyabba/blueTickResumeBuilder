@extends('layouts.landing')

@section('head')
@endsection

@section('content')
  <!-- Hero Start -->
  <section class="bg-profile d-table w-100 bg-primary" style="background: url('/blue/images/account/bg.png') center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                         <h3 class="title mb-0"><span class="h4">{{strtoupper($package)}}</span> CV payment</h3>
                                    </div><!--end col-->
                                    <div class="col-md-5 text-md-right text-center">
                                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                                            {{-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Add Friend"><i data-feather="user-plus" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Messages"><i data-feather="message-circle" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i data-feather="bell" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="account-setting.html" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
                                        </ul><!--end icon--> --}}
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

<!-- Profile Start REVIEW-->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-lg-block d-none">
                <div class="sidebar sticky-bar p-4 rounded shadow">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">

                                    <h3 class="alert text-primary">Payment Details</h3><hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-danger">Please verify all information and click on Pay now.</p>
                                        </div><!--end col-->
                                        <div class="col-md-12">
                                        <p class="text-inverse">Name: {{Auth()->user()->lastname.' '.Auth()->user()->othernames}}</p>
                                        <p class="text-inverse">email: {{Auth()->user()->email}}</p>
                                        <p class="text-inverse">email: {{Auth()->user()->phone_number}}</p>
                                        <p class="text-inverse">Package Name:  Bluetick {{$package}}</p>
                                        <p class="text-inverse">Package Price: &#8358; {{$price}}</p>
                                        <p class="text-inverse">Package Duration:  {{$duration}} Month(s)</p>
                                        </div><!--end col-->
                                    <form id="paymentForm">
                                        @csrf
                                        <div class="col-md-6">
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" id="amount" value="{{$price}}">
                                            <input type="hidden" name="currency" value="NGN">
                                            <input name="email" id="email" type="hidden" value="{{Auth()->user()->email}}">
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                            {{ csrf_field() }}
                                            <div class="form-group position-relative">

                                                <i data-feather="user" class="fea icon-sm icons"></i>

                                            </div>
                                        </div><!--end col-->


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                            <button type="submit" onclick="payWithPaystack()" class="btn btn-primary btn-block"> Pay </button>

                                          </div>
                                        </div>

                                        </form>


                                        <div class="col-md-12">


                                        </div>









                                    </div><!--end row-->

                                </form><!--end form-->
                            </div><!--end col-->

                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col PREVIEW -->

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Profile End -->
<script>
    const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();

  let handler = PaystackPop.setup({

    key: 'pk_test_0882af24c386ea75eea27e3a114501207ce0b83e', // Replace with your public key

    email: document.getElementById("email").value,

    amount: document.getElementById("amount").value * 100,


    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

    // label: "Optional string that replaces customer email"

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){

      let message = 'Payment complete! Reference: ' + response.reference;

      window.location = "/payment/callback";

    }

  });

  handler.openIframe();

}


function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function myFunctionx() {
  var x = document.getElementById("myDIVv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    </script>

    <style>
        @media print {
  body * {
    visibility: hidden;
  }
  #printheret, #printhere * {
    visibility: visible;
  }
  #printhere {
    position: absolute;
    left: 0;
    top: 0;
  }
}

    </style>
@endsection

@section('footer')
    @include('layouts.landing_footer')
@endsection
