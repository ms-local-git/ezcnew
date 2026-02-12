<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Vehicle Maximum Value Manage</title>
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
                            <h2 class="content-header-title float-left mb-0">Co Vehicles</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item active">Vehicle Max Value
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
                    <div class="card p-2">
                        <form action="<?= base_url() ?>/co_vehicles/max_value_update" method="post">

                            <?php if(isset($values)) { ?>
                            <div class="row">
                                <label class="col-md-2" style="padding-top: 9px;">Dr Miles Vs Job miles:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="dr_miles_jobs" class="form-control text-right" value="<?=$values->dr_miles_jobs?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                                    <div class="col-md-2"></div>
                                <label class="col-md-2" style="padding-top: 9px;">Dr Miles Paid:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="dr_miles" class="form-control text-right" value="<?=$values->dr_miles?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-md-2" style="padding-top: 9px;">Dr Tolls Paid:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="dr_toll" class="form-control text-right" value="<?=$values->dr_toll?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <label class="col-md-2" style="padding-top: 9px;">Dr Gas Paid:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="dr_gas" class="form-control text-right" value="<?=$values->dr_gas?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-md-2" style="padding-top: 9px;">Dr Exp Paid:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="dr_exp" class="form-control text-right" value="<?=$values->dr_exp?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <label class="col-md-2" style="padding-top: 9px;">Avg Dr. miles:</label>
                                <div class="input-group col-md-3">
                                <input type="text" name="dr_avg_miles" class="form-control text-right" value="<?=$values->dr_avg_miles?>">
                                <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-md-2" style="padding-top: 9px;">Avg Job miles:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="job_avg_miles" class="form-control text-right" value="<?=$values->job_avg_miles?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <label class="col-md-2" style="padding-top: 9px;">OdoMeter Percentage:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="odo_meter_per" class="form-control text-right" value="<?=$values->odo_meter_per?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-md-2" style="padding-top: 9px;">Auto email of Last Days:</label>
                                <div class="input-group col-md-3">
                                    <input type="text" name="last_from_days" class="form-control text-right" value="<?=$values->last_from_days?>">
                                </div>
                            </div>
                            <div>
                                <br>
                                <button class="btn btn-primary" type="submit">Modify</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-body">

                <section id="basic-datatable">

                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php require(APPPATH.'views\common\__footer.php'); ?>

    <script>
        
        $(window).on('load', function () {

            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

        function serial_check() {
            $('#serial_check').submit();
        }
    </script>
</body>
<!-- END: Body-->

</html>