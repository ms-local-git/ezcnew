<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Vehicle Expense Listing</title>
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
                            <h2 class="content-header-title float-left mb-0">Co Vehicles</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Expense List
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
                            <form action="<?= base_url() ?>/co_vehicles/expense_listing" method="post">
                            <div class="row">
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>From Date:<span style="color:red">*</span> </b></label>
                                        <input type="date" class="form-control " name="from_date" placeholder="" value=" required="<?= $request->getPost('from_date') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>To Date:<span style="color:red">*</span> </b></label>
                                        <input type="date" class="form-control " name="to_date" placeholder="" value=" required="<?= $request->getPost('to_date') ?>" />
                                    </div>
                                </div> 
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" style="width: 100%;
                                        height: max-content;
                                        margin-top: 22px;">Show</button>
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-sm-10 col-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>Vehicle : </b></label>
                                                <select class="form-control" name="vehicle">
                                                    <option value="">All</option>
                                                    <?php foreach ($vehicles as $v) { ?>
                                                    <option value="<?=$v['id'] ?>" <?php if($request->getPost('vehicle')==$v['id']) { ?>selected<?php } ?>>
                                                        <?= $v["plate"] ?>-<?= $v["type"] ?>-<?= $v["color"] ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>Head : </b></label>
                                                <select class="form-control" name="head">
                                                    <option value="">All</option>
                                                    <option value="Toll" <?php if($request->getPost('head')=='Toll') { ?>selected<?php } ?> >Tolls</option>
                                                    <option value="Gas" <?php if($request->getPost('head')=='Gas') { ?>selected<?php } ?> >Gas</option>
                                                    <option value="Expenses" <?php if($request->getPost('head')=='Expenses') { ?>selected<?php } ?> >Expenses</option>
                                                    <option value="Insurance" <?php if($request->getPost('head')=='Insurance') { ?>selected<?php } ?> >Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="invalid-state"></label>
                                                <select class="form-control" name="sub_head">
                                                    <option value="">All</option>
                                                    <option value="truck repair" <?php if($request->getPost('sub_head')=='truck repair') { ?>selected<?php } ?> >Truck Repair</option>
                                                    <option value="Car Parking" <?php if($request->getPost('sub_head')=='Car Parking') { ?>selected<?php } ?> >Car Parking</option>
                                                    <option value="HOTEL" <?php if($request->getPost('sub_head')=='HOTEL') { ?>selected<?php } ?> >HOTEL</option>
                                                    <option value="Truck toe" <?php if($request->getPost('sub_head')=='Truck toe') { ?>selected<?php } ?> >Truck toe</option>
                                                    <option value="Other" <?php if($request->getPost('sub_head')=='Other') { ?>selected<?php } ?> >Insurance</option>
                                                </select>
                                            </div>
                                        </div>
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
                                <table class="datatables-basic table display responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>VEHICLE </th>
                                            <th>EXPENSE DATE</th>
                                            <th>ACC.  HEAD</th>
                                            <th>Sub Category</th>
                                            <th>AMOUNT</th>
                                            <th>Invoice#/Bill#</th>
                                            <th>Job#/OdoMeter</th>
                                            <th>Driver#</th>                                
                                            <th>Attachment</th>
                                            <th>ENTRY BY</th>
                                            <th>ACTION </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            if(isset($reports)) {
                            $cnt=0;
                            $tot=0;
                            foreach($reports as $r) {
                            $cnt++;
                            $name=$r["plate"].' - '.$r["type"]; 
                            $tot=$tot+floatval($r["amount"]);
                            $invoice_number="";
                            $job_number="";
                            if($r["invoice_number"]!="" && $r["invoice_number"]!="0") $invoice_number=$r["invoice_number"];
                            if($r["transcation_no"]!="" && $r["transcation_no"]!="0") $invoice_number=$r["transcation_no"];
                            if($r["job_no"]!="" && $r["job_no"]!="0") $job_number=$r["job_no"];
                            if($r["odo_meter"]!="" && $r["odo_meter"]!="0") $job_number=$r["odo_meter"];
                            $attachment_str=get_attachments($r['id'],$r['bill_image']);
                        ?>
                                        <tr>
                                            <td><?= $name;?></td>
                                            <td><?= date("M/d/Y",strtotime($r["expense_date"]));?></td>
                                            <td><?= strtoupper($r["account_head"]);?></td>
                                            <td><?= strtoupper($r["name2"]);?></td>
                                            <td>$ <?= $r["amount"];?></td>
                                            <td><?= $invoice_number;?></td>
                                            <td><?= $job_number;?></td>
                                            <td><?= $r["driver_code"];?></td>              
                                            <td><?= $attachment_str;?></td>
                                            <td><?= $r["entry_by"];?>&nbsp;<?= date("m/d/Y", strtotime($r['entry_datetime']));?></td>
                                            <td>
                                            <?php 
                                                if(strtotime($r['entry_datetime']) >strtotime("-30 day"))
                                                    echo '<input name="Submit7" type="button" class="button_2" value="Edit" onClick="edit_vehicle_expense('.$r["id"].');">';
                                            ?>
                                            </td>
                                        </tr>

<?php } } ?>
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

        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>