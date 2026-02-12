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
                                   
                                    <li class="breadcrumb-item active">Bad Debt List
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
                            <form action="<?= base_url() ?>/accounts/bad_debt" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>From Client : </b></label>
                                        <input type="text" class="form-control " name="from_client" placeholder="" value="<?= $request->getPost('from_client') ?>" />
                                        <input type="hidden" name="act" value="client">    
                                    </div>
                                </div> 
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>To Client : </b></label>
                                    <input type="text" class="form-control " name="to_client" placeholder="" value="<?= $request->getPost('to_client') ?>" />
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
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="less" name="option" checked value="less" class="custom-control-input" />
                                                <label class="custom-control-label" for="less">Less than $5 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="greater" name="option" <?php if($request->getPost("option")=='greater') echo "checked"; ?> value="greater" class="custom-control-input" />
                                                <label class="custom-control-label" for="greater">Greater Than $5</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="all" name="option" <?php if($request->getPost("option")=='all') echo "checked"; ?> value="all" class="custom-control-input" />
                                                <label class="custom-control-label" for="all">All Bad Debts </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url() ?>/accounts/bad_debt" method="post">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>From Invoice : </b></label>
                                        <input type="text" class="form-control " name="from_invoice" placeholder="" value="<?= $request->getPost('from_invoice') ?>" />
                                        <input type="hidden" name="act" value="inv">    
                                    </div>
                                </div> 
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>To Invoice : </b></label>
                                    <input type="text" class="form-control " name="to_invoice" placeholder="" value="<?= $request->getPost('to_invoice') ?>" />
                                    </div>
                                </div> 
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100" type="submit">Show</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="less2" name="option" checked value="less" class="custom-control-input" />
                                                <label class="custom-control-label" for="less2">Less than $5 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="greater2" name="option" <?php if($request->getPost("option")=='greater') echo "checked"; ?> value="greater" class="custom-control-input" />
                                                <label class="custom-control-label" for="greater2">Greater Than $5</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="all2" name="option" <?php if($request->getPost("option")=='all') echo "checked"; ?> value="all" class="custom-control-input" />
                                                <label class="custom-control-label" for="all2">All Bad Debts </label>
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
                                            $rec="";
                                            $acc="";
                                            $i=0;
                                            $tot=0;
                                            $job_tot=0;
                                        foreach($reports as $r) {
                                            if($acc!=$r["account_no"]) {
											    if($i!=0) {
                                        ?>
                                        </tbody>
                                        <tfoot>
                                        <tr> 
                                            <td colspan="2"> </td>
                                            <th>TOTAL</th>
                                            <th>$<?= number_format($job_tot,2,".","") ?></th>
                                            <th>$<?= number_format($tot,2,".","") ?></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                        <?php
											$tot=0;
											$job_tot=0;
										}
                                        ?>
										
										<hr>
                                            <h4 class="p-1">Account : <?= $r["account_no"] ?>
											<span class="float-right">Name : <?= substr($r["name"],0,30) ?></span>
                                            </h4>
										<hr>	
                                        <table class="chargesTable table display responsive nowrap" style="width:100%">
                                            <thead>  
											<tr>
												  <th>Inv. #</th>
												  <th>Job #</th>
												  <th>Ref. #</th>
												  <th>Job Amt $</th>
												  <th>Bad Debit $</th>
												  <th>Notes</th>
											  </tr>
                                            </thead>
				                            <tbody>
									<?php
                                        }
                                    ?>
									<tr>
									<td> <?= $r["invoice_no"] ?></td>
									<td><?= $r["job_no"] ?></td>
									<td><?= $r["reference_no"] ?></td>
									<td> $ <?= $r["job_chg"] ?></td>									
									<td> $ <?= $r["pay_chr"] ?></td>
									<td>
                                        <?= $r["notes"] ?><BR><i><B>[<?= trim($r["user_id"]) ?>] <?= h_gcdate($r["date_time"]) ?></b>
                                    </td>
									  </tr>
									<?php  
                                        $i++;
                                        $acc=$r["account_no"];
                                        $tot=$tot+floatval($r["pay_chr"]);
                                        $job_tot=$job_tot+floatval($r["job_chg"]);
                                    }  } ?>

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
            $('.chargesTable').DataTable({
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

</html>