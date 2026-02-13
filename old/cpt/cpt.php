<?php $request = \Config\Services::request(); ?>
<?php 

    if($request->show_sidebar===true):
?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php

require(APPPATH . "views\common\__header.php");
    $page_title = "CPT";
    ?>
    <title>Add New User</title>
 
</head>
<?php require(APPPATH . "views\common\__css.php"); ?>


<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
   
<!-- BEGIN: Header-->
    <?php require(APPPATH . "views\common\__header_menu.php"); ?>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?= base_url() ?>/assets/app/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?= base_url() ?>/assets/app/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?= base_url() ?>/assets/app/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="<?= base_url() ?>/assets/app/images/icons/doc.png" alt="png" height="32"></div>
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
                    <div class="avatar mr-75"><img src="<?= base_url() ?>/assets/app/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?= base_url() ?>/assets/app/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?= base_url() ?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="<?= base_url() ?>/assets/app/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
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
  

    <?php require(APPPATH . "views\common\__left_menu.php"); ?>
<div class="main-content">
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

        <?php endif;?>

            <!--Create Offical Information -->
            <section name="invoice-printout">
              <form action="<?= base_url() ?>/User/create" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- LEFT SIDE -->
                    <div class="col-md-12">
                        <div class="row general-info">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div>
                                            <h4 class="text-center"> <?= $cpt_namerecords['name'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="card-body loader-2">
                                       
                                            <div class="row">
                                                <?php if (!empty($cpt_data)) : ?>
                                                    <?php foreach ($cpt_data as $DataCPt) : ?>
                                                        <div class="col-sm-3 col-12">
                                                            <div class="folder_icons">
                                                                <a href="<?= base_url('cptlist/' . $DataCPt['id']) ?>" class="loaderbtn">
                                                                    <i class="fa-solid fa-file"   style="color: #B197FC; font-size: 65px; margin-top: 23px; margin-left: 87px;"></i>
                                                                </a>
                                                                <h4 class="file_name"><?= $DataCPt['name'] ?></h4>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <div class="col-12">
                                                        <h3 class="text-center">NO Record Found</h3>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </form>
            </section>


        <script>
                $(document).ready(function() {
                    <?php
                    $search = $request->getPost("search");
                    if (isset($search)) {
                    ?>
                        // $('#basic-datatable').show();
                        // $('#searchBox').hide();
                    <?php } else { ?>
                        // $('#basic-datatable').hide();
                    <?php } ?>
                });
                // function showFilters() {
                //     $('#searchBox').show();
                //     $('#filterBtn').hide();
                // }
                $(window).on('load', function() {
                    if (feather) {
                        feather.replace({
                            width: 14,
                            height: 14
                        });
                    }
                });

            
                $('.loaderbtn').on('click', function(){

            $('.loader-2').html('<div class="loader one"></div>');
            console.log('Resize window to change size and color of the button');
            });
        </script>



<style>
    .card-body {
        min-height: 570px;
    }

    .form-control {
        background: #f0effc;
        border-color: #7367f014;
        color: #353535;
    }

    .switch {
        display: inline-block;
        height: 34px;
        position: relative;
        width: 60px;
    }

    .switch input {
        display: none;
    }

    .slider {
        background-color: #ccc;
        bottom: 0;
        cursor: pointer;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: .4s;
    }

    .slider:before {
        background-color: #fff;
        bottom: 4px;
        content: "";
        height: 26px;
        left: 4px;
        position: absolute;
        transition: .4s;
        width: 26px;
    }

    input:checked+.slider {
        background-color: #66bb6a;
    }

    input:checked+.slider:before {
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }


    .file_name {
        margin-left: 92px;
        margin-top: 12px;
        font-size: 14px;


    }

    .card .card-header {
        margin-left: 79px;
    }

    
    .loader-2, .card{
    min-height: 500px;
    }

    .loader{
        --size: 100px;
        --primary-color: cornflowerblue;
        
        height: var(--size);
        width: var(--size);
        margin: 0 auto;
        margin-top: 123px;
    }

    /* ONE */
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .one {
        border: calc(var(--size) / 8) solid var(--primary-color);
        border-left-color: transparent;
        border-radius: 100%;
        box-sizing: border-box;
        animation: spin .7s linear infinite;
    }
</style>

            <?php 
            if($request->show_sidebar===true):
            ?>


        </div>
    </div>
</div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <?php require(APPPATH . 'views\common\__footer.php'); ?>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>

</html>
<?php endif;?>