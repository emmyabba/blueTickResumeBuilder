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
                                         <h3 class="title mb-0"><span class="h4">{{Auth()->user()->lastname.' '.Auth()->user()->othernames.'\'s'}}</span> CV</h3>
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

<!-- Profile Start REVIEW-->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-lg-block d-none">
                <div class="sidebar sticky-bar p-4 rounded shadow">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">
                                @include('flash')
                            <form>
                                @csrf

                                    <h3 class="alert text-primary">Personal Details</h3><hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Last Name</label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="last_name" id="last_name" type="text" class="form-control pl-5" value="{{Auth()->user()->lastname}}" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Other Names</label>
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input name="othernames" id="othernames" type="text" class="form-control pl-5" value="{{Auth()->user()->othernames}}" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Your Email</label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control pl-5" value="{{Auth()->user()->email}}" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Phone Number</label>
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="phone_number" id="phone_number" type="text" class="form-control pl-5" value="{{Auth()->user()->phone_number}}" disabled>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Position</label>
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="position" id="position" type="text" class="form-control pl-5" placeholder="e.g Software Developer">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Address</label>
                                                <i data-feather="home" class="fea icon-sm icons"></i>
                                                <input name="address" id="address" type="text" class="form-control pl-5" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Objectives</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="professional_summary" id="professional_summary" rows="4" class="form-control pl-5" placeholder="Include 2-3 clear sentences about your overall experience"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <h3 class="alert text-info">Employment History</h3><hr>
                                            </div>
                                        </div>


                                        <!--- -->
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <input name="organisation_name_1" id="organisation_name_1" type="text" class="form-control pl-5" placeholder="Organization">
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="organisation_position_1" id="organisation_position_1" type="text" class="form-control pl-5" placeholder="Position">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                               <select class="form-control" name="organisation_startmonth_1" id="organisation_startmonth_1">
                                                   <option>-- Start Month --</option>
                                                   <option>January</option>
                                                   <option>February</option>
                                                   <option>March</option>
                                                   <option>April</option>
                                                   <option>May</option>
                                                   <option>June</option>
                                                   <option>July</option>
                                                   <option>August</option>
                                                   <option>September</option>
                                                   <option>October</option>
                                                   <option>November</option>
                                                   <option>December</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                               <select class="form-control" name="organisation_startyear_1" id="organisation_startyear_1">
                                                   <option>-- Year --</option>
                                                   <option>2020</option>
                                                   <option>2019</option>
                                                   <option>2018</option>
                                                   <option>2017</option>
                                                   <option>2016</option>
                                                   <option>2015</option>
                                                   <option>2014</option>
                                                   <option>2013</option>
                                                   <option>2012</option>
                                                   <option>2011</option>
                                                   <option>2010</option>
                                                   <option>2009</option>
                                                   <option>2008</option>
                                                   <option>2007</option>
                                                   <option>2006</option>
                                                   <option>2005</option>
                                                   <option>2004</option>
                                                   <option>2003</option>
                                                   <option>2002</option>
                                                   <option>2001</option>
                                                   <option>2000</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                            <select class="form-control" name="organisation_endmonth_1" id="organisation_endmonth_1">
                                                <option>-- End Month --</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                            <select class="form-control" name="organisation_endyear_1" id="organisation_endyear_1">
                                                <option>-- Year --</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Description</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="organisation_desc_1" id="organisation_desc_1" rows="2" class="form-control pl-5" placeholder=""></textarea>
                                           </div>
                                        </div>
                                        <!-- -->


                                        <!--- -->
                                     <div class="col" id="myDIVv" style="display: none">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <input name="organisation_name_2" id="organisation_name_2" type="text" class="form-control pl-5" placeholder="Organization">
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="organisation_position_2" id="organisation_position_2" type="text" class="form-control pl-5" placeholder="Position">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                               <select class="form-control" name="organisation_startmonth_2" id="organisation_startmonth_2">
                                                   <option>-- Start Month --</option>
                                                   <option>January</option>
                                                   <option>February</option>
                                                   <option>March</option>
                                                   <option>April</option>
                                                   <option>May</option>
                                                   <option>June</option>
                                                   <option>July</option>
                                                   <option>August</option>
                                                   <option>September</option>
                                                   <option>October</option>
                                                   <option>November</option>
                                                   <option>December</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                               <select class="form-control" name="organisation_startyear_2" id="organisation_startyear_2">
                                                   <option>-- Year --</option>
                                                   <option>2020</option>
                                                   <option>2019</option>
                                                   <option>2018</option>
                                                   <option>2017</option>
                                                   <option>2016</option>
                                                   <option>2015</option>
                                                   <option>2014</option>
                                                   <option>2013</option>
                                                   <option>2012</option>
                                                   <option>2011</option>
                                                   <option>2010</option>
                                                   <option>2009</option>
                                                   <option>2008</option>
                                                   <option>2007</option>
                                                   <option>2006</option>
                                                   <option>2005</option>
                                                   <option>2004</option>
                                                   <option>2003</option>
                                                   <option>2002</option>
                                                   <option>2001</option>
                                                   <option>2000</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                            <select class="form-control" name="organisation_endmonth_2" id="organisation_endmonth_2">
                                                <option>-- End Month --</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                            <select class="form-control" name="organisation_endyear_2" id="organisation_endyear_2">
                                                <option>-- Year --</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Description</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="organisation_desc_2" id="organisation_desc_2" rows="2" class="form-control pl-5" placeholder=""></textarea>
                                           </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group position-relative">
                                                <a onclick="myFunctionx()" class="pull-right btn btn-info">Add Employment</a>
                                        </div>
                                    </div>


                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <h3 class="alert text-info">Educational History</h3><hr>
                                            </div>
                                        </div>


                                        <!--- -->
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="educational_university_1" id="educational_university_1" type="text" class="form-control pl-5" placeholder="University Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <select class="form-control pl-5" name="educational_degree_1" id="educational_degree_1">
                                                    <option>-- Select Qualification --</option>
                                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                    <option value="Master's Degree">Master's Degree</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="educational_course_1" id="educational_course_1" type="text" class="form-control pl-5" placeholder="Course of Study">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                               <select class="form-control" name="educational_startmonth_1" id="educational_startmonth_1">
                                                   <option>-- Start Month --</option>
                                                   <option>January</option>
                                                   <option>February</option>
                                                   <option>March</option>
                                                   <option>April</option>
                                                   <option>May</option>
                                                   <option>June</option>
                                                   <option>July</option>
                                                   <option>August</option>
                                                   <option>September</option>
                                                   <option>October</option>
                                                   <option>November</option>
                                                   <option>December</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                               <select class="form-control" name="educational_startyear_1" id="educational_startyear_1">
                                                   <option>-- Year --</option>
                                                   <option>2020</option>
                                                   <option>2019</option>
                                                   <option>2018</option>
                                                   <option>2017</option>
                                                   <option>2016</option>
                                                   <option>2015</option>
                                                   <option>2014</option>
                                                   <option>2013</option>
                                                   <option>2012</option>
                                                   <option>2011</option>
                                                   <option>2010</option>
                                                   <option>2009</option>
                                                   <option>2008</option>
                                                   <option>2007</option>
                                                   <option>2006</option>
                                                   <option>2005</option>
                                                   <option>2004</option>
                                                   <option>2003</option>
                                                   <option>2002</option>
                                                   <option>2001</option>
                                                   <option>2000</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                            <select class="form-control" name="educational_endmonth_1" id="educational_endmonth_1">
                                                <option>-- End Month --</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                            <select class="form-control" name="educational_endyear_1" id="educational_endyear_1">
                                                <option>-- Year --</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Description</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="educational_desc_1" id="educational_desc_1" rows="2" class="form-control pl-5" placeholder=""></textarea>
                                           </div>
                                        </div>
                                        <!-- -->


                                        <!--- -->

                                     <div class="col" id="myDIV" style="display: none">

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="educational_university_2" id="educational_university_2" type="text" class="form-control pl-5" placeholder="University Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <select class="form-control pl-5" name="educational_degree_2" id="educational_degree_2">
                                                    <option>-- Select Qualification --</option>
                                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                    <option value="Master's Degree">Master's Degree</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label></label>
                                                <input name="educational_course_2" id="educational_course_2" type="text" class="form-control pl-5" placeholder="Course of Study">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                               <select class="form-control" name="educational_startmonth_2" id="educational_startmonth_2">
                                                   <option>-- Start Month --</option>
                                                   <option>January</option>
                                                   <option>February</option>
                                                   <option>March</option>
                                                   <option>April</option>
                                                   <option>May</option>
                                                   <option>June</option>
                                                   <option>July</option>
                                                   <option>August</option>
                                                   <option>September</option>
                                                   <option>October</option>
                                                   <option>November</option>
                                                   <option>December</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                               <select class="form-control" name="educational_startyear_2" id="educational_startyear_2">
                                                   <option>-- Year --</option>
                                                   <option>2020</option>
                                                   <option>2019</option>
                                                   <option>2018</option>
                                                   <option>2017</option>
                                                   <option>2016</option>
                                                   <option>2015</option>
                                                   <option>2014</option>
                                                   <option>2013</option>
                                                   <option>2012</option>
                                                   <option>2011</option>
                                                   <option>2010</option>
                                                   <option>2009</option>
                                                   <option>2008</option>
                                                   <option>2007</option>
                                                   <option>2006</option>
                                                   <option>2005</option>
                                                   <option>2004</option>
                                                   <option>2003</option>
                                                   <option>2002</option>
                                                   <option>2001</option>
                                                   <option>2000</option>
                                               </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group position-relative">
                                                <label></label>
                                            <select class="form-control" name="educational_endmonth_2" id="educational_endmonth_2">
                                                <option>-- End Month --</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label></label>
                                            <select class="form-control" name="educational_endyear_2" id="educational_endyear_2">
                                                <option>-- Year --</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Description</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="educational_desc_2" id="educational_desc_2" rows="2" class="form-control pl-5" placeholder=""></textarea>
                                           </div>
                                        </div>


                                     </div>

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <a onclick="myFunction()" class="pull-left btn btn-info">Add Education</a>
                                         </div>
                                    </div>
                                        <!-- -->


                                        <!-- -->
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Skills</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="skills" id="skills" rows="2" class="form-control pl-5" placeholder="Add your skills here seperated by comas"></textarea>
                                           </div>
                                        </div>

                                    </div><!--end row-->

                                </form><!--end form-->
                            </div><!--end col-->

                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col PREVIEW -->

            <div class="col-lg-6 col-12">
                <div class="rounded shadow p-4">
                            <div class="row">
                                <script>

                                    $(document).ready(function(){

                                        $("#professional_summary").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".professional_summary").text(currentText);
                                        });

                                        $("#position").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".position").text(currentText);
                                        });

                                        $("#address").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".address").text(currentText);
                                        });

                                        $("#educational_degree_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_degree_1").text(currentText);
                                        });

                                        $("#educational_university_1").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_university_1").text(currentText);
                                        });

                                        $("#educational_course_1").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = ', '+$(this).val();
                                            // Setting the Div content
                                            $(".educational_course_1").text(currentText);
                                        });

                                        $("#educational_startmonth_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_startmonth_1").text(currentText);
                                        });

                                        $("#educational_startyear_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_startyear_1").text(currentText);
                                        });

                                        $("#educational_endmonth_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = '- '+$(this).val();
                                            // Setting the Div content
                                            $(".educational_endmonth_1").text(currentText);
                                        });

                                        $("#educational_endyear_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_endyear_1").text(currentText);
                                        });

                                        $("#educational_desc_1").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_desc_1").text(currentText);
                                        });


                                        //EDUCATIONAL 2

                                        $("#educational_university_2").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_university_2").text(currentText);
                                        });

                                        $("#educational_degree_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val()+' ,';
                                            // Setting the Div content
                                            $(".educational_degree_2").text(currentText);
                                        });



                                        $("#educational_course_2").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_course_2").text(currentText);
                                        });

                                        $("#educational_startmonth_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_startmonth_2").text(currentText);
                                        });

                                        $("#educational_startyear_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_startyear_2").text(currentText);
                                        });

                                        $("#educational_endmonth_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = ' - '+$(this).val();
                                            // Setting the Div content
                                            $(".educational_endmonth_2").text(currentText);
                                        });

                                        $("#educational_endyear_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_endyear_2").text(currentText);
                                        });

                                        $("#educational_desc_2").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".educational_desc_2").text(currentText);
                                        });

                                        //ORGANISATION 1
                                        $("#organisation_name_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_name_1").text(currentText);
                                        });

                                        $("#organisation_position_1").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_position_1").text(currentText);
                                        });

                                        $("#organisation_startmonth_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_startmonth_1").text(currentText);
                                        });

                                        $("#organisation_startyear_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_startyear_1").text(currentText);
                                        });

                                        $("#organisation_endmonth_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_endmonth_1").text(currentText);
                                        });

                                        $("#organisation_endyear_1").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_endyear_1").text(currentText);
                                        });

                                        $("#organisation_desc_1").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_desc_1").text(currentText);
                                        });

                                         //ORGANISATION 2
                                         $("#organisation_name_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_name_2").text(currentText);
                                        });

                                        $("#organisation_position_2").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_position_2").text(currentText);
                                        });

                                        $("#organisation_startmonth_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_startmonth_2").text(currentText);
                                        });

                                        $("#organisation_startyear_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_startyear_2").text(currentText);
                                        });

                                        $("#organisation_endmonth_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_endmonth_2").text(currentText);
                                        });

                                        $("#organisation_endyear_2").change(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_endyear_2").text(currentText);
                                        });

                                        $("#organisation_desc_2").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".organisation_desc_2").text(currentText);
                                        });

                                        $("#skills").keyup(function(){
                                            // Getting the current value of textarea
                                            var currentText = $(this).val();
                                            // Setting the Div content
                                            $(".skills").text(currentText);
                                        });

                                    });

                                    </script>

                                <div class="col-12" id="printhere">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <h3 class="text-primary">{{Auth()->user()->lastname.' '.Auth()->user()->othernames}}</h3>
                                               <strong><p class="position"></p></strong>
                                               <hr>
                                            </div><!--end col-->

                                            <div class="col-md-12">
                                                <p class="address"></p>
                                                <p>{{Auth()->user()->phone_number}}</p>
                                                <p>{{Auth()->user()->email}}</p>
                                             </div>

                                             <div class="col-md-12">
                                                 <h3 class="alert alert-primary"><b>Objective</b></h3>
                                                <p class="professional_summary"></p>
                                             </div>

                                             <div class="col-md-12">
                                                <h3 class="alert alert-primary"><b>Employment History</b></h3>
                                                    <b><p class="organisation_name_1"></p></b>
                                                    <p><span class="organisation_position_1"></span></p>
                                                    <p><span class="organisation_startmonth_1"></span> <span class="organisation_startyear_1"></span>  <span class="organisation_endmonth_1"></span> <span class="organisation_endyear_1"></span></p>
                                                    <p class="organisation_desc_1"></p>
                                            </div>
                                            <div class="col-md-12">
                                                    <b><p class="organisation_name_2"></p></b>
                                                    <p><span class="organisation_position_2"></span></p>
                                                    <p><span class="organisation_startmonth_2"></span> <span class="organisation_startyear_2"></span>  <span class="organisation_endmonth_2"></span> <span class="organisation_endyear_2"></span></p>
                                                    <p class="organisation_desc_2"></p>
                                            </div>

                                             <div class="col-md-12">
                                                <h3 class="alert alert-primary"><b>Educational History</b></h3>
                                                <b><p class="educational_university_1"></p></b>
                                                <p><span class="educational_degree_1"></span> <span class="educational_course_1"></span></p>
                                                <p><span class="educational_startmonth_1"></span> <span class="educational_startyear_1"></span><span class="educational_endmonth_1"></span> <span class="educational_endyear_1"></span></p>
                                                <p class="educational_desc_1"></p>
                                            </div>
                                            <div class="col-md-12">
                                                <b><p class="educational_university_2"></p></b>
                                                <p><span class="educational_degree_2"></span> <span class="educational_course_2"></span></p>
                                                <p><span class="educational_startmonth_2"></span> <span class="educational_startyear_2"></span>  <span class="educational_endmonth_2"></span> <span class="educational_endyear_2"></span></p>
                                                <p class="educational_desc_2"></p>
                                            </div>


                                            <div class="col-md-12">
                                                <h3 class="alert alert-primary"><b>Skills</b></h3>
                                                    <b><p class="skills"></p></b>

                                            </div>



                                        </div><!--end row-->

                                </div><!--end col-->
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-secondary" onclick="window.print()">Download My CV</button>
                                    </div>


                    </div>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Profile End -->
<script>
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
    top: -410px;
  }

}
@page
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    </style>
@endsection

@section('footer')
    @include('layouts.landing_footer')
@endsection
