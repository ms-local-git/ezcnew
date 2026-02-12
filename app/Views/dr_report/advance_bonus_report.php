<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Advance Bonus Report</title>
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
            <div class="content-header r">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="r breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Advance Bonus/Deduction Report</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">
                                        <?php if(isset($driver)) { ?>
                                            Name : <?= $driver->first_name ?> <?= $driver->last_name ?>[<?= $driver->code ?>]
                                        <?php } ?>
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
            <div class="r">
                <div class="col-md-12">
                    <div class="card">
                     
                        <div class="card-body">
                            <form action="<?= base_url() ?>/dr_report/advance_bonus_report" method="post">
                            <div class="row">
                                <div class="col-sm-2 col-12 pt-1">
                                    <label for="invalid-state"><b>Driver Code:</b><span style="color:red">*</span></label>
                                    </div>
                                    <input type="text" class="form-control col-md-6" name="search" placeholder="" value="<?= $request->getPost('search') ?>" required />
                                
                                <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary w-100" type="submit">Show</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="all" name="submit_type" checked value="all" class="custom-control-input"  />
                                            <label class="custom-control-label" for="all">Show All</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="greater" name="submit_type" <?php if($request->getPost("submit_type")=='settled') echo "checked"; ?> value="settled" class="custom-control-input" />
                                            <label class="custom-control-label" for="greater">Only Settled</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="pending" name="submit_type" <?php if($request->getPost("submit_type")=='pending') echo "checked"; ?> value="pending" class="custom-control-input" />
                                            <label class="custom-control-label" for="pending">Only Pending</label>
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
                    <div class="r">
                        <div class="col-12">
                            <div class="card">
                                
                            <?php if(isset($reports)) { ?>
                                <div class="card-datatable">
                                    <form action="<?= base_url() ?>/dr_report/advance_bonus_report_delete" method="post">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>For</th>
                                            <th>Apply Date</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Settle#</th>
                                            <th>Settle Amount</th>
                                            <th>Created by Date Time</th>
                                        </tr>
                                    </thead>
                                    <tbody id="searchContent">
                                        <?php 
                                        $i=0;
                                        foreach($reports as $r) {
                                            $i++;
                                            if($r["bon_ded"]=='bon') $type="Bonus"; else $type="Deduction";
                                        ?>
                                            <tr>
                                                <td>
                                                <?php if($r["settlement_no"]=="") { ?>
										            <input name="checked[]" type="checkbox" value="<?= $r["id"] ?>">
                                                <?php } else { ?>
										            <input name="chk<?= $i ?>" type="checkbox" value="" disabled>
                                                <?php } ?>
                                                </td>
                                                <td><?= $r["bon_ded_txt"] ?></td>
                                                <td><?= h_gdate($r["apply_date"]) ?></td>
                                                <td><?= $type ?></td>
                                                <td>$ <?= number_format($r["amount"],2,".","") ?></td>
                                                <td><?= $r["settlement_no"] ?></td>
                                                <td><?= get_settlement_amt($r["settlement_no"]) ?></td>
                                                <td><?= $r["user_id"] ?><BR><?=h_gdate($r["date_time"]) ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                        <button class="btn btn-primary px-3 mx-1 mt-1" type="submit">Delete</button>
                                    </div>
                                </form>
                                </div>
                                <?php } ?>
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