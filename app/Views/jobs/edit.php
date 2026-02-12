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
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div>
                              <h6 class="card-title">Edit User ::</h6>
                              <br/>
                           </div>
                        </div>
                        <div class="card-body">
                           <form action="<?= base_url() ?>/User/update" method="POST" enctype="multipart/form-data">
                           <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">User Information :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">User Id :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_id" value="<?= $row['user_id'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Password :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_password" value="<?= $row['user_password'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Master Password :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="master_password" value="<?= $row['master_password'] ?>">
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
                                       <select name="" class="form-control">
                                       <option value="<?= $row['department'] ?>"><?= $row['department'] ?></option>
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
                                       <label for="valid-state">2 Hour Pop-Up Validate</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" name="two_hour_popup">
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
                                       <label for="valid-state">Driver Code:</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="driver_id" value="<?= $row['driver_id'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Name :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="user_name" value="<?= $row['user_name'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Email :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">SMS-Address :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="sms_email" value="<?= $row['sms_email'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Department :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="department" value="<?= $row['department'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Desination :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="designation" value="<?= $row['designation'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Remarks :</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" class="form-control" name="remarks" value="<?= $row['remarks'] ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-6"></div>
                                 <div class="col-sm-3 col-3"></div>
                                 <div class="col-sm-6 col-6">
                  <div class="form-group">
                     <button class="btn btn-primary" type="submit" style="width: 100%;
                        height: max-content;
                        margin-top: 22px;">Submit</button>
                  </div>
               </div>
               <div class="col-sm-3 col-3"></div>

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