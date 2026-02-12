<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Order Quality</title>
    <?php require(APPPATH."views\common\__css.php"); ?>
    <!-- END: Custom CSS-->

</head>
<style>
    .custom-radio {
        display: inline;
    }
</style>
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
                            <h2 class="content-header-title float-left mb-0">Dispatch</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Order Quality Control
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
                        <div class="card px-3 py-2" id="searchBox">
                            <form id="searchForm" action="<?= base_url() ?>/dispatch/order_quality"
                                method="post">
                                <div class="row">
                                    <label class="col-md-2 h5">Choose Branch :</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="all" name="branch" checked value="all" class="custom-control-input" />
                                                <label class="custom-control-label" for="all">All [<?= $all_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ny" name="branch" <?php if($request->getPost("branch")=='ny') echo "checked"; ?> value="ny" class="custom-control-input" />
                                                <label class="custom-control-label" for="ny">New York [<?= $ny_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="nj" name="branch" <?php if($request->getPost("branch")=='nj') echo "checked"; ?> value="nj" class="custom-control-input" />
                                                <label class="custom-control-label" for="nj">New Jersey [<?= $nj_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="mny" name="branch" <?php if($request->getPost("branch")=='messny') echo "checked"; ?> value="messny" class="custom-control-input" />
                                                <label class="custom-control-label" for="mny">Messenger NY [<?= $mny_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="out" name="branch" <?php if($request->getPost("branch")=='outside') echo "checked"; ?> value="outside" class="custom-control-input" />
                                                <label class="custom-control-label" for="out">Outside [<?= $out_count ?>]</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label class="col-md-2 h5">Choose Status :</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="al" name="status" checked value="all" class="custom-control-input" />
                                                <label class="custom-control-label" for="al">All [<?= $al_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="pu" name="status" <?php if($request->getPost("status")=='pu_alert') echo "checked"; ?> value="pu_alert" class="custom-control-input" />
                                                <label class="custom-control-label" for="pu">PU IN 30 [<?= $pu_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ob" name="status" <?php if($request->getPost("status")=='pu_time') echo "checked"; ?> value="pu_time" class="custom-control-input" />
                                                <label class="custom-control-label" for="ob">ON BOARD [<?= $ob_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="del" name="status" <?php if($request->getPost("status")=='pu_dep') echo "checked"; ?> value="pu_dep" class="custom-control-input" />
                                                <label class="custom-control-label" for="del">DEL IN 30 [<?= $del_count ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="pod" name="status" <?php if($request->getPost("status")=='de_time') echo "checked"; ?> value="de_time" class="custom-control-input" />
                                                <label class="custom-control-label" for="pod">POD [<?= $pod_count ?>]</label>
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

                            <div class="card-datatable">
                                <table class="datatables-basic table display nowrap responsive" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Driver / Status </th>
                                            <th>Client Name </th>
                                            <th>Pu Time </th>
                                            <th>Pu Info </a></td>
                                            <th>Del Time </th>
                                            <th>Del Info</th>
                                            <th>Job#</th>
                                            <th>Vehicle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if(isset($reports)) {
                                            foreach($reports as $r) {
                                                $txt=""; if($r['job_type_2']!="") $txt="text-danger";  
                                                if(strlen($r['from_address1'])>=20) $from_address=substr($r['from_address1'],0,20)."**" ;else  $from_address=$r['from_address1'];
                                                if(strlen($r['from_name'])>=20) $from_name=substr($r['from_name'],0,20)."**" ;else  $from_name=$r['from_name'];
                                                if(strlen($r['to_name'])>=20) $to_name=substr($r['to_name'],0,20)."**" ;else  $to_name=$r['to_name'];
                                                if(strlen($r['to_address1'])>=20) $to_address=substr($r['to_address1'],0,20)."**"; else  $to_address=$r['to_address1'];	
                                                if(strlen($r['phase'])>=15) $phase=substr($r['phase'],0,15)."**"; else  $phase=$r['phase'];	
                                                if(strlen($r['reference_no'])>=12) $reference_no=substr($r['reference_no'],0,12)."**"; else  $reference_no=$r['reference_no'];	
                                                if(strlen($r['to_zip'])>5) $to_zip=substr($r['to_zip'],0,5)."**"; else  $to_zip=$r['to_zip'];	
                                                if(strlen($r['to_city'])>=12) $to_city=substr($r['to_city'],0,12)."**"; else  $to_city=$r['to_city'];	
                                                if(strlen($r['from_city'])>=12) $from_city=substr($r['from_city'],0,12)."**"; else  $from_city=$r['from_city'];	
                                                if(strlen($r['name'])>=11) $company_name=substr($r['name'],0,11)."*"; else $company_name=$r['name'];
                                                if(last_driver_no($r['id'])!='') $dr=explode(",",last_driver_no($r['id']));
                                                $status1='';
                                                if($r['oq_phase']=='pu_alert')  $status1='PU IN 30';
                                                if($r['oq_phase']=='pu_time')  $status1='ON BOARD';
                                                if($r['oq_phase']=='pu_dep')  $status1=' DEL IN 30';
                                                if($r['oq_phase']=='de_time')  $status1='POD';
                                            ?>
                                        <tr class="<?= $txt ?>">
                                            <td><strong><?= $status1 ?><BR>
                                                <?php if(isset($dr)) { echo $dr[0].'<BR>'.$dr[1].'<BR>'.$dr[2]; } ?>
                                            </td>
                                            <td><?= $company_name ?><BR><?= $r['account_no'] ?><BR><?= strtoupper($phase) ?></td>
                                            <td><B><?= h_gtime($r['from_time']) ?><br>&nbsp;<BR><?= h_gday($r['from_date'],1) ?></B></td>
                                            <td>
                                                <?= $from_name  ?><BR><?= $from_address ?><BR><?= $from_city ?><BR>
                                                <?= $r['from_state'] ?> <?= $r['from_zip'] ?> [<?= $r['pickup_miles'] ?>]
                                                </td>							  
                                            <td><?= h_gtime($r['to_time']) ?><br>&nbsp;<BR><?= h_gday($r['to_date'],1) ?></td>
                                            <td>
                                                <?= $to_name ?><BR><?= $to_address  ?><BR><?= $to_city ?><BR>
                                                <B><?= $r['to_state'] ?> <?= $to_zip ?></B>&nbsp;[<?= $r['delivery_miles'] ?>]
                                                </td>							  
                                            <td><?= $r['job_no']  ?><BR>[<?= $r['int_job_no'] ?>]<BR><?= $reference_no ?></td>													  
                                            <td><?= $r['service_type'] ?><BR> Miles: <?= $r['driver_miles'] ?><BR>&nbsp;<BR></td>
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
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


<?php require(APPPATH.'views\common\__footer.php'); ?>
  <!-- BEGIN: Page JS-->

    
    <!-- END: Page JS-->

    <script>
        $(document).ready(function() {
            $('.custom-control-input').click(function() {
                $('#searchForm').submit();
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