<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
        require(APPPATH."views\common\__header.php");
        
    ?>
    <title>Email Bank</title>
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
                            <h2 class="content-header-title float-left mb-0">Coupons</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                   
                                    <li class="breadcrumb-item active">GR Courier Email List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <button data-toggle="modal" data-target="#emailModal" class="btn btn-primary">Add New Email</button>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card py-1 px-4" id="searchBox">
                            <form id="searchForm" action="<?= base_url() ?>/coupons/email_bank" method="post">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <label class="col-md-2" style="padding-top: 9px;"><h3>Search: </h3></label>
                                            <input type="text" name="search" id="searchVal" class="form-control col-md-4" value="<?= $request->getPost("search"); ?>">
                                            
                                            <label class="col-md-1" style="padding-top: 9px;"><h3>In: </h3></label>
                                            <select name="search_in" id="searchinVal" class="form-control col-md-4">
                                                <option value="email_id" <?php if($request->getPost("search_in")=='email_id') echo 'selected'; ?>>EMAIL ID</option>
                                                <option value="email_name" <?php if($request->getPost("search_in")=='email_name') echo 'selected'; ?>>NAME</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary w-100" type="submit" id="searchSubmit">Go</button>
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

                                <?php
                                if(isset($coupons)) {
                                ?>
                                <form action="<?= base_url() ?>/coupons/email_delete_selected" method="post" id="deleteSelectedForm">
                            <div class="card-datatable">
                                <!-- <div id="filterBtn">
                                    <button class="btn btn-primary px-3 mx-1 mt-1" onclick="showFilters()">Show Filters</button>
                                </div> -->
                                <table class="minData_table table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="searchContent">
                                        <?php 
                                                $i=0;
                                                foreach($coupons as $c) { 
                                                    $i++;
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" name="chk<?= $i ?>" value="<?= $c['id'] ?>"></td>
                                            <td><?= $c['email_name'] ?></td>
                                            <td><?= $c['email_id'] ?><input name="max_chk" id="max_chk" type="hidden" value="<?= $i ?>"></td>
                                            <td>
                                                <button type="button" class="btn-sm btn-primary editBtn" data-id="<?= $c['id'] ?>" data-toggle="modal" data-target="#emailModal">Edit</button>
                                                <button type="button" class="btn-sm btn-primary deleteBtn" data-id="<?= $c['id'] ?>" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                            </td>
                                        </tr>
                                        <?php }  ?>
                                    </tbody>

                                </table>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" id="deleteSelected">Delete Selected</button>
                                <button type="submit" style="display: none;"></button>
                            </div>
                            <br>
                                </form>
                                <?php } ?>
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

    <div class="modal fade" id="emailModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="emailModalLabel">Add Email</h5>
                    <button type="button" class="close bg-transparent" style="box-shadow: none; transform: none;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <hr> -->
                <form id="emailForm" action="<?= base_url() ?>/coupons/add_email" method="post">
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        <h5>Name </h5>
                                    </label>
                                    <input type="text" name="email_name" id="name_val" class="form-control">
                                    <br>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label>
                                        <h5>Email Id </h5>
                                    </label>
                                    <input type="text" name="email_id" id="email_val" class="form-control">
                                    <input type="hidden" name="id" id="id_val">
                                </div>
                            </div>
                    </div>
                    
                    <div class="modal-footer text-right border-top">
                        <button class="btn btn-primary" type="submit" id="searchSubmit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="emailModalLabel">Are you sure you want to Delete?</h4>
                </div>
                <!-- <hr> -->
                <form id="emailForm" action="<?= base_url() ?>/coupons/delete_email" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="delete_val">
                    </div>
                    
                    <div class="modal-footer text-right border-top">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require(APPPATH.'views\common\__footer.php'); ?>
  <!-- BEGIN: Page JS-->

    
    <!-- END: Page JS-->

    <script>
        $(document).ready(function() {
            
        });

        $('.editBtn').click(function() {
            var id = $(this).attr('data-id');

            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/coupons/email_info",
                data: "id=" +id,
                dataType: "json",
                success: function (response) {
                    $('#name_val').val(response.email_name);
                    $('#email_val').val(response.email_id);
                    $('#id_val').val(response.id);
                }
            });
        });
        
        $('.deleteBtn').click(function() {
            var id = $(this).attr('data-id');

            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/coupons/email_info",
                data: "id=" +id,
                dataType: "json",
                success: function (response) {
                    $('#delete_val').val(response.id);
                }
            });
        });

        $('#deleteSelected').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteSelectedForm').submit();
                }
                })
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