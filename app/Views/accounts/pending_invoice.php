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
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php require(APPPATH."views\common\__header_menu.php"); ?>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/xls.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/jpg.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/pdf.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/doc.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img
                            src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
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

                                    <li class="breadcrumb-item active">Pending Invoice Report
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
                                <form action="<?= base_url() ?>/accounts/pending_invoice" method="post">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>From Client : </b></label>
                                                <input type="text" class="form-control " name="from_client"
                                                    placeholder="" value="<?= $request->getPost('from_client') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>To Client : </b></label>
                                                <input type="text" class="form-control " name="to_client" placeholder=""
                                                    value="<?= $request->getPost('to_client') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-12">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>Days : </b></label>
                                                <input type="number" class="form-control " name="days" placeholder=""
                                                    value="<?= $request->getPost('days') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button class="btn btn-primary w-100" type="submit" style="width: 100%;
                                        height: max-content;
                                        margin-top: 22px;">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="complete" name="option" checked
                                                            value="complete" class="custom-control-input" />
                                                        <label class="custom-control-label" for="complete">Complete
                                                            Invoice Payment </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="all" name="option"
                                                            <?php if($request->getPost("option")=='all') echo "checked"; ?>
                                                            value="all" class="custom-control-input" />
                                                        <label class="custom-control-label" for="all">Any Invoice
                                                            Due</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="partial" name="option"
                                                            <?php if($request->getPost("option")=='partial') echo "checked"; ?>
                                                            value="partial" class="custom-control-input" />
                                                        <label class="custom-control-label" for="partial">Only Partial
                                                            Payment Due </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- <div class="form-group">
                                                <button class="btn btn-primary w-100" type="submit">Show</button>
                                            </div> -->
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="g1" name="amt" checked value="1"
                                                            class="custom-control-input" />
                                                        <label class="custom-control-label" for="g1">Greater Than $1
                                                            Amount</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="g0" name="amt"
                                                            <?php if($request->getPost("amt")=='0') echo "checked"; ?>
                                                            value="0" class="custom-control-input" />
                                                        <label class="custom-control-label" for="g0">Greater Than $1
                                                            Amount</label>
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
                                <table class="chargesTable table display responsive nowrap" style="width:100%">
                                <?php 
                                if(isset($reports)) {
                                    $i=0;
                                    $inv_tot=0;
                                    $due_tot=0;
                                    $hold_clt_tot=0;
                                    $client=0;
                                    $hold_inv_tot=0;
                                    $g_inv_tot=0;
                                    $g_due_tot=0;
                                    $g_hold_clt_tot=0;
                                    foreach($reports as $r) {
                                        $hold_inv=0;
                                        $hold_inv=get_holding_inv($r["invoice_no"]);
                                                
                                        $hold_clt=0;
                                        $hold_clt=get_holding_client($r["client_id"]);

                                        if($client!=$r["client_code"]) {
                                            if($i!=0) {
                                ?>
                                </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total : </th>
                                            <th><?= number_format($inv_tot,2,".","") ?></th>
                                            <th><?= number_format($due_tot,2,".","") ?></th>
                                            <th><?= number_format($hold_clt,2,".","") ?></th>
                                        </tr>
                                    </tfoot>
                                    <?php            
                                        $inv_tot=0;
                                        $due_tot=0;
                                        $g_hold_clt_tot=$g_hold_clt_tot+$hold_clt;
                                        $hold_clt_tot=0;
                                        }	
                                    ?>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">Client # : <?= $r["client_code"] ?></div>
                                        <div class="col-md-4">
                                            (<?= $r["client_name"] ?>)
                                            <BR>[Contact No: <?= $r["client_phone"] ?>
                                        </div>
                                        <div class="col-md-4 text-right">Total Holding : <?= $hold_clt ?></td>
                                        </div>
                                        <hr>
                                        <table class="chargesTable table display responsive nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Invoice # </td>
                                                    <th>From Date </td>
                                                    <th>To date </td>
                                                    <th>Invoice Date </td>
                                                    <th>Inv. Amt.</td>
                                                    <th>Due Amt.</td>
                                                    <th>Hold</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        <?php
								            }
                                            $i++;
                                        ?>
                                                <tr>
                                                    <td><?= $r["invoice_no"] ?></td>
                                                    <td><?= h_gdate($r["from_date"]) ?></td>
                                                    <td><?= h_gdate($r["to_date"]) ?></td>
                                                    <td><?= $r["invoice_date"] ?></td>
                                                    <td><?= $r["total"] ?></td>
                                                    <td><?= $r["now_balance"] ?></td>
                                                    <td><?= $hold_clt ?></td>
                                                </tr>
                                        <?php
                                            $inv_tot=$inv_tot+$r["total"];
                                            $due_tot=$due_tot+$r["now_balance"];
                                            $hold_clt_tot=$hold_inv_tot+$hold_clt;

                                            $g_inv_tot=$g_inv_tot+$r["total"];
                                            $g_due_tot=$g_due_tot+$r["now_balance"];

                                            $client=$r["client_code"];
                                            } 
                                            if($i!=0) {
		                                        $g_hold_clt_tot=$g_hold_clt_tot+$hold_clt;
                                        ?>
                                            <tfoot>
                                                <tr>
                                                    <th>Total : </th>
                                                    <th><?= number_format($inv_tot,2,".","") ?></th>
                                                    <th><?= number_format($due_tot,2,".","") ?></th>
                                                    <th><?= number_format($hold_clt,2,".","") ?></th>
                                                </tr>
                                                <tr class="form_heading">
                                                    <th>Grand Total : </th>
                                                    <th><?= number_format($inv_tot,2,".","") ?></th>
                                                    <th><?= number_format($due_tot,2,".","") ?></th>
                                                    <th><?= number_format($hold_clt,2,".","") ?></th>
                                                </tr>
                                            </tfoot>
                                        <?php
                                            } }
                                        ?>

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
            $('.chargesTable').DataTable();
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