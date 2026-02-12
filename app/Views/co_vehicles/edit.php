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
                              <h6 class="card-title">Edit Vehicle ::</h6>
                              <br/>
                           </div>
                        </div>
                        <div class="card-body">
                           <form action="<?= base_url() ?>/Vehicle/update" method="POST">
                           <div class="row">
                              <input type="hidden" name="id" value="<?= $row['id'] ?>">
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>VIN: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="vin" placeholder=" " value="<?= $row['vin'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Plate: </b></label>
                                    <input type="text" class="form-control " name="plate" placeholder=" " value="<?= $row['plate'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Type:</b> </label>
                                    <input type="text" class="form-control " name="type" placeholder="" value="<?= $row['type'] ?>" >
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Date of Purchase:</b> </label>
                                    <input type="text" class="form-control " name="purchase_date" placeholder="" value="<?= $row['purchase_date'] ?>">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Make : </b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="make" placeholder="" value="<?= $row['make'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Model:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="model" placeholder="" value="<?= $row['model'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Year #:</b> </label>
                                    <input type="text" class="form-control " name="year" placeholder="" value="<?= $row['year'] ?>"  />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Usable Weight:</b></label>
                                    <input type="text" class="form-control " name="usable_weight" placeholder="" value="<?= $row['usable_weight'] ?>" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Color: </b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="color" placeholder="" value="<?= $row['color'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>GW:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="gw" placeholder="" value="<?= $row['gw'] ?>" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Width:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" name="width" value="<?= $row['width'] ?>">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Length: </b></label>
                                    <input type="text" class="form-control " name="length" placeholder="" value="<?= $row['length'] ?>" required />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Hut:</b></label>
                                    <input type="date" class="form-control " name="hut" placeholder="" value="<?= $row['hut'] ?>" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Registration: </b></label>
                                    <input type="date" class="form-control" name="registration" value="<?= $row['registration'] ?>">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Insurance:</b> </label>
                                    <input type="text" class="form-control " name="insurance" placeholder="" value="<?= $row['insurance'] ?>" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Sold Date:</b> </label>
                                    <input type="date" class="form-control " name="sold_date" placeholder="" value="<?= $row['sold_date'] ?>" />
                                 </div>
                              </div>
                              <div class="col-sm-12 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Depriciation:</b> </label>
                                    <textarea class="form-control" name="depriciation" rows="3" placeholder="type here..." value="<?= $row['depriciation'] ?>"></textarea>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Vehicle Image:</b> </label>
                                    <input type="file" class="form-control " name="image" placeholder="" value="" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Hut Image:</b> </label>
                                    <input type="file" class="form-control " name="hut_image" placeholder="" value="" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Registration Image:</b> </label>
                                    <input type="file" class="form-control " name="registration_image" placeholder="" value="" />
                                 </div>
                              </div>
                              <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Insurance Image:</b> </label>
                                    <input type="file" class="form-control " name="insurance_image" placeholder="" value="" />
                                 </div>
                              </div>
                           </div>
                           <form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
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