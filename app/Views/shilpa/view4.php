<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php
         require(APPPATH."views\common\__header.php");
         
         ?>
      <title>Add Job Notes</title>
      <?php require(APPPATH."views\common\__css.php"); ?>
      <!-- END: Custom CSS-->
      <style type="text/css">
         .table td{
            padding: 4px !important;
            text-align: center;
         }
          input{
            display: block;
    width: 100%;
    height: 2.714rem;
    padding: 0.438rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.45;
    color: #6e6b7b;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d8d6de;
    border-radius: 0.357rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
         }
      </style>
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
                  <h2 class="content-header-title float-left mb-0"></h2>
                  </div>
               </div><br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div>
                              <h4 class="card-title">Add Job Notes:</h4>
                              <br/>
                           </div>
                        </div>
                        <div class="card-body">
                           <form action="<?= base_url() ?>/Jobs/getRecords" method="POST" >

                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-3 col-6">
                                       <label for="valid-state">Jobs#:
                                           <span style="color:red">220112086</span>
                                        </label>
                                       
                                       </div>
                                       <div class="col-sm-3 col-6">
                                        </div>
                                       
                                     </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-12">
                                 <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="a" name="job" checked value="not" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="not">Internal Notes </label>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                        <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="b" name="job" <?php if($request->getPost("job")=='job') echo "checked"; ?> value="job" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="job">Clients Notes</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="c" name="job" checked value="not" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="not"> From India</label>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                        <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="d" name="job" <?php if($request->getPost("job")=='job') echo "checked"; ?> value="job" class="custom-control-input"  />
                                                    <label class="custom-control-label" for="job">Quote</label>
                                                </div>
                                            </div>
                                 </div>

                                 
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                         <div class="col-sm-3 col-6">
                                           <label for="valid-state">Person: </label>
                                         </div> 
                                          <div class="col-sm-6 col-12"> 
                                              <input type="text" class="form-control" >
                                          </div>
                                          
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6 col-12"></div>
                                 <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                         <div class="col-sm-3 col-6">
                                           <label for="valid-state">Notes: </label>
                                         </div> 
                                          <div class="col-sm-9 col-12"> 
                                              <textarea type="text" class="form-control"  rows="4" >
                                              </textarea>    
                                          </div>
                                          
                                        </div>
                                    </div>
                                 </div>
                            
                                  <div class="col-sm-6"></div><br>
                                   <div class="col-sm-2"></div>
                                  <div class="col-sm-2 text-center">
                                    <button class="btn btn-primary w-100" type="submit" >save</button>
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
            </section>
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

      <script type="text/javascript">
         function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input="<input type='text' id='new_" +new_chq_no+"'>";
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
      </script>
   </body>
   <!-- END: Body-->
</html>