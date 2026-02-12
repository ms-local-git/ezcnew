<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
   <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
      <title>Client Listing</title>
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
                              <form class="form" action="<?= base_url() ?>/d_info/update" method="POST">
                                 <div class="row">
                                    <input type="hidden" name="id" value="<?= $row->id ?>">
                                    <div class="col-md-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Driver Code:</b></label>&nbsp; <span style="color:red">Auto Genrate</span> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Driver Type:</b></label>
                                          <div class="form-group">
                                             <select name="driver_type" class="form-control" >
                                                <!-- <option value="<?= $row->driver_type ?>">Driver Day Shift</option value="2"> -->
                                                <option value="driver_day" <?= ($row->driver_type == 'driver_day') ? 'selected' : '' ?>>Driver Day Shift</option>
                                                <option value="driver_night"<?= ($row->driver_type == 'driver_night') ? 'selected' : '' ?>>Driver Night Shift</option>
                                                <option value="driver_messenger"<?= ($row->driver_type == 'driver_messenger') ? 'selected' : '' ?>>Messenger</option>
                                                <option value="staff"<?= ($row->driver_type == 'staff') ? 'selected' : '' ?>>staff</option>                                            
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>First Name: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="first_name" placeholder=" " value="<?= $row->first_name ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Last Name: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="last_name" placeholder=" " value="<?= $row->last_name ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Status: </b><span style="color:red">*</span></label>
                                          <select name="status" class="form-control" name="">
                                             <option value="1" <?= ($row->status == '1') ? 'selected' : '' ?>>Active</option>
                                             <option value="0" <?= ($row->status == '0') ? 'selected' : '' ?> >Deactive</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Street Address:</b> <span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="street" placeholder="" value="<?= $row->street ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Phone:</b> <span style="color:red">*</span></label>
                                          <input type="phone" class="form-control " name="phone" placeholder="" value="<?= $row->phone ?>"> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Zip : </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="zip" placeholder="" value="<?= $row->zip ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Pager / Cell:</b></label>
                                          <input type="text" class="form-control " name="pager" placeholder="" value="<?= $row->pager ?>"> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>City:</b> <span style="color:red">*</span></label>
                                          <input type="address" class="form-control " name="city" placeholder="" value="<?= $row->city ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Pager Transmit:</b></label>
                                          <input type="phone" class="form-control " name="pager_transmit" placeholder="" value="<?= $row->pager_transmit ?>"> </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b></b></label>
                                          <select class="form-control" name="cell_company">
                                             <option value="Nextel" <?= ($row->cell_company == 'Nextel') ? 'selected' : '' ?>>Nextel</option>
                                             <option value="auto" <?= ($row->cell_company == 'auto') ? 'selected' : '' ?>>Auto</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>State: </b><span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="state" placeholder="" value="<?= $row->state ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Email:</b></label>
                                          <input type="email" class="form-control " name="email" placeholder="" value="<?= $row->email ?>"> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Country:</b> <span style="color:red">*</span></label>
                                          <input type="text" class="form-control " name="country" placeholder="" value="<?= $row->country ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Emergency Phone: </b></label>
                                          <input type="phone" class="form-control " name="emer_phone" placeholder="" value="<?= $row->emer_phone ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="valid-state"><b>Citizen:</b></label>
                                          <select class="form-control" name="citizen">
                                             <option value="USA" <?= ($row->citizen == 'USA') ? 'selected' : '' ?>>USA</option>
                                             <option value="INDIA" <?= ($row->citizen == 'INDIA') ? 'selected' : '' ?>>INDIAN</option>                                  
                                            <option value="OTHER" <?= ($row->citizen == 'OTHER') ? 'selected' : '' ?>>OTHER</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Password: </b></label>
                                          <input type="text" class="form-control " name="user_password" placeholder="" value="<?= $row->user_password ?>" required=""> </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-group">
                                          <label for="invalid-state"><b>Remarks: </b></label>
                                          <textarea class="form-control" name="remarks" rows="3" value="<?= $row->remarks ?>" placeholder="Textarea"></textarea>
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
                                <div> <h6 class="card-title">Email & SMS Subscription :</h6><br/>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group">
                                            <label for="invalid-state"><b>Email Alert: </b></label>
                                            <input type="email" class="form-control " name="email_alert" placeholder="" value="<?= $row->email_alert ?>" required />
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
                                                        <?= ($row->is_sms_alert == 1) ? 'checked' : '' ?>
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
                                                        <?= ($row->is_email_alert == 1) ? 'checked' : '' ?>
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
                            <div> <h6 class="card-title">Offical Information ::</h6><br/>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Starting Date: </b><span style="color:red">*</span></label>
                                        <input type="date" class="form-control " name="start_date" placeholder=" " value="<?= $row->start_date ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>End Date: </b></label>
                                        <input type="date" class="form-control " name="end_date" placeholder=" " value="<?= $row->end_date ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="valid-state"><b>SSN:</b> </label>
                                            <input type="password" class="form-control " name="ssn" placeholder="" value="<?= $row->ssn ?>" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>AIN:</b> </label>
                                        <input type="password" class="form-control " name="ain" placeholder="" value="<?= $row->ain ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Driving License No : </b> <span style="color:red">*</span></label>
                                        <input type="text" class="form-control " name="dl_no" placeholder="" value="<?= $row->dl_no ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>License Expires:</b> <span style="color:red">*</span></label>
                                        <input type="text" class="form-control " name="dl_expire" placeholder="" value="<?= $row->dl_expire ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Plate #:</b> </label>
                                        <input type="date" class="form-control " name="pl_no" placeholder="" value="<?= $row->pl_no ?>"  />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Plate Expires:</b></label>
                                        <input type="date" class="form-control " name="pl_expire" placeholder="" value="<?= $row->pl_expire ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Insurance: </b> <span style="color:red">*</span></label>
                                        <input type="text" class="form-control " name="insu_no" placeholder="" value="<?= $row->insu_no ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Insurance Expires:</b> <span style="color:red">*</span></label>
                                        <input type="date" class="form-control " name="insu_expire" placeholder="" value="<?= $row->insu_expire ?>" />
                                        </div> 
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Vehicle:</b> <span style="color:red">*</span></label>
                                        <select class="form-control" name="vehicle" >
                                            <option value="None"<?= ($row->vehicle == 'None') ? 'selected' : '' ?>>None</option>
                                            <option value="Car" <?= ($row->vehicle == 'Car') ? 'selected' : '' ?>>Car</option>
                                            <option value="Cargo Van" <?= ($row->vehicle == 'Cargo Van') ? 'selected' : '' ?>>Cargo Van</option>
                                            <option value="Van" <?= ($row->vehicle == 'Van') ? 'selected' : '' ?>>Van</option>
                                            <option value="Truck" <?= ($row->vehicle == 'Truck') ? 'selected' : '' ?>>Truck</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Make: </b></label>
                                        <input type="phone" class="form-control " name="v_make" placeholder="" value="<?= $row->v_make ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Model:</b> </label>
                                        <select class="form-control" name="v_model"> 
                                            <?php
                                                for ($year = 1980; $year <= 2025; $year++) {
                                                    $selected = ($row->v_model == $year) ? 'selected' : '';
                                                    echo "<option value=\"$year\" $selected>$year</option>";
                                                }
                                            ?>
                                        </select>

                                       </div> 
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="valid-state"><b>Radio Serial: </b></label>
                                        <input type="text" class="form-control " name="radio_serial" placeholder="" value="<?= $row->radio_serial ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="invalid-state"><b>Sch. Time In:</b></label>
                                        <input type="text" class="form-control " name="sch_in" placeholder="" value="<?= $row->sch_in ?>" />
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
                                        <input type="text" class="form-control " name="sch_out" placeholder="" value="<?= $row->sch_out ?>" />
                                        </div> 
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="show_board" name="show_board" value="<?= $row->show_board ?>"   <?= ($row->show_board == 1) ? 'checked' : '' ?>>
                                            <label class="custom-control-label" for="show_board"><b>Show Board</b></label>
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
                        <div> <h6 class="card-title">Finance & Other Information :</h6><br/>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Price Table Code: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="driver_price_code" placeholder="" value="<?= $row->driver_price_code ?>" required />
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
                                            <option value="d" <?= ($row->period == 'd') ? 'selected' : '' ?>>Daily</option>
                                            <option value="w" <?= ($row->period == 'w') ? 'selected' : '' ?>>Weekly</option>
                                            <option value="b" <?= ($row->period == 'b') ? 'selected' : '' ?>>Bi-Monthly</option>
                                            <option value="m" <?= ($row->period == 'm') ? 'selected' : '' ?>>Monthly</option>
                                            <option value="s" <?= ($row->period == 's') ? 'selected' : '' ?>>Two Weeks</option>
                                            <option value="o" <?= ($row->period == 'o') ? 'selected' : '' ?>>Open</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Guarantee: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="gurantee" placeholder="" value="<?= $row->gurantee ?>" required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Report: </b></label>
                                    <select class="form-control" name="reports">
                                    <option value="d" <?= ($row->reports == 'd') ? 'selected' : '' ?>>Daily</option>
                                    <option value="w" <?= ($row->reports == 'w') ? 'selected' : '' ?>>Weekly</option>
                                    <option value="b" <?= ($row->reports == 'b') ? 'selected' : '' ?>>Bi-Monthly</option>
                                    <option value="m" <?= ($row->reports == 'm') ? 'selected' : '' ?>>Monthly</option>
                                    <option value="s" <?= ($row->reports == 's') ? 'selected' : '' ?>>Two Weeks</option>
                                    <option value="o" <?= ($row->reports == 'o') ? 'selected' : '' ?>>Open</option>

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
                            <?php
                            $days = [
                                'w_mon' => 'Monday',
                                'w_tue' => 'Tuesday',
                                'w_wed' => 'Wednesday',
                                'w_thu' => 'Thursday',
                                'w_fri' => 'Friday',
                                'w_sat' => 'Saturday',
                                'w_sun' => 'Sunday'
                            ];
                            ?>

                            <?php foreach ($days as $name => $label): ?>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mt-2">
                                            <!-- Hidden field ensures 0 is sent if checkbox is unchecked -->
                                            <input type="hidden" name="<?= $name ?>" value="0">
                                            <input type="checkbox"
                                                class="custom-control-input"
                                                id="<?= $name ?>"
                                                name="<?= $name ?>"
                                                value="1"
                                                <?= ($row->$name == 1) ? 'checked' : '' ?>>
                                            <label class="custom-control-label" for="<?= $name ?>"><b><?= $label ?></b></label>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>


 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->
    
        <section name="submit">
            <div class="col-sm-6 col-12">
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