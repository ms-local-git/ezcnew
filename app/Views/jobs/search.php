<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Job Search</title>
    <?php require(APPPATH."views\common\__css.php"); ?>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<style>
    .label-inline {
        padding-top: 9px;
    }
</style>
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php require(APPPATH."views\common\__header_menu.php"); ?>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <?php require(APPPATH."views\common\__left_menu.php"); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-7 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Jobs</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Search
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-5 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <a href="<?= base_url() ?>/jobs/new_job" class="btn btn-primary">Add New Job</a>
                        <button class="btn btn-primary" id="show_filter_btn">Hide Filters</button>
                    </div>
                </div>
            </div>
          



            <section id="invoice-printout">
            <div class="row">
                <div class="col-md-12">
                    
                <!-- <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url() ?>/jobs/job_search" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group row">
                                        <label for="invalid-state" class="col-md-4 label-inline"><b>Job#: </b></label>
                                        <input type="text" class="form-control col-md-8" name="job_no" value="<?= $request->getPost('job_no') ?>" />
                                        <input type="hidden" name="act" value="job_no">    
                                    </div>
                                </div> 
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100" type="submit">Show</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div> -->

                    <div class="card hidden" id="search_filter" style="display:none;">
                        <div class="card-body">
                            <form action="<?= base_url() ?>/jobs/job_search" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group row">
                                        <label for="invalid-state" class="col-md-4 label-inline"><b>From Job# : </b></label>
                                        <input type="text" class="form-control col-md-8" name="from_job" placeholder="" value="<?= $request->getPost('from_job') ?>" />
                                        <input type="hidden" name="act" value="range">    
                                    </div>
                                </div> 
                                <div class="col-md-5 col-12">
                                    <div class="form-group row">
                                    <label for="invalid-state" class="col-md-4 label-inline"><b>To Job# : </b></label>
                                    <input type="text" class="form-control col-md-8" name="to_job" placeholder="" value="<?= $request->getPost('to_job') ?>" />
                                    </div>
                                </div> 
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100" type="submit">Show</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        <!-- </div>
                    </div>

                    <div class="card">
                        <div class="card-body"> -->
                            <form action="<?= base_url() ?>/jobs/job_search" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group row">
                                        <label for="invalid-state" class="col-md-4 label-inline"><b>Search : </b></label>
                                        <input type="text" class="form-control col-md-8" name="txt" placeholder="" value="<?= $request->getPost('txt') ?>" />
                                        <input type="hidden" name="act" value="custom">    
                                    </div>
                                </div> 
                                <div class="col-md-5 col-12">
                                    <div class="form-group row">
                                    <label for="invalid-state" class="col-md-4 label-inline"><b>Type : </b></label>
                                    <select class="form-control col-md-8" name="cust_search">
                                        <option value="job_no" <?php if($request->getPost('cust_search')=="job_no") echo "selected"; ?>>Job No</option>
                                        <option value="reference_no" <?php if($request->getPost('cust_search')=="reference_no") echo "selected"; ?>>Reference No</option>
                                        <option value="clients.name" <?php if($request->getPost('cust_search')=="clients.name") echo "selected"; ?>>Client Name</option>
                                        <option value="clients.account_no" <?php if($request->getPost('cust_search')=="clients.account_no") echo "selected"; ?>>Client Account</option>
                                        <option value="from_name" <?php if($request->getPost('cust_search')=="from_name") echo "selected"; ?>>Shipper Name</option>
                                        <option value="from_address1" <?php if($request->getPost('cust_search')=="from_address1") echo "selected"; ?>>Shipper Address1</option>
                                        <option value="from_city" <?php if($request->getPost('cust_search')=="from_city") echo "selected"; ?>>Shipper city</option>
                                        <option value="from_zip" <?php if($request->getPost('cust_search')=="from_zip") echo "selected"; ?>>Shipper Zip</option>								
                                        <option value="to_name" <?php if($request->getPost('cust_search')=="to_name") echo "selected"; ?>>Consignee Name</option>
                                        <option value="to_address1" <?php if($request->getPost('cust_search')=="to_address1") echo "selected"; ?>>Consignee Address1</option>
                                        <option value="to_city" <?php if($request->getPost('cust_search')=="to_city") echo "selected"; ?>>Consignee City</option>								
                                        <option value="to_zip" <?php if($request->getPost('cust_search')=="from_date") echo "selected"; ?>>Consignee Zip</option>
                                        <option value="from_date" <?php if($request->getPost('cust_search')=="from_date") echo "selected"; ?>>from_date</option>
                                        <option value="to_date" <?php if($request->getPost('cust_search')=="to_date") echo "selected"; ?>>to_date</option>
                                        <option value="phase" <?php if($request->getPost('cust_search')=="phase") echo "selected"; ?>>Status</option>
                                        <option value="commodity_desc" <?php if($request->getPost('cust_search')=="commodity_desc") echo "selected"; ?>>Commodity</option>
                                        <option value="service_type" <?php if($request->getPost('cust_search')=="service_type") echo "selected"; ?>>Service type</option>
                                        <option value="total_pcs" <?php if($request->getPost('cust_search')=="total_pcs") echo "selected"; ?>>Total Pcs.</option>
                                        <option value="total weight" <?php if($request->getPost('cust_search')=="total weight") echo "selected"; ?>>Total Weight</option>
                                    </select>
                                    </div>
                                </div> 
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100" type="submit">Show</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                              
                                <div class="card-datatable">
                                <table class="chargesTable table display responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Job #</th>
                                            <th>Account</th>
                                            <th>Ref #</th>
                                            <th>Date/Time</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(isset($jobs)) {
                                        foreach ($jobs as $j) {
                                            $driver_code='';

                                            $driver_code1=get_driver_code1($j['driver_id1']);
                                            $driver_code2=get_driver_code1($j['driver_id2']);
                                            $driver_code3=get_driver_code1($j['driver_id3']);
                                            $driver_code4=get_driver_code1($j['driver_id4']);
                                            $driver_code5=get_driver_code1($j['driver_id5']);
                                            $driver_code6=get_driver_code1($j['driver_id6']);																				

                                            if($driver_code1!='')  $driver_code=$driver_code.$driver_code1.",";
                                            if($driver_code2!='')  $driver_code=$driver_code.$driver_code2.",";
                                            if($driver_code3!='')  $driver_code=$driver_code.$driver_code3.",";
                                            if($driver_code4!='')  $driver_code=$driver_code.$driver_code4.",";
                                            if($driver_code5!='')  $driver_code=$driver_code.$driver_code5.",";
                                            if($driver_code6!='')  $driver_code=$driver_code.$driver_code6.",";

                                            if($driver_code!='') $driver_code=substr($driver_code,0,strlen($driver_code)-1);
									
                                        ?>
                                        <tr class="view_job" data-id="<?= $j['id'] ?>" style="cursor:pointer;" data-toggle="modal" data-target="#job_modal">
                                            <td><?= $j['job_no'] ?>[<?= $j['int_job_no'] ?></span></td>
                                            <td><?= strtoupper($j['account_no']) ?></span></td>
                                            <td><?= $j['reference_no'] ?></td>
                                            <td><?= h_gdate($j['from_date']) ?><br><?= h_gtime($j['from_time']) ?></td>							  
                                            <td><?= $j['from_name'] ?></td>							  							  							  
                                            <td><?= $j['to_name'] ?></td>
                                            <td><?= strtoupper($j['phase']) ?></td>
                                        </tr>
                                        <?php
                                        } }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

               
        </div>
    </div>
    <!-- END: Content-->

    <!-- Modal -->
    <div class="modal fade" id="job_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="max-width:1100px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
                    <button type="button" class="close bg-0 m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="job_modal_body">

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Edit Job</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


<?php require(APPPATH.'views\common\__footer.php'); ?>
  <!-- BEGIN: Page JS-->

    
    <!-- END: Page JS-->

    <script>
        $(document).ready(function(){
            $('.chargesTable').DataTable({
                // "paging":   false,
                // "searching":   false,
                "info":     false
            });
            
            <?php 
                if(!isset($jobs)) {
            ?>
                $('#search_filter').show();
                $('#search_filter').removeClass('hidden');
                $('#show_filter_btn').html('Hide Filters');
            <?php } else { ?>
                $('#show_filter_btn').html('Show Filters');
            <?php } ?>

            $('#show_filter_btn').click(function() {
                if($('#search_filter').hasClass('hidden')) {
                    $('#search_filter').show();
                    $('#search_filter').removeClass('hidden');
                    $('#show_filter_btn').html('Hide Filters');
                } else {
                    $('#search_filter').hide();
                    $('#search_filter').addClass('hidden');
                    $('#show_filter_btn').html('Show Filters');
                }
            });
        });

        $('.view_job').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/jobs/view_job",
                data: "id="+id,
                dataType: "html",
                success: function (response) {
                    $('#job_modal_body').html(response);
                }
            });
        });

        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

    </script>
</body>

</html>