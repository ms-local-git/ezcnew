<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php
         require(APPPATH."views\common\__header.php");
         
         ?>
      <title>Add New User</title>
      <?php require(APPPATH."views\common\__css.php"); ?>
       <?php require(APPPATH . "views/common/__js.php");?>

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
               <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/xls.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Two new item submitted</p>
                     <small class="text-muted">Marketing Manager</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;17kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/jpg.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">52 JPG file Generated</p>
                     <small class="text-muted">FontEnd Developer</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;11kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/pdf.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                     <small class="text-muted">Digital Marketing Manager</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;150kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/doc.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna_Strong.doc</p>
                     <small class="text-muted">Web Designer</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;256kb</small> 
            </a>
         </li>
         <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
               <h6 class="section-label mt-75 mb-0">Members</h6>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">John Doe</p>
                     <small class="text-muted">UI designer</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Michal Clark</p>
                     <small class="text-muted">FontEnd Developer</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Milena Gibson</p>
                     <small class="text-muted">Digital Marketing Manager</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna Strong</p>
                     <small class="text-muted">Web Designer</small> 
                  </div>
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
            <!--Create Offical Information -->
            <section name="invoice-printout">
            
            <div>
              <h2 class="card-title">User Information</h2><br>
            </div> 
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                           <form action="<?= base_url() ?>/User/create" method="POST" enctype="multipart/form-data">
                           <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">User Information:</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">User Id:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_id" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Account Type:</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <select name="user_type" class="form-control">
                                       <option value="administrator">Administrator</option>
                                          
                                       </select>
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label for="role_id">Role:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <select name="role_id" id="role_id" class="form-control">
                                                <?php if (!empty($roles)): ?>
                                                   <?php foreach ($roles as $role): ?>
                                                      <option value="<?= esc($role['id']) ?>"><?= esc($role['name']) ?></option>
                                                   <?php endforeach; ?>
                                                <?php else: ?>
                                                   <option value="">No role found</option>
                                                <?php endif; ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Password:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_password" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Master Password:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="master_password" required=''>
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">2 Hour Pop-Up Validate</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" name="two_hour_popup" value="1">
                                    <label class="custom-control-label"></label>
                                        </div>
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                              </div>
                              
                            </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">Other Information :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                              <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Status:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="statusActive" name="user_slevel" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="statusActive">Active</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="statusInactive" name="user_slevel" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="statusInactive">Inactive</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Session Validation:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sessionValidationYes" name="retry" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="sessionValidationYes">Yes</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sessionValidationNo" name="retry" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="sessionValidationNo">No</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>WebCam Enable:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="webcamEnableYes" name="is_webcam" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="webcamEnableYes">Yes</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="webcamEnableNo" name="is_webcam" class="custom-control-input" value="0" checked>
                                                <label class="custom-control-label" for="webcamEnableNo">No</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Allow Break (45Min):</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="allowBreakYes" name="is_lunch" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="allowBreakYes">Yes</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="allowBreakNo" name="is_lunch" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="allowBreakNo">No</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Show Session:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="showSessionYes" name="is_session_show" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="showSessionYes">Yes</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="showSessionNo" name="is_session_show" class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="showSessionNo">No</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>India Payroll:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="indiaPayrollYes" name="is_payroll" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="indiaPayrollYes">Yes</label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="indiaPayrollNo" name="is_payroll" class="custom-control-input" value="0" checked>
                                                <label class="custom-control-label" for="indiaPayrollNo">No</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Name:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_name" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Driver Code:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="driver_id" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Email:</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="email">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label for="valid-state">WhatsApp Number:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <input type="text" class="form-control" name="whatsapp_number">
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 

                                 

                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">SMS-Address:</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="sms_email">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Department:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="department" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Designation:</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="designation">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 

                                 <div class="col-sm-12 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-12 col-12">
                                       <label for="valid-state">Remarks:<span style="color:red">*</span></label>
                                       </div>
                                       <div class="col-sm-12 col-12">
                                       <input type="text" class="form-control" name="remarks" required="">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Hour Rate Day Time:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <input type="text" class="form-control" name="hour_rate_day">
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Hour Rate Night Time:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <input type="text" class="form-control" name="hour_rate_night">
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-12 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-sm-3 col-6">
                                             <label>Startup Main Window:</label>
                                          </div>
                                          <div class="col-sm-9 col-6">
                                             <select name="page_id" class="form-control">
                                                <option value="0">Order Quality Window</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-12 col-12">
                                 <div class="form-group">
                                 <button class="btn btn-primary" type="submit" style="width: 100%;height: max-content;margin-top: 22px;">Submit</button>
                                 </div>
                                 </div>
               

                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
                  
                  

                  
                           <form>
                        </div>
                     </div>
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
