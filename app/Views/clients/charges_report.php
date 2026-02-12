<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Client Charges Report</title>
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
                            <h2 class="content-header-title float-left mb-0">Clients Charges Report</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">Clients Charges Reporting
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
                            <form action="<?= base_url() ?>/clients/charges_report" method="post">
                            <div class="row">
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>From Date:<span style="color:red">*</span> </b></label>
                                    <input type="date" class="form-control " name="from_date" placeholder="" value=" required="<?= $request->getPost('from_date') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>To Date: <span style="color:red">*</span></b></label>
                                    <input type="date" class="form-control " name="to_date" placeholder="" value=" required="<?= $request->getPost('to_date') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>From Client: </b></label>
                                    <input type="text" class="form-control " name="from_client" placeholder="" value="<?= $request->getPost('from_client') ?>" required />
                                    </div>
                                </div> 
                                <div class="col-sm-5 col-12">
                                    <div class="form-group">
                                    <label for="invalid-state"><b>To Client: </b></label>
                                    <input type="text" class="form-control " name="to_client" placeholder="" value="<?= $request->getPost('to_client') ?>" required />
                                    </div>
                                </div> 
                               
                                
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="all" name="amount" <?php if($request->getPost("amount")=='all') echo "checked"; ?> value="all" class="custom-control-input"  />
                                            <label class="custom-control-label" for="all">All</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="greater" name="amount" <?php if($request->getPost("amount")=='g10') echo "checked"; ?> value="g10" class="custom-control-input" />
                                            <label class="custom-control-label" for="greater">Greater Than 10$</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12 mt-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="less" name="amount" <?php if($request->getPost("amount")=='l10') echo "checked"; ?> value="l10" class="custom-control-input"  />
                                            <label class="custom-control-label" for="less">Less Than 10$</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-12">

                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" style="width: 100%;
                                        height: max-content;
                                        margin-top: 22px;">Show</button>
                                    </div>
                                </div>
                            </div>   
                            </form>
                            <span style="color:red">From and To Dates are Job Entry Date's</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



           

            <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                              
                            <?php if(isset($reports)) { ?>
                                <div class="card-datatable">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                          
                                            <th>Job No</th>
                                            <th>Account #</th>
                                            <th>Ref #</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Details</th>
                                            <th>Charge</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="searchContent">
                                        <?php 
                                        $g_total=0;
                                        foreach($reports as $r) {
                                        $det_temp="";
                                        $chr_temp="";
                                
                                        if($r["base_chr"]!="0.00") { $det_temp=$det_temp."Base : ".number_format($r["base"],0,".",""); 	 $chr_temp=$chr_temp."$".$r["base_chr"]; }
                                        if($r["weight_chr"]!="0.00") { $det_temp=$det_temp."<BR>Weight : ".number_format($r["weight"],0,".",""); 	 $chr_temp=$chr_temp."<BR>$".$r["weight_chr"]; }
                                        if($r["pwaiting_chr"]!="0.00") { $det_temp=$det_temp."<BR>Pu. Waiting : ".number_format($r["pwaiting"],0,".",""); 	 $chr_temp=$chr_temp."<BR>$".$r["pwaiting_chr"]; }		 		 
                                        if($r["dwaiting_chr"]!="0.00") { $det_temp=$det_temp."<BR>De. Waiting : ".number_format($r["dwaiting"],0,".",""); 	 $chr_temp=$chr_temp."<BR>$".$r["dwaiting_chr"];}
                                        if($r["weekend_chr"]!="0.00") { $det_temp=$det_temp."<BR>Weekend : "; 	 $chr_temp=$chr_temp."<BR>$".$r["weekend_chr"]; }
                                        if($r["fuel_chr"]!="0.00") { $det_temp=$det_temp."<BR>Fuel : "; 	 $chr_temp=$chr_temp."<BR>$".$r["fuel_chr"]; }

                                        if($r["chr_amt1"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name1"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt1"]; }		 		 
                                        if($r["chr_amt2"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name2"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt2"]; }
                                        if($r["chr_amt3"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name3"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt3"]; }
                                        if($r["chr_amt4"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name4"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt4"]; }
                                        if($r["chr_amt5"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name5"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt5"]; }
                                        if($r["chr_amt6"]!="0.00") { $det_temp=$det_temp."<BR>".$r["chr_name6"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["chr_amt6"]; }
                                                                        
                                        if($r["other1_chr"]!="0.00") { $det_temp=$det_temp."<BR>".$r["other1"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["other1_chr"]; } 		 		 
                                        if($r["other2_chr"]!="0.00") { $det_temp=$det_temp."<BR>".$r["other2"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["other2_chr"]; 	}	 		 
                                        if($r["other3_chr"]!="0.00") { $det_temp=$det_temp."<BR>".$r["other3"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["other3_chr"]; 	}	 		 
                                        if($r["other4_chr"]!="0.00") { $det_temp=$det_temp."<BR>".$r["other4"].": "; 	 $chr_temp=$chr_temp."<BR>$".$r["other4_chr"]; 	}	 		 		 		 		 

										$total=$r["base_chr"]+$r["weight_chr"]+$r["pwaiting_chr"]+$r["dwaiting_chr"]+$r["fuel_chr"]+$r["weekend_chr"]+$r["other1_chr"]+$r["other2_chr"]+$r["other3_chr"]+$r["other4_chr"]+$r["chr_amt1"]+$r["chr_amt2"]+$r["chr_amt3"]+$r["chr_amt4"]+$r["chr_amt5"]+$r["chr_amt6"];
										$total=number_format($total,2,".","");
										$det_temp=$det_temp."<BR><B>Total:</B>";
										$chr_temp=$chr_temp."<BR><b>$".$total."</B>";
										$g_total=$g_total+$total;
                                        ?>
                                            <tr>
                                                <td><?= $r['job_no'] ?></td>
                                                <td><?= $r['account_no'] ?></td>
                                                <td>
                                                    <?= $r['reference_no'] ?> 
                                                    <br> POD : <?= $r['pod'] ?> 
                                                    <br> Time : <?= h_gdate($r['de_dep_dt']) ?> <?= h_gdate($r['de_dep_dt']) ?>
                                                </td>
                                                <td><?= $r['from_name'] ?> <br> <?= $r['from_address1'] ?></td>
                                                <td><?= $r['to_name'] ?> <br> <?= $r['to_address1'] ?></td>
                                                <td><?= $det_temp ?></td>
                                                <td><?= $chr_temp ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php if(isset($g_total)) { ?>
                                        <tr>
									        <td colspan="7"> From Date <?= $request->getPost('from_date') ?> To Date <?= $request->getPost('to_date') ?> Grand Total: $<?= $g_total ?></td>
									    </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
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