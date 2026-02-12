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
                                   
                                    <li class="breadcrumb-item active">Job Charges Pending Report
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
                            <form action="<?= base_url() ?>/accounts/pending_payment" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Client : </b></label>
                                    <input type="text" class="form-control " name="client" placeholder="" value="<?= $request->getPost('client') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>Invoice : </b></label>
                                    <input type="text" class="form-control " name="invoice" placeholder="" value="<?= $request->getPost('invoice') ?>" />
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
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="all" name="option" checked value="all" class="custom-control-input" />
                                                <label class="custom-control-label" for="all">All </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="greater" name="option" <?php if($request->getPost("option")=='greater') echo "checked"; ?> value="greater" class="custom-control-input" />
                                                <label class="custom-control-label" for="greater">Greater  Than $1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="dues" name="option" <?php if($request->getPost("option")=='dues') echo "checked"; ?> value="dues" class="custom-control-input" />
                                                <label class="custom-control-label" for="dues">Show only Dues </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="excess" name="option" <?php if($request->getPost("option")=='excess') echo "checked"; ?> value="excess" class="custom-control-input" />
                                                <label class="custom-control-label" for="excess">Excess Receive</label>
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
                                                $job_tot=0;
                                                $giv_tot=0;					
                                                $job_bal=0;	
                                                $invoice_no="";
                                            foreach($reports as $r) {
                                                if($invoice_no!=$r["invoice_no"])
                                                {
                                                    $invoice_no=$r["invoice_no"];
                                                    if($i!=0)
                                                    { ?>
                                                        </tbody>
                                                    <tfoot>
                                                    <tr> 
                                                        <th colspan="2"> </th>
									  <th>TOTAL</th>
									  <th>$<?= number_format($job_tot,2,".","") ?></th>
									  <th>$<?= number_format($giv_tot,2,".","") ?></th>
									  <th>$<?= number_format($bal_tot,2,".","") ?></th>
									  </tr>
                                      </tfoot>
                                </table>
                                        <?php }
                                            ?>
                                            <hr>
                                            <h4 class="p-1">Client #: <?= substr($name,0,20) ?> (<?= $client ?>)
                                                <span class="float-right">Invoice #: <?= $invoice_no ?>(From Date :&nbsp; <B><?= date('Y-m-d') ?></b>&nbsp; &nbsp;To&nbsp;&nbsp; 
                                                    <b><?= date('Y-m-d') ?></b>)  </span>
                                            </h4>
                                            <hr>
                                            <table class="chargesTable table display responsive nowrap" style="width:100%">
                                                <thead>
                                            <tr>
                                                <th>Invoice #</th>
                                                <th>Job #</th>
                                                <th>Reference #</th>
                                                <th>Job Amt.</th>
                                                <th>Give Amt.</th>
                                                <th>Bal Amt.</th>
                                            </tr>
                                                </thead>
				<tbody>
                                            <?php
                                                        $job_tot=0;
                                                        $giv_tot=0;					
                                                        $bal_tot=0;										
                                                }
                                                ?>
                <tr>
					  <td><?= $r["invoice_no"] ?></td>
  					  <td><?= $r["job_no"] ?></td>
					  <td><?= $r["reference_no"] ?></td>
					  <td>$<?= number_format($r["job_chg"],2,".","") ?></td>
					  <td>$<?= number_format((floatval($r["job_chg"])-floatval($r["job_bal"])),2,".","") ?></td>
					  <td>$<?= number_format($r["job_bal"],2,".","") ?></td>
					  </tr>
                         <?php
                         $job_tot=$job_tot+$r["job_chg"];		
                                                $giv_tot=$giv_tot+(floatval($r["job_chg"])-floatval($r["job_bal"]));
                                                $bal_tot=$bal_tot+$r["job_bal"];						
                                                                            
                                                $i++;
                                                $invoice_no=$r["invoice_no"];
                                            } ?>
                                    <?php  } ?>

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