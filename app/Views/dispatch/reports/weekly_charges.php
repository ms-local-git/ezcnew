<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Weekly Charges</title>
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
                            <h2 class="content-header-title float-left mb-0">Dispatch Reports</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Driver Weekly Charges
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card p-4" id="searchBox">
                            <form id="searchForm" action="<?= base_url() ?>/dispatch_reports/weekly_charges" method="post">
                                <div class="row">
                                    <label class="col-md-2"><h3>Week Date</h3></label>
                                    <input type="date" required name="date" class="form-control col-md-8" value="<?= $request->getPost("date"); ?>">
                                    <div class="col-md-2">
                                        <button class="btn btn-primary px-5" type="submit">Search</button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr1")=='A') echo "checked"; ?> id="colorCheck1" name="dr1" value="A">
                                            <label class="custom-control-label" for="colorCheck1"> A </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr2")=='B') echo "checked"; ?> id="colorCheck2" name="dr2" value="B">
                                            <label class="custom-control-label" for="colorCheck2"> B </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr3")=='C') echo "checked"; ?> id="colorCheck3" name="dr3" value="C">
                                            <label class="custom-control-label" for="colorCheck3"> C</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr4")=='D') echo "checked"; ?> id="colorCheck4" name="dr4" value="D" />
                                            <label class="custom-control-label" for="colorCheck4"> D</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr5")=='E') echo "checked"; ?> id="colorCheck5" name="dr5" value="E">
                                            <label class="custom-control-label" for="colorCheck5"> E</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" <?php if($request->getPost("dr6")=='F') echo "checked"; ?> id="colorCheck6" name="dr6" value="F" />
                                            <label class="custom-control-label" for="colorCheck6"> F</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="content-body">

            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-datatable table-responsive">
                                <?php
                                if(isset($reports))  {
                                $date=$request->getPost('date');
                                $day= date('w', strtotime($date));
                                if($day==0) { $sdate = date('Y-m-d', strtotime($date.'- 1 days'));  $edate = date('Y-m-d', strtotime($date.'+ 5 days'));}
                                if($day==1) { $sdate = date('Y-m-d', strtotime($date.'- 2 days'));  $edate = date('Y-m-d', strtotime($date.'+4 days'));}  
                                if($day==2) { $sdate = date('Y-m-d', strtotime($date.'- 3 days'));  $edate = date('Y-m-d', strtotime($date.'+3 days'));}
                                if($day==3) { $sdate = date('Y-m-d', strtotime($date.'- 4 days'));  $edate = date('Y-m-d', strtotime($date.'+2 days'));}  
                                if($day==4) { $sdate = date('Y-m-d', strtotime($date.'- 5 days'));  $edate = date('Y-m-d', strtotime($date.'+1 days'));}
                                if($day==5) { $sdate = date('Y-m-d', strtotime($date.'- 6 days'));  $edate = date('Y-m-d', strtotime($date.'+0 days'));}  
                                if($day==6) { $sdate = date('Y-m-d', strtotime($date.'- 0 days'));  $edate = date('Y-m-d', strtotime($date.'+6 days'));}  
                                $sdate_no=$sdate;
                                $edate_no=$edate;
                                $main_sdate=$sdate_no;
                                $main_edate=$edate_no;
                                ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dr.#</th>
			                                <th>Name</th>
			                                <?php while($sdate_no <= $edate_no) { ?>
                                            <th><?= date("l",strtotime($sdate_no)) ?><BR><?= date("m/d/y",strtotime($sdate_no)) ?></td>
                                            <?php $sdate_no =date('Y-m-d', strtotime($sdate_no.'+1 days')); } ?>
		                                    <th>Total</th>
                                            <th>Guarantee</th>
                                            <th>Balance</th>
                                            <th>Day</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        $tot_tot=0;
                                        $tot_gurantee=0;
                                        $tot_bal=0;
                                            foreach($reports as $r) {
                                                $dr_tot=0;
                                                $dr_gurantee=floatval($r["gurantee"]);
                                                $dr_bal=0;
                                                $dr_id=$r["id"];
                                                $from_time=$r["from_time"];
                                                $to_time=$r["to_time"];
                                                $days=$r["days"];
                                                $sdate_no=$main_sdate;
                                                $come_days=0;
                                        ?>
                                        <tr>
                                            <td> <B><?= $r["code"] ?> (<?= $r["group_name"] ?>)</B></div></td>
						                    <td><I><B><?= $r["last_name"] ?></B></I></div></td>
                                           
                                           <?php 
                                           while($sdate_no <= $edate_no) 
                                           {
                                                $from_date =date("Y/m/d",strtotime($sdate_no)) ." ".$from_time;
                                                $to_date =date("Y/m/d",strtotime($sdate_no.'+ 1 days'))." ".$to_time; 
                                                $tdData=weekly_charges_td($from_date,$to_date,$dr_id,$dr_tot,$come_days,$tot_tot,$sdate_no);
                                                $come_days=$tdData['come_days'];
                                                $dr_tot=$tdData['dr_tot'];
                                                $tot_tot=$tdData['tot_tot'];
                                                $sdate_no = date('Y-m-d', strtotime($sdate_no.'+ 1 days'));
                                                echo $tdData['td'];
                                            }
                                            ?>
                                            <?php 
                                            if($come_days<$days) $dr_gurantee=0;
                                            $tot_gurantee=$tot_gurantee+$dr_gurantee;
                                            $dr_bal=$dr_gurantee-$dr_tot;
                                            $tot_bal=$tot_bal +$dr_bal; 
                                            ?>
                                            
                                            <td><?= number_format($dr_tot,2,".","") ?></td> 
                                            <td><?= number_format($dr_gurantee,2,".","") ?></td>
                                            <td><?= number_format($dr_bal,2,".","") ?></td>
                                            <td><?= $come_days.'/'.$days ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="form_heading">
                                            <td colspan="9">TOTAL </div>      </td>
                                            <td>$<?= number_format($tot_tot,2,".","") ?></td>
                                            <td>$<?= number_format($tot_gurantee,2,".","") ?></td>
                                            <td>$<?= number_format($tot_bal,2,".","") ?></td>
                                            <td> </td>
                                        </tr>
                                    </tfoot>
                                </table>
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