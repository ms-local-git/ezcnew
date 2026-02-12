<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Vehicles Miles Report</title>
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
                            <form action="<?= base_url() ?>/co_vehicles/vehicle_miles_diff_report" method="post">
                            <div class="row">
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>From Date:<span style="color:red">*</span> </b></label>
                                        <input type="date" class="form-control " name="from_date" placeholder="" value=" required="<?= $request->getPost('from_date') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>To Date:<span style="color:red">*</span> </b></label>
                                        <input type="date" class="form-control " name="to_date" placeholder="" value=" required="<?= $request->getPost('to_date') ?>" />
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="invalid-state"><b>Vehicle:<span style="color:red">*</span> </b></label>
                                        <select class="form-control" name="vehicle" required=">
                                            <option value="">All</option>
                                            <?php foreach ($vehicles as $v) { ?>
                                            <option value="<?=$v['id'] ?>"
                                                <?php if($request->getPost('vehicle')==$v['id']) { ?>selected<?php } ?>>
                                                <?= $v["plate"] ?>-<?= $v["type"] ?>-<?= $v["color"] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
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
                                <div class="card-datatable">
                                <?php 
                            if(isset($reports)) { ?>
                                          <?php
                            $vehicle_max_percentage=$max_value->odo_meter_per;
                            $cnt_main=1; $tot=0; $cnt=0; $cnt_main=1; $i=0; 
                            $odo_meter_pre=0; $my_vehicle_id=0; $no_attachment_records="";
                            foreach($reports as $r) {
                                $i++; $name=$r["plate"].' - '.$r["type"];
                                if($my_vehicle_id!=$r["vehicle_id"]) {
                                if($cnt_main!=1) {
                                    if($tot_driven!=0) $tot_miles_percentage=number_format(($tot_amt/$tot_driven),2,".","");
                        ?>
                        
          
                        </tbody>
                        <tr>
                            <td colspan="3" class="text-right"><strong>Total:</strong></td>
                            <td><strong>$ <?= $tot_amt ?></strong></td>
                            <td><strong><?= $tot_driven ?></strong></td>
                            <td><strong><?= $miles_percentage ?> c</strong></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </table>
                        <?php } ?>
						  <h3 class="border-top border-bottom p-1 text-center">Vehicle: <?= $name ?></h3>
                        <table class="datatables-basic-miles table display responsive nowrap" style="width:100%">
                                <thead>
						
                        <tr>
                            <th>Plate No </th>
							<th>Date</th>
							<th>OdoMeter</th>
							<th>Gas Charges&nbsp;</th>
							<th>Driver</th>
							<th>Miles In $</th>
							<th>Dr.Gas</th>
							<th>Dr.Assign</th>
							<th>Attachments</th>
                        </tr>
                                </thead>
                <tbody>
                        <?php $cnt=0;
					$tot_amt=0;
					$tot_driven=0;
					$odo_meter_pre=$r["odo_meter"];
				}
                $attachment=get_miles_attachment($r['id']);
				$attachment_str='<div align="center">'.$attachment.'</div>';
				$cnt++;
				$cnt_main++;
				$odo_meter=$r["odo_meter"];
				$odo_meter_diff= $odo_meter-$odo_meter_pre;
				$miles_percentage=0;
				if($odo_meter_diff!=0) $miles_percentage=number_format(($r["amount"]/$odo_meter_diff),2,".","");
				$tot_amt=$tot_amt+floatval($r["amount"]);
				if($cnt!=1) $tot_driven=$tot_driven+$odo_meter_diff;
				$driver_code1=$r["driver_code"];
                $driver_code2=get_driver_code($r['vehicle_id'],$r['expense_date']);
                ?>
                <tr>
                    <td><?= $name;?></td>
                    <td><?= date("M/d/Y",strtotime($r["expense_date"]));?></td>
                    <td><?= $r["odo_meter"];?></td>
                    <td> $ <?= $r["amount"];?>&nbsp;</td>
                    <td><?= $odo_meter_diff;?> </td>
                    <td><?= $miles_percentage;?> c&nbsp;</td>
                    <td><?= $driver_code1;?></td>
                    <td><?= $driver_code2;?></td>
                    <td><?= $attachment_str;?></td>
                </tr>
               <?php 
			    $odo_meter_pre=$r["odo_meter"]; 
				$my_vehicle_id=$r["vehicle_id"];
			    } ?>
          
                </tbody>
               </table>
    <?php } ?>
                                                            </div>
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
            $('.datatables-basic-miles').DataTable({
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
        })
    </script>
</body>
<!-- END: Body-->

</html>