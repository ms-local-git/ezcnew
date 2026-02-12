<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
   <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
      <title>Add Driver</title>
      <?php require(APPPATH."views\common\__css.php"); ?>
         <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
   <!-- BEGIN: Header-->
   <?php require(APPPATH."views\common\__header_menu.php"); ?>
      <ul class="main-search-list-defaultlist d-none">
         <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
               <h6 class="section-label mt-75 mb-0">Files</h6> </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/xls.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small> </div>
               </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small> </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/jpg.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small> </div>
               </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small> </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/pdf.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small> </div>
               </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small> </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/doc.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small> </div>
               </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small> </a>
         </li>
         <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
               <h6 class="section-label mt-75 mb-0">Members</h6> </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small> </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small> </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small> </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small> </div>
               </div>
            </a>
         </li>
      </ul>
      <ul class="main-search-list-defaultlist-other-list d-none">
         <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
               <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a>
         </li>
      </ul>
      <!-- END: Header-->
      <?php require(APPPATH."views\common\__left_menu.php"); ?>
         <!-- BEGIN: Content-->
         <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
               <section name="new-client">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">Driver Personal Information :</h4>
                                 <br> </div>
                           </div>
                           <div class="card-body">
                              <form class="form" action="<?= base_url() ?>/d_info/create" method="POST">
                                 <div class="row">
                                    <div class="col-md-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Driver Code:</b></label>&nbsp; <span style="color:red">Auto Genrate</span> </div>
                                    </div>
                                    <div class="col-md-6 col-12"></div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Driver Type:</b></label>
                                          <div class="form-group">
                                             <select name="driver_type" class="form-control" name="">
                                                <!-- <option value="1">Driver Day Shift</option value="2">
                                                <option>Driver Night Shift</option> -->
                                                 <option value="driver_day" selected="">Driver Day Shift</option>
                                                <option value="driver_night">Driver Night Shift</option>
                                                <option value="driver_messenger">Messenger</option>
                                                <option value="staff">staff</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <input name="operation" type="hidden" id="operation" value="i"></td>

                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>First Name: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="first_name" placeholder=" " value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Last Name: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="last_name" placeholder=" " value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Status: </b><span style="color:red">*</span></label>
                                          <select name="status" class="form-control" name="">
                                             <option value="1">Active</option value="0">
                                             <option>Deactive</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Street Address:</b> <span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="street" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Phone:</b> <span style="color:red">*</span></label>
                                          <input type="phone" class="form-control " name="phone" placeholder="" value=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Zip : </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="zip" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Pager / Cell:</b></label>
                                          <input type="text" class="form-control " name="pager" placeholder="" value=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>City:</b> <span style="color:red">*</span></label>
                                          <input type="address" class="form-control " name="city" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Pager Transmit:</b></label>
                                          <input type="phone" class="form-control " name="pager_transmit" placeholder="" value=""> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b></b></label>
                                          <select class="form-control" name="cell_company">
                                             <option value="Nextel">Nextel</option>
                                             <option value="auto">Auto</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>State: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="state" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Email:</b></label>
                                          <input type="email" class="form-control " name="email" placeholder="" value=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Country:</b> <span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="country" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Emergency Phone: </b></label>
                                          <input type="phone" class="form-control " name="emer_phone" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Citizen:</b></label>
                                          <select class="form-control" name="citizen">
                                             <!-- <option value="usa">USA</option>
                                             <option value="indian">INDIAN</option> -->
                                             <option value="USA">USA</option>
                                            <option value="INDIA">INDIA</option>
                                            <option value="OTHER">OTHER</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">                                         
                                          <label for="invalid-state"><b>User Id: </b>&nbsp;<span style="color:red">Auto Genrate</span></label>
                                          
                                    </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <!-- <label for="invalid-state"><b>User Id Password: </b></label>
                                          <input type="text" class="form-control " name="user_name" placeholder="" value="" required=""> </div> -->
                                          <label for="invalid-state"><b>Password: </b></label>
                                          <input type="password" class="form-control " name="user_password" placeholder="" value="" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Remarks: </b></label>
                                          <textarea class="form-control" name="remarks" rows="3" placeholder="Textarea"></textarea>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--Create Email & SMS  -->
                <section name="invoice-printout">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                <div> <h4 class="card-title">Email & SMS Subscription:</h4><br/>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                            <label for="invalid-state"><b>Email Alert: </b></label>
                                            <input type="email" class="form-control " name="email_alert" placeholder="" value="" required />
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-3 col-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox mt-2">
                                                    <input 
                                                        type="checkbox" value="1"
                                                        class="custom-control-input"
                                                        id="customCheck1"
                                                        name="is_sms_alert"
                                                    >
                                                    <label class="custom-control-label" for="customCheck1">
                                                        <b>SMS Alert</b>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox mt-2">
                                                    <input
                                                        type="checkbox" value="1"
                                                        class="custom-control-input"
                                                        id="customCheck2"
                                                        name="is_email_alert"
                                                    >
                                                    <label class="custom-control-label" for="customCheck2">
                                                        <b>Email Alert</b>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              <!-- end -->
                <!--Create Offical Information -->
                <section name="invoice-printout">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <div> <h6 class="card-title">Official Information:</h6><br/>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Starting Date: </b><span style="color:red">*</span></label>
                                        <input type="date" class="form-control " name="start_date" placeholder=" " value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>End Date: </b></label>
                                        <input type="date" class="form-control " name="end_date" placeholder=" " value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="valid-state"><b>SSN:</b> </label>
                                            <input type="password" class="form-control " name="ssn" placeholder="" value="" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>AIN:</b> </label>
                                        <input type="password" class="form-control " name="ain" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Driving License No: </b> <span style="color:red">*</span></label>
                                        <input type="text" class="form-control " name="dl_no" placeholder="" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>License Expires:</b> <span style="color:red">*</span></label>
                                        <input type="date" class="form-control " name="dl_expire" placeholder="" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Plate#:</b> </label>
                                        <input type="date" class="form-control " name="pl_no" placeholder="" value=""  />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Plate Expires:</b></label>
                                        <input type="date" class="form-control " name="pl_expire" placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Insurance: </b> <span style="color:red">*</span></label>
                                        <input type="text" class="form-control " name="insu_no" placeholder="" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Insurance Expires:</b> <span style="color:red">*</span></label>
                                        <input type="date" class="form-control " name="insu_expire" placeholder="" value="" />
                                        </div> 
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Vehicle:</b> <span style="color:red">*</span></label>
                                        <select class="form-control" name="vehicle">
                                        <option value="None">None</option>
                                        <option value="Car">Car</option>
                                        <option value="Cargo Van">Cargo Van</option>
                                        <option value="Van">Van</option>
                                        <option value="Truck">Truck</option>
                                        </select>

                                      
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Make: </b></label>
                                        <input type="phone" class="form-control " name="v_make" placeholder="" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Model:</b> </label>
                                        <select class="form-control" name="v_model">
                                            <?php
                                                for ($year = 1980; $year <= 2025; $year++) {
                                                echo "<option value=\"$year\">$year</option>";
                                                }
                                            ?>
                                       
                                        </select>
                                       </div> 
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Radio Serial: </b></label>
                                        <input type="text" class="form-control " name="radio_serial" placeholder="" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Sch. Time In:</b></label>
                                        <input type="text" class="form-control " name="sch_in" placeholder="" value="" />
                                        </div> 
                                    </div> 
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Group: </b></label>
                                        <select class="form-control" name="d_group">
                                            <option value=" [Day Time]" >A [Day Time]</option>
                                            <option value=" [Night Time]">A [Night Time]</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Sch Time Out:</b> </label>
                                        <input type="text" class="form-control " name="sch_out" placeholder="" value="" />
                                        </div> 
                                    </div>
                                    
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="show_board" name="show_board" value="1" checked>
                                            <label class="custom-control-label" for="show_board"><b>Show Board</b></label>
                                        </div>

                                        </div> 
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Create Finance & Other Information  -->
            <section name="invoice-printout">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <div> <h6 class="card-title">Finance & Other Information:</h6><br/>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Price Table Code: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="driver_price_code" placeholder="" value="" required />
                                    </div>
                                </div>
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" style="width: 100%;
                                        height: max-content;
                                        margin-top: 22px;">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Period: </b><span style="color:red">*</span></label>
                                    <select class="form-control" name="period">
                                        <option value="d">Daily</option>
                                        <option value="w">Weekly</option>
                                        <option value="b">Bi-Monthly</option>
                                        <option value="m">Monthly</option>
                                        <option value="s">Two Weeks</option>
                                        <option value="o">Open</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Guarantee: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="gurantee" placeholder="" value="" required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Report: </b></label>
                                    <select class="form-control" name="reports">
                                        <option value="d">Daily</option>
                                        <option value="w">Weekly</option>
                                        <option value="b">Bi-Monthly</option>
                                        <option value="m">Monthly</option>
                                        <option value="s">Two Weeks</option>
                                        <option value="o">Open</option>
                                    </select>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->
          <!--Create Finance & Other Information  -->
          <section name="invoice-printout">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <div> <h6 class="card-title">Working Days:</h6><br/>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="row"> 
                            <div class="col-sm-3 col-12"> 
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_mon" name="w_mon" >
                                        <label class="custom-control-label" for="w_mon"><b>Monday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-3 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_tue" name="w_tue">
                                        <label class="custom-control-label" for="w_tue"><b>Tuesday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-3 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_wed" name="w_wed">
                                        <label class="custom-control-label" for="w_wed"><b>Wednesday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-3 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_thu" name="w_thu">
                                        <label class="custom-control-label" for="w_thu"><b>Thursday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-3 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_fri" name="w_fri">
                                        <label class="custom-control-label" for="w_fri"><b>Friday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-3 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_sat" name="w_sat">
                                        <label class="custom-control-label" for="w_sat"><b>Saturday</b></label>
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-sm-1 col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" value="1" class="custom-control-input" id="w_sun" name="w_sun">
                                        <label class="custom-control-label" for="w_sun"><b>Sunday</b></label>
                                    </div> 
                                </div> 
                            </div>
                        </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->
    
        <section name="submit">
            <div class="col-sm-12 col-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" style="width: 100%;
                    height: max-content;
                    margin-top: 22px;">Submit</button>
                </div>
            </div>
        </section>
            </div>
         </div>
         <!-- END: Content-->
         <div class="sidenav-overlay"></div>
         <div class="drag-target"></div>
         <?php require(APPPATH.'views\common\__footer.php'); ?>
            <!-- BEGIN: Page JS-->
            <!-- END: Page JS-->
            <script>
            $(document).ready(function() {
               <?php
                $search = $request->getPost("search");
                if(isset($search)) { 
            ?>
               // $('#basic-datatable').show();
               // $('#searchBox').hide();
               <?php } else { ?>
               // $('#basic-datatable').hide();
               <?php } ?>
            });
            // function showFilters() {
            //     $('#searchBox').show();
            //     $('#filterBtn').hide();
            // }
            $(window).on('load', function() {
               if(feather) {
                  feather.replace({
                     width: 14,
                     height: 14
                  });
               }
            });
            </script>
            
</body>
<!-- END: Body-->

</html>