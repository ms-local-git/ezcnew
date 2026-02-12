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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Job No : 210202005 [New York]</h4>
                                    <h4 class="card-title">Ref No : H060096290</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <p class="col-md-4">Client Account No :</p>
                                            <p class="col-md-8">5006</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Client Price Table :</p>
                                            <p class="col-md-8"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Caller Name :</p>
                                            <p class="col-md-8">FAX</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Service Type :</p>
                                            <p class="col-md-8"></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Important Note :</p>
                                            <p class="col-md-8"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <p class="col-md-4">Client Name :</p>
                                            <p class="col-md-8">EXPEDITORS INTERNATIONAL 516-371-3330</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Job Status :</p>
                                            <p class="col-md-8">ASSIGNED</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Date Time :</p>
                                            <p class="col-md-8">10/25/2021 [12:19]   dhiman</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Assign Airport :</p>
                                            <div class="col-md-4">
                                                <input type="text" name="" id="" class="form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-4">Internal Job No :</p>
                                            <p class="col-md-8">[0]</p>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Show Time: 08/01/2003 10:00</p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <p>EST From : 02/02/2021 10:00</p>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p>EST To : 02/02/2021 14:00</p>
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
                            <table class="table table-bordered">
                                <tr>
                                    <td style="width: 22%;"> <strong>Assigned Drivers: </strong> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 22%;"> <strong>Assigned Agents: </strong> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                    <td style="width: 13%;"> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
<br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Pu. Arr : </p>
                                        </div>
                                        <div class="col-md-6"> 	
                                            <p>Pu. Depart : </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>Disp Time : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>02/02/2021 08:30</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>POD : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>AWB : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="" id="" class="form-control-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Del. Arr : </p>
                                        </div>
                                        <div class="col-md-6"> 	
                                            <p>Del. Depart : </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>Travel Time : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>90 min</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>DEPART/FL : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>Temp Tracking No : </p>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="" id="" class="form-control-sm">
                                        </div>
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
                                                name="email" value="1" />
                                            <label class="custom-control-label" for="email"> Save in Common
                                                Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form" action="<?= base_url() ?>/clients/createclient" method="POST">

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Company NAme
                                                        :</b></label>
                                                <input type="address" class="form-control col-sm-9" name="street"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 1
                                                        :</b></label>
                                                <input type="address" class="form-control col-sm-9" name="street"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 2
                                                        :</b></label>
                                                <input type="address" class="form-control col-sm-9" name="street"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL
                                                        No. :</b></label>
                                                <input type="phone" class="form-control col-sm-9" name="emer_name"
                                                    placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>City :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" class="form-control col-sm-3" name="city"
                                                    placeholder="" value="" required="">

                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>State :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" class="form-control col-sm-3" name="status"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Zip
                                                        :</b></label>
                                                <input type="text" class="form-control col-sm-3" name="zip"
                                                    placeholder="" value="" required="">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Country
                                                        :</b></label>
                                                <input type="text" class="form-control col-sm-3" name="country"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Phone
                                                        :</b></label>
                                                <input type="text" class="form-control col-sm-3" name="zip"
                                                    placeholder="" value="" required="">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Ext
                                                        :</b></label>
                                                <input type="text" class="form-control col-sm-3" name="country"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name
                                                        :</b></label>
                                                <input type="address" class="form-control col-sm-9" name="street"
                                                    placeholder="" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction
                                                        :</b></label>
                                                <textarea class="form-control col-sm-9" name="street" placeholder=""
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date :
                                                </b><span style="color:red">*</span></label>
                                            <input type="text" class="form-control col-sm-9" name="caller_person"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time
                                                    :</b></label>
                                            <input type="text" class="form-control col-sm-9" name="fax" placeholder=""
                                                value="">
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
                                                name="email" value="1" />
                                            <label class="custom-control-label" for="email"> Save in Common
                                                Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Company NAme
                                                    :</b></label>
                                            <input type="address" class="form-control col-sm-9" name="street"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Address 1
                                                    :</b></label>
                                            <input type="address" class="form-control col-sm-9" name="street"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Address 2
                                                    :</b></label>
                                            <input type="address" class="form-control col-sm-9" name="street"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL No.
                                                    :</b></label>
                                            <input type="phone" class="form-control col-sm-9" name="emer_name"
                                                placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>City : </b><span
                                                    style="color:red">*</span></label>
                                            <input type="text" class="form-control col-sm-3" name="city" placeholder=""
                                                value="" required="">

                                            <label for="invalid-state" class="col-sm-3 label_inline"><b>State :
                                                </b><span style="color:red">*</span></label>
                                            <input type="text" class="form-control col-sm-3" name="status"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Zip :</b></label>
                                            <input type="text" class="form-control col-sm-3" name="zip" placeholder=""
                                                value="" required="">

                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Country
                                                    :</b></label>
                                            <input type="text" class="form-control col-sm-3" name="country"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Phone
                                                    :</b></label>
                                            <input type="text" class="form-control col-sm-3" name="zip" placeholder=""
                                                value="" required="">

                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Ext :</b></label>
                                            <input type="text" class="form-control col-sm-3" name="country"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name
                                                    :</b></label>
                                            <input type="address" class="form-control col-sm-9" name="street"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction
                                                    :</b></label>
                                            <textarea class="form-control col-sm-9" name="street" placeholder=""
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date :
                                                </b><span style="color:red">*</span></label>
                                            <input type="text" class="form-control col-sm-9" name="caller_person"
                                                placeholder="" value="" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time
                                                    :</b></label>
                                            <input type="text" class="form-control col-sm-9" name="fax" placeholder=""
                                                value="">
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
                                    <h4>Commodity Information :</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group row">
                                            <label for="invalid-state" class="col-sm-4"><b>Commodity :</b></label>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="dues" name="option"
                                                        <?php if($request->getPost("option")=='dues') echo "checked"; ?>
                                                        value="dues" class="custom-control-input" />
                                                    <label class="custom-control-label" for="dues">Document </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="excess" name="option"
                                                        <?php if($request->getPost("option")=='excess') echo "checked"; ?>
                                                        value="excess" class="custom-control-input" />
                                                    <label class="custom-control-label" for="excess">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-12">

                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="form-group row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b> Service Type
                                                    :</b></label>
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
                                    <h4 class="card-title">Air Line Information :</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Departure</th>
                                        <th>Airline</th>
                                        <th>Flight#</th>
                                        <th>ETD</th>
                                        <th>ETA</th>
                                        <th>Destination</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4>Commodity Information :</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <p>Driver Miles : 11</p>
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                <p>Company Miles : 11</p>
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                <p>Original Miles : 11</p>
                                            </div>
                                            <div class="col-sm-3 text-center">
                                                <p>Agent Miles : 11</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="form-group row text-right">
                                            <div class="col-sm-5">
                                                <p>Dispatcher Id :</p>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" name="" id="" class="form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table">
                                    <tr>
                                        <th>Date Time </th>
                                        <th>Note Type</th>
                                        <th>User Id </th>
                                        <th>Notes</th>
                                    </tr>
												
									<tr>
                                        <td></td>
										<td></td>
						    			<td></td>
										<td></td>
                                    </tr>
								</table>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Order Quality Notes</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipping_save"
                                                name="email" value="1" />
                                            <label class="custom-control-label" for="email"> Is Hold</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card text-center w-100">
                                <div class="card-body w-100">
                                    <button class="btn btn-primary">Save</button>
                                    <button class="btn btn-primary">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

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