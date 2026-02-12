<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
    require(APPPATH . "views\common\__header.php");

    ?>
    <title>Driver Papers</title>
    <?php require(APPPATH . "views\common\__css.php"); ?>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <?php require(APPPATH . "views\common\__header_menu.php"); ?>
    <!-- END: Header-->


    <?php require(APPPATH . "views\common\__left_menu.php"); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Driver Papers Listing</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item active">Paper Manage
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

            <div id="filterBtn" class="text-right">
                <button class="btn btn-primary px-3 my-1" type="button" onclick="showFilters()">Add New Paper</button>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card p-2" id="searchBox" style="display: none;">
                        <!-- <form id="searchForm" enctype="multipart/form-data" action="<?= base_url() ?>/dr_papers/add_paper" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Paper Name</label>
                                    <input type="text" name="paper_name" class="form-control">
                                </div>
                                <div class="col-md-5">
                                    <label>Template</label>
                                    <select name="template_id" class="form-control">
                                        <?php foreach ($templates as $t) { ?>
                                            <option value="<?= $t['id'] ?>"><?= $t['template_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>No. of Copies</label>
                                    <input type="number" name="no_of_copies" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Picture File</label>
                                    <input type="file" name="picture" class="form-control">
                                </div>
                                <div class="col-md-5">
                                    <label>Notes</label>
                                    <input type="text" name="notes" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button class="btn btn-primary w-100" type="submit">Save</button>
                                </div>
                            </div>
                            <br>
                        </form> -->

                        <form id="searchForm" enctype="multipart/form-data"
                            action="<?= base_url() ?>/dr_papers/add_paper"
                            method="post">

                            <input type="hidden" name="id" id="paper_id">

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Paper Name</label>
                                    <input type="text" name="paper_name" id="paper_name" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Template</label>
                                    <select name="template_id" id="template_id" class="form-control">
                                        <?php foreach ($templates as $t) { ?>
                                            <option value="<?= $t['id'] ?>"><?= $t['template_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Picture File</label>
                                    <input type="file" name="picture" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label>No. of Copies</label>
                                    <input type="number" name="no_of_copies" id="no_of_copies" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Notes</label>
                                    <input type="text" name="notes" id="notes" class="form-control">
                                </div>

                                <div class="col-md-2">
                                    <br>
                                    <button class="btn btn-primary w-100" type="submit" id="submitBtn">
                                        Save
                                    </button>
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
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>Paper Name</th>
                                                <th>Template</th>
                                                <th>No. of copies</th>
                                                <th>File Name</th>
                                                <th>Notes</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="searchContent">
                                            <?php
                                            if (isset($papers))
                                                foreach ($papers as $p) { ?>
                                                <tr>
                                                    <td><?= $p['paper_name'] ?></td>
                                                    <td><?= $p['template_name'] ?></td>
                                                    <td><?= $p['no_of_copies'] ?></td>
                                                    <td><?= $p['display_file_name'] ?></td>
                                                    <td><?= $p['notes'] ?></td>
                                                    <td>
                                                        <a
                                                            href="<?= base_url('dr_papers/print_paper?id=' . $p['id']) ?>"
                                                            target="_blank"
                                                            class="btn btn-info btn-sm">
                                                            Print
                                                        </a>

                                                        <button
                                                            type="button"
                                                            class="btn btn-warning btn-sm"
                                                            onclick="editPaper(<?= htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8') ?>)">
                                                            Edit
                                                        </button>

                                                        <a class="btn-sm btn-primary" href="<?= base_url() ?>/dr_papers/paper_delete?id=<?= $p['id'] ?>"><button type="button" class="btn btn-primary btn-sm">Delete</button></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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


    <?php require(APPPATH . 'views\common\__footer.php'); ?>
    <!-- BEGIN: Page JS-->


    <!-- END: Page JS-->

    <script>
        $(document).ready(function() {
            <?php if (isset($_SESSION['msg'])) { ?>
                Swal.fire('Success', '<?= $_SESSION['msg'] ?>', 'success');
            <?php } ?>
        });

        function showFilters() {
            $('#searchBox').show();
            $('#filterBtn').hide();
        }

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

<script>
    $(document).ready(function() {

        <?php if (isset($_SESSION['msg'])) { ?>
            Swal.fire('Success', '<?= $_SESSION['msg'] ?>', 'success');
        <?php } ?>

        // Always reset form to ADD mode on page load
        resetForm();
    });

    function showFilters() {
        resetForm();
        $('#searchBox').show();
        $('#filterBtn').hide();
    }

    function editPaper(paper) {

        $('#searchBox').show();
        $('#filterBtn').hide();

        $('#paper_id').val(paper.id);
        $('#paper_name').val(paper.paper_name);
        $('#template_id').val(paper.template_id);
        $('#no_of_copies').val(paper.no_of_copies);
        $('#notes').val(paper.notes);

        $('#submitBtn').text('Update');

        $('#searchForm').attr(
            'action',
            '<?= base_url() ?>/dr_papers/update_paper'
        );
    }

    function resetForm() {

        // Clear form
        $('#searchForm')[0].reset();
        $('#paper_id').val('');

        // Reset button text & action
        $('#submitBtn').text('Save');
        $('#searchForm').attr(
            'action',
            '<?= base_url() ?>/dr_papers/add_paper'
        );

        // Hide form, show add button
        $('#searchBox').hide();
        $('#filterBtn').show();
    }
</script>

