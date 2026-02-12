<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Dr Manifest | Check Modify</title>
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
                            <h2 class="content-header-title float-left mb-0">Driver Manifest</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Inactive Drivers List
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

            <div class="row">
                <div class="col-12">
                    <div class="card p-2" id="searchBox">
                        <form id="searchForm" action="<?= base_url() ?>/dr_settlement/check_modify" method="post">
                            <div class="row">
                                <label class="col-md-2 pt-1">
                                    <h4>Search:</h4>
                                </label>
                                <input type="text" name="search" class="form-control col-md-8" placeholder=""
                                    value="<?= $request->getPost('search') ?>" required>
                                <div class="col-md-2">
                                    <button class="btn btn-primary w-100" type="submit">Search</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="driver" name="submit_type" checked value="driver" class="custom-control-input" />
                                            <label class="custom-control-label" for="driver">Driver Code</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="settle_no" name="submit_type" <?php if($request->getPost("submit_type")=='settle_no') echo "checked"; ?> value="settle_no" class="custom-control-input" />
                                            <label class="custom-control-label" for="settle_no">Settlement No.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="check" name="submit_type" <?php if($request->getPost("submit_type")=='check') echo "checked"; ?> value="check" class="custom-control-input" />
                                            <label class="custom-control-label" for="check">Check No.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-body">

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-datatable pb-3">
                                <?php if(isset($reports)) { ?>
                                <form action="<?= base_url() ?>/dr_settlement/check_modify_save" method="post">
                                    <input type="hidden" name="check_count" value="<?= count($reports) ?>">
                                    <table class="table display responsive nowrap" style="width:100%" id="check_table">
                                        <thead>
                                            <tr>
                                                <th>Driver Info</td>
                                                <th>Settlement Info</th>
                                                <th>Check #</th>
                                                <th>Check Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody id="searchContent">
                                            <?php
                                            $i=0; 
                                            foreach($reports as $r) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <input name="act_id_<?= $i ?>" type="hidden" value="<?= $r["id"] ?>"> 
                                                    <B><?= $r["code"] ?></B><br>
                                                    <?= $r["first_name"] ?> <?= $r["last_name"] ?>
                                                </td>
												<td>
                                                    <B><?= $r["settlement_no"] ?></B> ----- $<?= $r["total"] ?><br>
                                                    <?= h_gdate($r["settlement_date"]) ?></td>
												<td>
                                                    <input name="chk_no_<?= $i ?>" type="text" class="form-control" value="<?= $r["chk_no"] ?>"></td>
												<td>
                                                $ <input name="chk_amt_<?= $i ?>" type="text" style="display: inline;" class="form-control" value="<?= $r["chk_amt"] ?>"></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <button class="btn btn-primary px-3 mx-1 mt-1" type="submit">Save</button>
                                    </div>
                                </form>
                                            <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



            </div>
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
            $('#check_table').DataTable( {
                "paging":   false,
                "searching":   false,
                "info":     false
            } );
            <?php if(isset($_SESSION['msg'])) { ?>
                Swal.fire('Success','<?= $_SESSION['msg'] ?>','success');
            <?php } ?>
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