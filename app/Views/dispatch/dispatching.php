<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Dispatching</title>
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
                                   
                                    <li class="breadcrumb-item active">Dispatching
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
                    <form action="<?= base_url() ?>/dispatch/dispatching" method="post" id="searchForm">
                            <div class="card px-3 py-1 mb-1 mt-0">
                                <div class="row">
                                    <label class="col-md-2 h4" style="padding-top: 9px;">Choose Branch:</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="job_branch" class="form-control" id="branchSelect">
                                                <option value="all">All</option>
                                                <option value="ny" <?php if($request->getPost("job_branch")=='ny') echo "selected"; ?>>NY</option>
                                                <option value="nj" <?php if($request->getPost("job_branch")=='nj') echo "selected"; ?>>NJ</option>
                                                <option value="messny" <?php if($request->getPost("job_branch")=='messny') echo "selected"; ?>>Messenger NY</option>
                                                <option value="outside" <?php if($request->getPost("job_branch")=='outside') echo "selected"; ?>>National Wide</option>
                                                <option value="heavy" <?php if($request->getPost("job_branch")=='heavy') echo "selected"; ?>>Heavy Jobs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card px-3 py-1" id="searchBox">
                                <div class="row">
                                    <label class="col-md-2 h4">Choose Status:</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio" style="display: inline;">
                                                <input type="radio" id="al" name="status" checked value="disp" class="custom-control-input" />
                                                <label class="custom-control-label" for="al">Dispatching Jobs [<?= $dis ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio" style="display: inline;">
                                                <input type="radio" id="pu" name="status" <?php if($request->getPost("status")=='hold_int') echo "checked"; ?> value="hold_int" class="custom-control-input" />
                                                <label class="custom-control-label" for="pu">Holding Jobs(Int) [<?= $dis_hold_int ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio" style="display: inline;">
                                                <input type="radio" id="ob" name="status" <?php if($request->getPost("status")=='hold_drv') echo "checked"; ?> value="hold_drv" class="custom-control-input" />
                                                <label class="custom-control-label" for="ob">Holding Jobs(Driver) [<?= $dis_hold_driver ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio" style="display: inline;">
                                                <input type="radio" id="del" name="status" <?php if($request->getPost("status")=='hold_ware') echo "checked"; ?> value="hold_ware" class="custom-control-input" />
                                                <label class="custom-control-label" for="del">Holding Jobs(Warehouse) [<?= $dis_hold_ware ?>]</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="custom-control custom-radio" style="display: inline;">
                                                <input type="radio" id="pod" name="status" <?php if($request->getPost("status")=='hold_att') echo "checked"; ?> value="hold_att" class="custom-control-input" />
                                                <label class="custom-control-label" for="pod">Holding Jobs(Attempt) [<?= $dis_hold_att ?>]</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card px-3 py-1 mb-1 mt-0">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="h4">Country:<span style="color:red">*</span></label>
                                            <select name="zone" class="form-control" id="branchSelect" required="">
                                                <option value=""></option>
                                                <?php foreach ($countries as $c) { ?>
                                                    <option <?php if($request->getPost("zone")==$c['county']) echo "selected"; ?> value='<?= $c["county"] ?>' ><?= substr($c["county"],0,12) ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="h4">In:</label>
                                            <select name="zone_sel" class="form-control" id="branchSelect">
                                                <option value=""></option>
                                                <option value="pu" <?php if($request->getPost("zone_sel")=='pu') echo "selected"; ?>> Pickup Side</option>
					                            <option value="del" <?php if($request->getPost("zone_sel")=='del') echo "selected"; ?>> Delivery Side</option>
					                            <option value="both" <?php if($request->getPost("zone_sel")=='both') echo "selected"; ?>> Both Side</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"
                                                style="width: 100%;height: max-content;margin-top: 22px;">Show</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="h4">Branch:<span style="color:red">*</span></label>
                                            <select name="branch" class="form-control" id="branchSelect" required="">
                                                <option value=""></option>
                                                <option value="NY" <?php if($request->getPost("branch")=='NY') echo "selected"; ?>> New York</option>
                                                <option value="NJ" <?php if($request->getPost("branch")=='NJ') echo "selected"; ?>> New Jersey</option>
                                                <option value="messny" <?php if($request->getPost("branch")=='messny') echo "selected"; ?>>Messenger NY</option>
                                                <option value="outside" <?php if($request->getPost("branch")=='outside') echo "selected"; ?>> National </option>
                                                <option value="heavy" <?php if($request->getPost("branch")=='heavy') echo "selected"; ?>> Heavy Job</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="h4">Timing:</label>
                                            <select name="timing" class="form-control" id="branchSelect">
                                                <option value="hour" <?php if($request->getPost("timing")=='hour' ) echo "selected"; ?>> 1 Hour</option>  
                                                <option value="3" <?php if($request->getPost("timing")=='3'  ) echo "selected"; ?>> 3 Hour</option>     
                                                <option value="6" <?php if($request->getPost("timing")=='6' || $request->getPost("timing")=="") echo "selected"; ?>> 6 Hour</option>     
                                                <option value="12" <?php if($request->getPost("timing")=='12' ) echo "selected"; ?>> 12 Hour</option>     
                                                <option value="24" <?php if($request->getPost("timing")=='24') echo "selected"; ?>> 24 Hour</option>   
                                                <option value="48" <?php if($request->getPost("timing")=='48') echo "selected"; ?>> 48 Hour</option>   	  
                                                <option value="today" <?php if($request->getPost("timing")=='today') echo "selected"; ?>> Today</option>
                                                <option value="this_week" <?php if($request->getPost("timing")=='this_week') echo "selected"; ?>> This Weekly</option>
                                                <option value="this_month" <?php if($request->getPost("timing")=='this_month') echo "selected"; ?>> This Month</option>
                                                <option value="all" <?php if($request->getPost("timing")=='all' ) echo "selected"; ?>>All</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <a class="btn btn-primary" href="<?= base_url() ?>/dispatch/dispatching"
                                                style="width: 100%;height: max-content;margin-top: 22px;">Reset</a>
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
                                            <th>Disp Time </th>
                                            <th>Client Name </th>
                                            <th> Pu Time </th>
                                            <th> Pu Info </th>
                                            <th>Del Time </th>
                                            <th> Del Info </th>
                                            <th>Job#</th>
                                            <th>Vehicle</th>
                                            <th>Action</th>
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
                                            if($r['branch']=='ny' || $r['branch']=='NY') $branch='<option value="NY" selected>New York</option><option value="NJ">New Jersey</option><option value="messny">Messenger NY</option><option value="outside">Out Side</option>';
                                            if($r['branch']=='nj' || $r['branch']=='NJ') $branch='<option value="NJ" selected>New Jersey</option><option value="NY">New York</option><option value="messny">Messenger NY</option><option value="outside">Out Side</option>';
                                            if($r['branch']=='messny' || $r['branch']=='MESSNY') $branch='<option value="messny" selected>Messenger NY</option><option value="NY">New York</option><option value="NJ">New Jersey</option><option value="outside">Out Side</option>';
                                            if($r['branch']=='outside' || $r['branch']=='OUTSIDE') $branch='<option value="outside" selected>Outside</option><option value="NY">New York</option><option value="NJ">New Jersey</option><option value="messny">Messenger NY</option>';
                                            if($r['branch']=='heavy' || $r['branch']=='HEAVY') $branch='<option value="Heavy" selected>Heavy</option><option value="NY">New York</option><option value="NJ">New Jersey</option><option value="messny">Messenger NY</option>';
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
                                            <td>
                                                <?= $r['job_no'] ?><BR>[<?=$r['int_job_no']?>]<BR><?=$reference_no?><br>
                                                <button class="btn-sm btn-primary">On Hold</button>
                                            </td>													  
                                            <td>
                                                Miles: <?= $r['driver_miles'] ?><br> Pcs:&nbsp;<?= $r['pcs'] ?><br> Weight:&nbsp;<?= $r['wt'] ?><br>
                                                <button class="btn-sm btn-primary">New Job</button>
                                            </td>
                                            <td><select name="branch_hold<?= $r['id']?>" class="<?=$txt?> form-control"><?=$branch?></select></td>
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
        $(document).ready(function(){
            $('#branchSelect').change(function(){
                $('#searchForm').submit();
            });
            $('.custom-control-input').click(function(){
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