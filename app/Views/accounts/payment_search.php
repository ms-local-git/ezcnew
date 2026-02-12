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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Accounts Recievable</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Payment Search
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                           
                        </div>
                    </div>
                </div>
            </div>
          



            <section id="invoice-printout">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <form action="<?= base_url() ?>/accounts/payment_search" method="post">
                                        <div class="form-group">
                                            <label for="invalid-state"><b>By Job # : </b></label>
                                            <input type="text" class="form-control " name="job_no" placeholder="" value="<?= $request->getPost('job_no') ?>" />
                                            <input type="hidden" name="opt" value="job">  
                                        </div>
                                        <input type="submit" value="" style="display:none">
                                    </form>
                                </div> 
                                <div class="col-md-4 col-12">
                                    <form action="<?= base_url() ?>/accounts/payment_search" method="post">
                                        <div class="form-group">
                                            <label for="invalid-state"><b>By Ref # : </b></label>
                                            <input type="text" class="form-control " name="ref_no" placeholder="" value="<?= $request->getPost('ref_no') ?>" />
                                            <input type="hidden" name="opt" value="ref">  
                                        </div>
                                        <input type="submit" value="" style="display:none">
                                    </form>
                                    </div>
                                <div class="col-md-4 col-12">
                                    <form action="<?= base_url() ?>/accounts/payment_search" method="post">
                                        <div class="form-group">
                                            <label for="invalid-state"><b>By Check # : </b></label>
                                            <input type="text" class="form-control " name="ch_no" placeholder="" value="<?= $request->getPost('ch_no') ?>" />
                                            <input type="hidden" name="opt" value="che">  
                                        </div>
                                        <input type="submit" value="" style="display:none">
                                    </form>
                                    </div>
                                <div class="col-md-4 col-12">
                                    <form action="<?= base_url() ?>/accounts/payment_search" method="post">
                                        <div class="form-group">
                                            <label for="invalid-state"><b>By Invoice # : </b></label>
                                            <input type="text" class="form-control " name="invoice_no" placeholder="" value="<?= $request->getPost('invoice_no') ?>" />
                                            <input type="hidden" name="opt" value="inv">  
                                        </div>
                                        <input type="submit" value="" style="display:none">
                                    </form>
                                    </div>
                                <div class="col-md-4 col-12">
                                    <form action="<?= base_url() ?>/accounts/payment_search" method="post">
                                        <div class="form-group">
                                            <label for="invalid-state"><b>By Co. Account # : </b></label>
                                            <input type="text" class="form-control " name="acc_no" placeholder="" value="<?= $request->getPost('acc_no') ?>" />
                                            <input type="hidden" name="opt" value="acc">  
                                        </div>
                                        <input type="submit" value="" style="display:none">
                                    </form>
                                    </div>
                                </div> 
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
                                <table id="chargesTable" class="table display responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Acc # </th>
											<th>JOB #</th>
											<th>INV# </th>
											<th>Given</th>
											<th>Ch. # </th>
											<th>Ch. Amt.</a> </th>									
											<th>Trans Type</a> </th>
											<th>Date Time</a> </th>
                                        </tr>
                                    </thead>
                                    <tbody id="searchContent">
                                        <?php 
                                            if(isset($reports)) {
                                            foreach($reports as $r) {
                                                if($r["trans_type"]=="rec") $title="Ch. Rec.";
                                                if($r["trans_type"]=="void") $title="Pay. Void";
                                                if($r["trans_type"]=="unknown_rec") $title="Not Mentioned";
                                                if($r["trans_type"]=="bad_d") $title="Bad De..";
                                                if($r["trans_type"]=="rec_u") $title="Rec. Unknown";								
                                                if($r["trans_type"]=="rec_h") $title="Rec. Holding";
                                                if($r["trans_type"]=="rec" || $r["trans_type"]=="bad_d" || $r["trans_type"]=="rec_u"|| $r["trans_type"]=="rec_h") {
                                        ?>
                                            <tr>
                                                <td height="26"><?= $r["account_no"] ?></td>
												<td>J#:<?= $r["reference_no"] ?><BR> R#:<?= $r["job_no"] ?></td>
												<td><?= get_invoice_no_by_job($r["inv_id"]) ?></td>
												<td><?= $r["pay_chr"] ?></td>													
												<td><?= $r["ch_no"] ?></td>
												<td><?= $r["ch_amt"] ?></td>													
												<td><?= $title ?></td>
												<td><I>[<?= $r["user_id"] ?>]<BR><?= h_gcdate($r["date_time"]) ?></i></td>
                                            </tr>
                                        <?php } } ?>
                                    <?php  } ?>
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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


<?php require(APPPATH.'views\common\__footer.php'); ?>
  <!-- BEGIN: Page JS-->

    
    <!-- END: Page JS-->

    <script>
        $(document).ready(function(){
            $('#chargesTable').DataTable({
                "paging":   false,
                "searching":   false,
                "info":     false
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
<!-- END: Body-->

</html>