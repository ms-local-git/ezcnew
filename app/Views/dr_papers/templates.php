<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <?php
    require(APPPATH . "views\common\__header.php");

    ?>
    <title>Driver Papers Templates</title>
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

                                    <li class="breadcrumb-item active">Template Manage
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
                <button class="btn btn-primary px-3 my-1" type="button" onclick="showFilters()">Add New Template</button>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card p-2" id="searchBox" style="display: none;">
                        <form id="templateForm" action="<?= base_url() ?>/dr_papers/add_template" method="post">
                            <input type="hidden" name="id" id="template_id"> <!-- Hidden field for update -->

                            <div class="row">
                                <label class="col-md-3">
                                    <h3>Template Name:</h3>
                                </label>
                                <input type="text" name="template_name" id="template_name" class="col-md-7 form-control">
                                <div class="col-md-2">
                                    <button class="btn btn-primary w-100" type="submit" id="templateSubmitBtn">Save</button>
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

                                <div class="card-datatable">
                                    <table class="datatables-basic table">
                                        <thead>
                                            <tr>
                                                <th>Sl No.</th>
                                                <th>Templates</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="searchContent">
                                            <?php
                                            if (isset($templates))
                                                $i = 1;
                                            foreach ($templates as $t) { ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $t['template_name'] ?></td>
                                                    <td>
                                                    <button class="btn btn-sm btn-warning"
                                                        onclick="editTemplate(<?= $t['id'] ?>, '<?= htmlspecialchars($t['template_name'], ENT_QUOTES) ?>')">
                                                        Edit
                                                    </button>
                                                    </td>
                                                    <!-- <td><a class="btn-sm btn-primary" href="<?= base_url() ?>/dr_papers/template_manage?id=<?= $t['id'] ?>">Manage Papers</a></td> -->
                                                </tr>
                                            <?php $i++;
                                            } ?>
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

   <script>
function showFilters() {
    resetForm();
    $('#searchBox').show();
    $('#filterBtn').hide();
}

function editTemplate(id, name) {
    $('#searchBox').show();
    $('#filterBtn').hide();

    // Fill form for update
    $('#template_id').val(id);
    $('#template_name').val(name);

    // Change button text and form action
    $('#templateSubmitBtn').text('Update');
    $('#templateForm').attr('action', '<?= base_url() ?>/dr_papers/update_template'); // Use update controller
}

function resetForm() {
    // Clear fields
    $('#templateForm')[0].reset();
    $('#template_id').val('');

    // Reset button text & action
    $('#templateSubmitBtn').text('Save');
    $('#templateForm').attr('action', '<?= base_url() ?>/dr_papers/add_template');

    // Hide form, show add button
    $('#searchBox').hide();
    $('#filterBtn').show();
}

// Optional: reset form on page load
$(document).ready(function() {
    resetForm();

    <?php if (isset($_SESSION['msg'])) { ?>
        Swal.fire('Success', '<?= $_SESSION['msg'] ?>', 'success');
    <?php } ?>
});
</script>


</body>
<!-- END: Body-->

</html>