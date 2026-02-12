<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php
         require(APPPATH."views\common\__header.php");
         
         ?>
      <title>Credit Card Notes</title>
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
                        
                        <div class="card-body">
                           <form action="<?= base_url() ?>/credit_cards/create" method="POST" enctype="multipart/form-data">
                           <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">Credit Card Note Entry:</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <!-- <label for="valid-state" style="text-align: right;">*</label>
                                       </div>
                                       <div class="col-sm-3 col-6"> -->
                                 <select name="job_id" class="form-control">
                                 <option value="1">Job#</option>
                                 <option value="2">Invoice#</option>
                                       </select>
                                      </div>
                                      <div class="col-sm-6 col-6">
                                       <input type="text" name="job_no" class="form-control">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Action</label>
                                       </div>
                                       <div class="col-sm-3 col-3">
                                       <div class="custom-control custom-checkbox mt-2">
                                       <input type="checkbox" class="custom-control-input" id="Sunday" checked="" name="action" value="refund">
                                            <label class="custom-control-label" for="Sunday"><b>Refund</b></label>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-5">
                                       <div class="form-group">
                                        
                                        <div class="custom-control custom-checkbox mt-2">
                                       <input type="checkbox" class="custom-control-input" id="monday" checked="" name="action" value="done_amount">
                                       <label class="custom-control-label" for="monday"><b>Additional Charges</b></label>
                                        </div>
 
                                    </div>
                                      </div>

                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state" style="text-align: right;">Amount</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <input type="text" name="amount" class="form-control">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state" style="text-align: right;">Notes</label>
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <textarea class="form-control" name="notes" rows="3" placeholder="type here..."></textarea>
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       </div>
                                       <div class="col-sm-9 col-6">
                                       <div class="form-group">
                     <button class="btn btn-primary" type="submit" style="width: 100%;
                        height: max-content;
                        margin-top: 22px;">Submit</button>
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