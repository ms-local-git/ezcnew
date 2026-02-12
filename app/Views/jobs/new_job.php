<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>New Job</title>
    <?php require(APPPATH."views\common\__css.php"); ?>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<style>
    .label_inline {
        padding-top: 9px;
    }
</style>
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
            <section id="new-client">
                <form method="post" action="<?= base_url() ?>/jobs/save_job">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Branch Type:</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php 
                                            foreach($branches as $b){
                                        ?>
                                        <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                            <input name="branch"  checked id="<?=$b['branch_html_val']?>" class="custom-control-input" type="radio" value="<?=$b['branch_html_val']?>">
                                            <label class="custom-control-label" for="<?=$b['branch_html_val']?>"><?=$b['branch_name']?></label> 
                                        </div>
                                        <?php  } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <hr> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Job Type:</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                            <input type="radio" id="van" name="job_type_2" checked value="Mini Van"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="van">Mini Van </label>
                                        </div>
                                    <!-- </div> -->
                                    <!-- <div class="col-md-10">
                                        <div class="input-group mb-1 row">
                                            <div class="col-md-3"> -->
                                                <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                                    <input type="radio" id="cargo" name="job_type_2" 
                                                    <?php if($request->getPost("job_type_2")=='cargo') echo "checked"; ?> value="Cargo Van"
                                                        class="custom-control-input" />
                                                    <label class="custom-control-label" for="cargo">Cargo Van </label>
                                                </div>
                                            <!-- </div>
                                            <div class="col-md-3"> -->
                                                <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                                    <input type="radio" id="truck" name="job_type_2"
                                                        <?php if($request->getPost("job_type_2")=='truck') echo "checked"; ?>
                                                        value="Truck Jobs" class="custom-control-input" />
                                                    <label class="custom-control-label" for="truck">Truck Jobs</label>
                                                </div>
                                            <!-- </div>
                                            <div class="col-md-3"> -->
                                                <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                                    <input type="radio" id="del" name="job_type_2"
                                                        <?php if($request->getPost("job_type_2")=='delivery') echo "checked"; ?>
                                                        value="Hot Deliveries" class="custom-control-input" />
                                                    <label class="custom-control-label" for="del">Hot Deliveries
                                                    </label>
                                                </div>
                                            <!-- </div>
                                            <div class="col-md-3"> -->
                                                <div class="custom-control custom-radio" style="display:inline;padding:0 30px">
                                                    <input type="radio" id="more" name="job_type_2"
                                                        <?php if($request->getPost("job_type_2")=='more') echo "checked"; ?>
                                                        value="More
                                                        Deliveries" class="custom-control-input" />
                                                    <label class="custom-control-label" for="more">More
                                                        Deliveries</label>
                                                </div>
                                            <!-- </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b>Account:</b></label>
                                            <input type="text" required class="form-control col-sm-8" name="account_no"
                                                id="account_no" onblur="account_check()">
                                            <div class="input-group-append">
                                                <button type="button" class="input-group-text" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-8" id="c_name">

                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b> Reference No:</b></label>
                                            <input type="text" required class="form-control col-sm-8" name="reference_no"
                                                id="reference_no" onblur="ref_check()">
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline text-right"><b>Caller Name:</b></label>
                                            <input type="text" class="form-control col-sm-8" name="caller_name"
                                                placeholder="" id="caller_name">
                                            <div class="input-group-append">
                                                <button class="input-group-text" type="button" onclick="caller_search()"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Commodity Information:</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4"><b>Commodity:</b></label>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="doc" name="commodity"
                                                        <?php if($request->getPost("commodity")=='doc') echo "checked"; ?>
                                                        value="document" class="custom-control-input" />
                                                    <label class="custom-control-label" for="doc">Document </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="other" name="commodity"
                                                        <?php if($request->getPost("commodity")=='other') echo "checked"; ?>
                                                        value="other" class="custom-control-input" />
                                                    <label class="custom-control-label" for="other">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-12">

                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b> Reference No:</b></label>
                                            <select name="service_type" id="service_type" class="form-control col-sm-8">
                                                <option value="same day nyc">Same Day NYC</option>
                                                <option value="2 hour nyc">2 Hour NYC</option>
                                                <option value="Messenger">Messenger</option>
                                                <option value="car">Car</option>
                                                <option value="mini van">Mini Van</option>
                                                <option value="cargo van">Cargo Van</option>
                                                <option value="truck 12 ft">Truck 12 Ft</option>
                                                <option value="truck 18 ft">Truck 18 Ft</option>
                                                <option value="truck 24 ft">Truck 24 Ft</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline text-right"><b>Total
                                                    Weight:</b></label>
                                            <input type="text" class="form-control col-sm-8" name="total_weight"
                                                placeholder="" value="">
                                        </div>
                                    </div>

                                   

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b>Total Pieces:</b></label>
                                            <input type="text" class="form-control col-sm-8" name="total_pcs"
                                                placeholder="" value="">
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row w-100">
                                    <h4 class="col-sm-6">Shipping Information</h4>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipping_save"
                                                name="save_comm_from" value="1" />
                                            <label class="custom-control-label" for="email"> Save in Common
                                                Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="date" required class="form-control col-sm-9" name="f_date"
                                                    placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time:</b></label>
                                                <input type="time" required class="form-control col-sm-9" name="f_time"
                                                    placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Company Name:</b></label>
                                                <input type="text" required class="form-control col-sm-9" id="company_name_s" name="f_name">
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text" onclick="company_search_shipping('company_name_s')">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address1:</b></label>
                                                <input type="text" class="form-control col-sm-9" id="address_1_s" name="f_address1">
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text" onclick="company_search_shipping('address_1_s')">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address2:</b></label>
                                                <input type="text" class="form-control col-sm-9" id="address_2_s" name="f_address2">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL
                                                        No:</b></label>
                                                <input type="text" name="f_room_no" class="form-control col-sm-9" id="room_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>City:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="form-control col-sm-3" id="city_s" name="f_city">

                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>State:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="form-control col-sm-3"  id="state_s" name="f_state">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Zip:</b></label>
                                                <input type="text" required class="form-control col-sm-3" id="zip_s" name="f_zip">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Country:</b></label>
                                                <input type="text" required class="form-control col-sm-3" name="f_zone" id="country_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Phone:</b></label>
                                                <input type="text" required class="form-control col-sm-3" name="f_phone" id="phone_s">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Ext:</b></label>
                                                <input type="text" required class="form-control col-sm-3" name="f_ext" id="ext_s">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name:</b></label>
                                                <input type="address" name="f_contact" class="form-control col-sm-9" id="contact_name_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction:</b></label>
                                                <textarea class="form-control col-sm-9" name="f_instruction1" id="instruction_s"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row w-100">
                                    <h4 class="col-sm-6">Consignee Information</h4>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="consignee_save"
                                                name="save_comm_to" value="1" />
                                            <label class="custom-control-label" for="email"> Save in Common Address:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="date" required class="form-control col-sm-9" name="t_date"
                                                    placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time:</b></label>
                                                <input type="time" required class="form-control col-sm-9" name="t_time"
                                                    placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Company Name:</b></label>
                                                <input type="text" required class="form-control col-sm-9" id="company_name_c" name="t_name">
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text" onclick="company_search_consignee('company_name_c')">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address1:</b></label>
                                                <input type="text" class="form-control col-sm-9" id="address_1_c" name="t_address1">
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text" onclick="company_search_consignee('address_1_c')">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address2:</b></label>
                                                <input type="text" class="form-control col-sm-9" id="address_2_c" name="t_address2">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL
                                                        No:</b></label>
                                                <input type="text" name="t_room_no" class="form-control col-sm-9" id="room_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>City:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" name="t_city" required class="form-control col-sm-3" id="city_c">

                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>State:
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" name="t_state" required class="form-control col-sm-3"  id="state_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Zip:</b></label>
                                                <input type="text" name="t_zip" required class="form-control col-sm-3" id="zip_c">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Country:</b></label>
                                                <input type="text" name="t_zone" required class="form-control col-sm-3" id="country_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Phone:</b></label>
                                                <input type="text" required name="t_phone" class="form-control col-sm-3" id="phone_c">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Ext:</b></label>
                                                <input type="text" name="t_ext" required class="form-control col-sm-3" id="ext_c">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name:</b></label>
                                                <input type="address" name="t_contact" class="form-control col-sm-9" id="contact_name_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction:</b></label>
                                                <textarea class="form-control col-sm-9" name="t_instruction1" id="instruction_c"
                                                   ></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Misc. Information:</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-4 col-12">
                                        <div class="input-group mb-1">
                                            <div class="row">
                                                <div class="col-sm-4 col-6">
                                                    <label for="valid-state" class="label_inline"> Driver Miles:</label>
                                                </div>
                                                <div class="col-sm-8 col-6">
                                                    <input type="text" required class="form-control" name="driver_miles">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="input-group mb-1">
                                            <div class="row">
                                                <div class="col-sm-4 col-6">
                                                    <label for="valid-state" class="label_inline">Agent Miles:</label>
                                                </div>
                                                <div class="col-sm-8 col-6">
                                                    <input type="text" required class="form-control" name="agent_miles">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-12">
                                        <div class="input-group mb-1">
                                            <div class="row">
                                                <div class="col-sm-4 col-6">
                                                    <label for="valid-state" class="label_inline">Company Miles:</label>
                                                </div>
                                                <div class="col-sm-8 col-6">
                                                    <input type="text" required class="form-control" name="company_miles">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <label>Options: </label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="input-group mb-1 row">
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="round" name="round_trip" checked value="r"
                                                        class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="round"> Round Trip </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="continuous" name="continuous"
                                                        <?php if($request->getPost("option")=='continuous') echo "checked"; ?>
                                                        value="c" class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="continuous"> Continuous</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="multiple" name="multiple"
                                                        <?php if($request->getPost("option")=='multiple') echo "checked"; ?>
                                                        value="m" class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="multiple"> Multiple
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="schedule" name="schedule"
                                                        <?php if($request->getPost("option")=='schedule') echo "checked"; ?>
                                                        value="s" class="custom-control-input" />
                                                    &nbsp;&nbsp;<label class="custom-control-label" for="schedule"> Schedule</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card text-center w-100">
                                <div class="card-body w-100">
                                
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-primary" type="button">Clear</button>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

        </div>
    </div>
    <!-- END: Content-->

    <div class="modal fade" id="searchModal">
        <div class="modal-dialog" style="max-width:750px;">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="emailModalLabel">Search Result</h5>
                    <button type="button" class="close bg-transparent" style="box-shadow: none; transform: none;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <hr> -->
                <div class="modal-body" id="searchModalBody" style="max-height:500px;overflow-y:scroll;">
                    <form>
                        <div class="row">
                            <label class="col-md-3 label_inline"><strong>Client Search: </strong></label>
                            <input type="text" required name="" id="client_search" class="col-md-6 form-control-sm">
                            <div class="col-md-3 text-right">
                                <button onclick="account_search()" type="button" class="btn-sm btn-primary px-2">Search</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <div id="clientModalBody" class="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php require(APPPATH.'views\common\__footer.php'); ?>
    <!-- BEGIN: Page JS-->


    <!-- END: Page JS-->

    <script>
        $(document).ready(function () {
        });

        function account_check() {
            var ac_no = $('#account_no').val();
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/account_check",
                data: "id="+ac_no,
                dataType: "json",
                success: function (response) {
                    if(response==null) {
                        Swal.fire('Error','Invalid Account No.','error');
                        $('#account_no').val("");
                        $('#c_name').html("");
                    } else {
                        $('#c_name').html(`<strong>`+response.name+`</strong><br><strong>`+response.phone1+`</strong>`);
                    }

                }
            });
        }

        function ref_check() {
            var ac_no = $('#reference_no').val();
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/ref_check",
                data: "id="+ac_no,
                dataType: "json",
                success: function (response) {
                    if(response!==null) {
                        Swal.fire('Warning','Entered Reference Already Exists. Software Auto alot new reference No.','warning');
                    
                        $('#reference_no').val(response);
                    }

                }
            });
        }

        function caller_search() {
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/caller_search",
                    data: "id="+ac_no,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function callerName(id) {
            idName='#caller_'+id;
            caller = $(idName).attr('data-name');
            $('#caller_name').val(caller);
            $('#searchModal').modal('hide');
        }

        function company_search_shipping(field) {
            text = $('#'+field).val();
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/company_search",
                    data: "id="+ac_no+"&type=shipping&text="+text,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function companyName_shipping(id) {
            idName='#address_'+id;
            address = $(idName).attr('data-id');
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/get_address",
                    data: "id="+address,
                    dataType: "json",
                    success: function (response) {
                        $('#company_name_s').val(response.name);
                        $('#address_1_s').val(response.address1);
                        $('#address_2_s').val(response.address2);
                        $('#room_s').val(response.room);
                        $('#city_s').val(response.city);
                        $('#state_s').val(response.state);
                        $('#zip_s').val(response.zip);
                        $('#phone_s').val(response.phone);
                        $('#ext_s').val(response.ext);
                        $('#contact_name_s').val(response.contact_name);
                        $('#searchModal').modal('hide');
                    }
                });
        }

        function company_search_consignee(field) {
            text = $('#'+field).val();
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/company_search",
                    data: "id="+ac_no+"&type=consignee&text="+text,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function companyName_consignee(id) {
            idName='#address_'+id;
            address = $(idName).attr('data-id');
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/get_address",
                    data: "id="+address,
                    dataType: "json",
                    success: function (response) {
                        $('#company_name_c').val(response.name);
                        $('#address_1_c').val(response.address1);
                        $('#address_2_c').val(response.address2);
                        $('#room_c').val(response.room);
                        $('#city_c').val(response.city);
                        $('#state_c').val(response.state);
                        $('#zip_c').val(response.zip);
                        $('#phone_c').val(response.phone);
                        $('#ext_c').val(response.ext);
                        $('#contact_name_c').val(response.contact_name);
                        $('#searchModal').modal('hide');
                    }
                });
        }

        function account_search() {
            var ac_no = $('#client_search').val();
            
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/account_search",
                data: "id="+ac_no,
                dataType: "html",
                success: function (response) {
                    $('#clientModalBody').html(response);
                }
            });
        }

        function accountName(id) {
            idName='#account_'+id;
            account = $(idName).attr('data-name');
            $('#account_no').val(account);
            $('#searchModal').modal('hide');
        }

        $(window).on('load', function () {

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