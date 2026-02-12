<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Order Search</title>
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
                            <h2 class="content-header-title float-left mb-0">Dispatch</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Order Search
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
                    <form action="<?= base_url() ?>/dispatch/order_search" method="post">
                        <div class="col-12">
                            <div class="card px-3 py-1 mb-1 mt-0">
                                <div class="row">
                                    <label class="col-md-1" style="padding-top: 9px;">Job#:</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="not" name="job" class="form-control" />
                                        </div>
                                    </div>
                                    <label class="col-md-1" style="padding-top: 9px;">Ref#:</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="not" name="ref" class="form-control" />
                                        </div>
                                    </div>
                                    <input type="submit" value="" style="display: none;">
                                </div>
                            </div>
                            <div class="card px-3 py-1" id="searchBox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Code<span style="color:red">*</span></label>
                                            <input type="text" name="code" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio" style="margin-bottom: 0.3rem;">
                                                <input type="radio" name="code_check" id="dr" checked value="driver"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label" for="dr">Driver</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="code_check" id="ag"
                                                    <?php if($request->getPost("code_check")=='agent') echo "checked"; ?>
                                                    value="agent" class="custom-control-input" />
                                                <label class="custom-control-label" for="ag">Agent</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Client<span style="color:red">*</span></label>
                                            <input type="text" name="client" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-radio" style="margin-bottom: 0.3rem;">
                                                <input type="radio" name="client_check" id="name" checked value="name"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label" for="name">Name</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="client_check" id="code"
                                                    <?php if($request->getPost("client_check")=='code') echo "checked"; ?>
                                                    value="code" class="custom-control-input" />
                                                <label class="custom-control-label" for="code">Code</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Pickup Info</label>
                                            <input type="text" name="pickup" class="form-control">
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="custom-control custom-checkbox col-md-5" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("p_name")=='1') echo "checked"; ?>
                                                    id="p_name" name="p_name" value="1">
                                                <label class="custom-control-label" for="p_name"> Name</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-7" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("p_address")=='1') echo "checked"; ?>
                                                    id="p_address" name="p_address" value="1">
                                                <label class="custom-control-label" for="p_address"> Address</label>
                                            </div>
                                            <br>
                                            <div class="custom-control custom-checkbox col-md-5" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("p_state")=='1') echo "checked"; ?>
                                                    id="p_state" name="p_state" value="1" />
                                                <label class="custom-control-label" for="p_state"> State</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("p_city")=='1') echo "checked"; ?>
                                                    id="p_city" name="p_city" value="1" />
                                                <label class="custom-control-label" for="p_city"> City</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-3" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("p_zip")=='1') echo "checked"; ?>
                                                    id="p_zip" name="p_zip" value="1" />
                                                <label class="custom-control-label" for="p_zip"> Zip</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Delivery Info</label>
                                            <input type="text" name="delivery" class="form-control">
                                        </div>
                                        <div class="form-group row mx-0">
                                            <div class="custom-control custom-checkbox col-md-5" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("d_name")=='1') echo "checked"; ?>
                                                    id="d_name" name="d_name" value="1">
                                                <label class="custom-control-label" for="d_name"> Name</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-7" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("d_address")=='1') echo "checked"; ?>
                                                    id="d_address" name="d_address" value="1">
                                                <label class="custom-control-label" for="d_address"> Address</label>
                                            </div>
                                            <br>
                                            <div class="custom-control custom-checkbox col-md-5" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("d_state")=='1') echo "checked"; ?>
                                                    id="d_state" name="d_state" value="1" />
                                                <label class="custom-control-label" for="d_state"> State</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-4" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("d_city")=='1') echo "checked"; ?>
                                                    id="d_city" name="d_city" value="1" />
                                                <label class="custom-control-label" for="d_city"> City</label>
                                            </div>
                                            <div class="custom-control custom-checkbox col-md-3" style="display: inline;">
                                                <input type="checkbox" class="custom-control-input"
                                                    <?php if($request->getPost("d_zip")=='1') echo "checked"; ?>
                                                    id="d_zip" name="d_zip" value="1" />
                                                <label class="custom-control-label" for="d_zip"> Zip</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group px-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="date_sel" id="days" checked value="1"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label w-100" for="days">
                                                    <div class="form-group px-0">
                                                        <label>Select:</label>
                                                        <select name="date" class="form-control">
                                                            <option value="today">Today</option>
                                                            <option value="yesterday" <?php if($request->getPost("date")=='yesterday') ?>selected>Yesterday</option>
                                                            <option value="last7" <?php if($request->getPost("date")=='last7') ?> selected>Last 7 Days</option>
                                                            <option value="last30" <?php if($request->getPost("date")=='last30') ?> selected>Last 30 Days</option>
                                                            <option value="last90" <?php if($request->getPost("date")=='last90') ?> selected>Last 90 days</option>
                                                            <option value="next7" <?php if($request->getPost("date")=='next7') ?> selected>Next 7 Days</option>
                                                            <option value="next30" <?php if($request->getPost("date")=='next30') ?> selected>Next 30 Days</option>
                                                            <option value="open" <?php if($request->getPost("date")=='open') ?> selected>Open Jobs</option>
                                                        </select>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 px-0">
                                        <div class="form-group px-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="date_sel" id="date"
                                                    <?php if($request->getPost("date_sel")=='2') echo "checked"; ?>
                                                    value="2" class="custom-control-input" />
                                                <label class="custom-control-label w-100" for="date">
                                                    <div class="row px-0 mx-0">
                                                        <div class="form-group col-md-6">
                                                            <label>From:<span style="color:red">*<span></label>
                                                            <input type="text" name="from_date" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>To:<span style="color:red">*</span></label>
                                                            <input type="text" name="to_date" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"
                                                style="width: 100%;height: max-content;margin-top: 22px;">Show</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                            <th>Disp Time </th>
                                            <th>Client Name </th>
                                            <th> Pu Time </th>
                                            <th> Pu Info </th>
                                            <th>Del Time </th>
                                            <th> Del Info </th>
                                            <th>Job#</th>
                                            <th>Vehicle</th>
                                            <th>Status</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody id="searchContent">
                                        <?php 
                                            if(isset($reports)) {
                                            foreach($reports as $r) { 
                                            $txt=""; if($r['job_type_2']!="") $txt="text-danger";
                                            if(strlen($r['from_address1'])>=20) $from_address=substr($r['from_address1'],0,20)."**" ;else  $from_address=$r['from_address1'];
                                            if(strlen($r['to_address1'])>=20) $to_address=substr($r['to_address1'],0,20)."**"; else  $to_address=$r['to_address1'];	
                                            if(strlen($r['phase'])>=15) $phase=substr($r['phase'],0,15)."**"; else  $phase=$r['phase'];	
                                            if(strlen($r['reference_no'])>=12) $reference_no=substr($r['reference_no'],0,12)."**"; else  $reference_no=$r['reference_no'];	
                                            if(strlen($r['to_zip'])>5) $to_zip=substr($r['to_zip'],0,5)."**"; else  $to_zip=$r['to_zip'];	                        
                                            if(strlen($r['to_city'])>=12) $to_city=substr($r['to_city'],0,12)."**"; else  $to_city=$r['to_city'];	
                                            if(strlen($r['from_city'])>=12) $from_city=substr($r['from_city'],0,12)."**"; else  $from_city=$r['from_city'];	
                                            if(strlen($r['name'])>=11) $company_name=substr($r['name'],0,11)."*"; else $company_name=$r['name'];
                                            if(strlen($r['from_address1'])>=20) $from_address=substr($r['from_address1'],0,20)."**" ;else  $from_address=$r['from_address1'];
                                            if(strlen($r['from_name'])>=20) $from_name=substr($r['from_name'],0,20)."**" ;else  $from_name=$r['from_name'];
                                            if(strlen($r['to_name'])>=20) $to_name=substr($r['to_name'],0,20)."**" ;else  $to_name=$r['to_name'];	
                                        ?>
                                        <tr class="<?= $txt ?>">
                                            <td><?= h_gtime($r['disp_time']) ?><BR><BR><?= h_gday($r['disp_time'],1)?></td>
                                            <td><?= $company_name?><BR><?= $r['account_no']?><BR><?=strtoupper($phase)?></td>
                                            <td><?= h_gtime($r['from_time']) ?><br><BR><?=h_gday($r['from_date'],1)?></td>
                                            <td>
                                                <?=$from_name ?><BR>
                                                <?=$from_address ?><BR>
                                                <?=$from_city?><BR>
                                                <?=$r['from_state']?> <?=$r['from_zip']?> [<?=$r['pickup_miles']?>]
                                            </td>							  
                                            <td><?= h_gtime($r['to_time']) ?><br><BR><?=h_gday($r['to_date'],1)?></td>
                                            <td>
                                                <?=$to_name?><BR><?=$to_address ?><BR>
                                                <?=$to_city?><BR>
                                                <B><?=$r['to_state']?> <?=$to_zip?></B> [<?=$r['delivery_miles']?>]
                                            </td>							  
                                            <td><?= $r['job_no'] ?><BR>[<?=$r['int_job_no']?>]<BR><?=$reference_no?></td>													  
                                            <td><?= $r['service_type']?><BR> <BR> Miles: <?=$r['driver_miles']?></td>
                                            <td><?= $r['phase']?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary" value="Notes">
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
        });
    </script>
</body>
<!-- END: Body-->

</html>