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
                                <form action="<?= base_url() ?>/co_vehicles/summary_report" method="post">
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>From Date : </b></label>
                                                <input type="date" class="form-control " name="from_date" placeholder=""
                                                    value="<?= $from_date ?>" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-12">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>To Date : </b></label>
                                                <input type="date" class="form-control" name="to_date" placeholder=""
                                                    value="<?= $to_date ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="invalid-state"><b>Driver Code : </b></label>
                                                <input type="text" name="driver" class="form-control">
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
                            <div class="card-datatable table-responsive">
                                <table class="table display" style="width:100%;font-size:13px;">
                                    <thead>
                                        <tr>
                                            <th style="width: 15%;">Driver #</th>
                                            <th style="width: 15%;">Plate #</th>
                                            <th style="width: 15%;">Driver Miles</th>
                                            <th style="width: 15%;">Job Miles</th>
                                            <th style="width: 15%;">Dr Vs Job (Miles)</th>
                                            <th style="width: 15%;">Driver Chg.</th>
                                            <th style="width: 15%;">Dr. all Chg.</th>
                                            <th style="width: 15%;">Dr Mile Paid</th>
                                            <th style="width: 15%;">Tolls</th>
                                            <th style="width: 15%;">Tolls Vs Dr Paid</th>
                                            <th style="width: 15%;">Gas</th>
                                            <th style="width: 15%;">Gas % Used</th>
                                            <th style="width: 15%;">General Exp.</th>
                                            <th style="width: 15%;">Gen Exp Vs Dr Paid</th>
                                            <th style="width: 15%;">Weekly Exp.</th>
                                            <th style="width: 15%;">Depriciation</th>
                                            <th style="width: 15%;">Average On Driver Miles</th>
                                            <th style="width: 15%;">Average on Job Miles</th>
                                            <th style="width: 15%;">Vehicle Exp.<br>Exp Total</th>
                                            <th style="width: 15%;">Grand Exp. Total</th>
                                            <th style="width: 15%;">Client Chg.</th>
                                            <th style="width: 15%;">Profit/Loss</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($reports)) {
                                            $net_vehicle_expense=0;
                                            $net_grand_expense=0;
                                            $net_job_amount=0;
                                            $net_profit_loss=0;
                                        foreach($reports as $r) {
                                            $vehicle_arr=get_driver_vehicle_ids($r["driver_id"],$from_date,$to_date);
			                                $vehicle_arr_new=get_driver_vehicle_ids_new($r["driver_id"],$from_date,$to_date);  
                                            $job_info=get_job_info($r["driver_id"],$from_date,$to_date); 
                                            $driver_miles=$vehicle_arr["miles"];
					                        $job_miles=$job_info["job_miles"];
                                            $vehcile=$vehicle_arr["plate"];
                                            $job_amount=$job_info["job_amount"];
                                            $driver_amount=$job_info["driver_amount"];	
                                            $driver_all_amount=$job_info["driver_all_amount"];
                                            if($job_miles>0 && $driver_miles >0) $dr_job_miles=((($driver_miles*100)/$job_miles)/100);
					                        else $dr_job_miles=1;  
                                            if($driver_amount>0 && $driver_miles >0) $dr_mile_paid=$driver_amount/$job_miles;
                                            else $dr_mile_paid=1;
                                            $vehicle_info=get_vehicle_info($vehicle_arr_new,$from_date,$to_date);
                                            $vehcile_tolls=$vehicle_info["vehcile_tolls"];
                                            if($vehcile_tolls>0 && $driver_amount >0) $veh_jobs_tolls=($vehcile_tolls*100)/$driver_amount;
                                            else $veh_jobs_tolls=0;
                                            $vehcile_gas=$vehicle_info["vehcile_gas"];		
                                            if($vehcile_gas>0 && $driver_amount >0) $veh_jobs_gas=($vehcile_gas*100)/$driver_amount;
                                            else $veh_jobs_gas=0;
                                            $vehcile_weekly_expense=$vehicle_info["vehcile_weekly_expense"];
                                            $vehcile_expense=$vehicle_info["vehcile_expense"];
                                            if($vehcile_expense>0 && $driver_amount >0)	$veh_jobs_expense=(($vehcile_expense )*100)/$driver_amount;
                                            else $veh_jobs_expense=0;
                                            $depriciation=($driver_miles*0.50);
                                            $avg_driver_miles=$vehcile_gas/$driver_miles;
                                            $avg_job_miles=$vehcile_gas/$job_miles;
                                            $vehicle_expense_total=$vehcile_weekly_expense+$vehcile_gas+$vehcile_tolls+$vehcile_expense+$depriciation;
                                            $grand_expense_total=$driver_all_amount+$vehcile_weekly_expense+$vehcile_gas+$vehcile_tolls+$vehcile_expense+$depriciation;	
                                            $profit_loss=$job_amount-$grand_expense_total;
                                            $net_vehicle_expense=$net_vehicle_expense +$vehicle_expense_total;
                                            $net_grand_expense=$net_grand_expense + $grand_expense_total;
                                            $net_job_amount=$net_job_amount+$job_amount;
                                            $net_profit_loss=$net_profit_loss+$profit_loss;
                                        ?>
                                        <tr>
                                            <td>
                                                <?=$r["first_name"]?> <?=$r["last_name"]?> (<?=$r["driver_code"]?>)
                                            </td>               
                                            <td><?= $vehicle_arr["plate"] ?></td>
                                            <td><?= $driver_miles ?></td>
                                            <td><?= $job_miles ?></td>
                                            <td <?php if($max_value->dr_miles_jobs<$dr_job_miles) ?> class="text-danger font-weight-bold" ><?= number_format($dr_job_miles,2); ?></td>              
                                            <td>$<?= number_format($driver_amount,2);?></td>
                                            <td>$<?= number_format($driver_all_amount,2);?></td>
                                            <td  <?php if($max_value->dr_miles<$dr_mile_paid) ?> class="text-danger font-weight-bold" >$<?= number_format($dr_mile_paid,2);?></td>
                                            <td>$<?= number_format($vehcile_tolls,2);?></td>
                                            <td <?php if($max_value->dr_toll<$veh_jobs_tolls) ?> class="text-danger font-weight-bold" > <?= number_format( $veh_jobs_tolls,2);?>%</td>
                                            <td onClick="h_gas_details('<?=$r["driver_code"]?>','<?=$from_date?>','<?=$to_date?>');">$<?= number_format($vehcile_gas,2);?></td>
                                            <td onClick="h_gas_details('<?=$r["driver_code"]?>','<?=$from_date?>','<?=$to_date?>');"  <?php if($max_value->dr_gas<$veh_jobs_gas) ?> class="text-danger font-weight-bold" > <?=  number_format($veh_jobs_gas,2);?>%</td>
                                            <td>$<?= number_format($vehcile_expense,2);?></td>
                                            <td <?php if($max_value->dr_exp<$veh_jobs_expense) ?> class="text-danger font-weight-bold" > <?= number_format($veh_jobs_expense,2);?>%</td>
                                            <td>$<?= number_format($vehcile_weekly_expense,2);?></td>
                                            <td>$<?= number_format($depriciation,2);?></td>
                                            <td <?php if($max_value->dr_avg_miles<$avg_driver_miles) ?> class="text-danger font-weight-bold" >$<?= number_format($avg_driver_miles,2);?></td>
                                            <td <?php if($max_value->job_avg_miles<$avg_job_miles) ?> class="text-danger font-weight-bold" >$<?= number_format($avg_job_miles,2);?></td>
                                            <td>$<?= number_format($vehicle_expense_total,2);?></td>   
                                            <td>$<?= number_format($grand_expense_total,2);?></td> 
                                            <td>$<?= number_format($job_amount,2);?></td>
                                            <td <?php if($profit_loss<0) echo 'style="color:red;font-weight:bold"'; ?>>$<?= number_format($profit_loss,2);?></td>  
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr style="font-family:Arial, Helvetica, sans-serif !important">
                                            <th colspan="17">&nbsp;</th>
                                            <th>Total</th>
                                            <th>$<?= number_format($net_vehicle_expense,2);?></th>
                                            <th>$<?= number_format($net_grand_expense,2);?></th>
                                            <th>$<?= number_format($net_job_amount,2);?></th>
                                            <th>$<?= number_format($net_profit_loss,2);?></th> 
                                        </tr>
                                    </tfoot>
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
            $('.summary_table').DataTable( {
                "paging":   false,
                "searching":   false,
                "info":     false,
                "responsive": true
            });
        });

        $(window).on('load', function () {
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