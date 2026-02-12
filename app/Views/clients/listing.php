<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0" style="border-right: none;">Clients Listing</h2>
                        
                        </div>
                    </div>
                </div>
                <? if (canPermission('client_add')): ?>
                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">
                            <a href="<?= base_url() ?>/clients/addclient" class="add-heading-link">Add Client</a>
                        </div>
                    </div>
                <? endif ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card py-1 px-4" id="searchBox">
                        <form id="searchForm" action="<?= base_url() ?>/clients/get_listing" method="post">
                            <div class="row">
                                <label class="col-md-2">
                                    <h3>Search Filter</h3>
                                </label>
                                <input
                                    type="text"
                                    name="search"
                                    id="searchVal"
                                    class="form-control col-md-6"
                                    value="<?= $request->getPost("search"); ?>">
                                <div class="col-md-2">
                                    <select name="show_status" class="form-control">
                                        <option value="all" <?= (!$request->getPost("show_status") || $request->getPost("show_status") == 'all') ? 'selected' : '' ?>>All</option>
                                        <option value="active" <?= $request->getPost("show_status") == 'active' ? 'selected' : '' ?>>Active</option>
                                        <option value="inactive" <?= $request->getPost("show_status") == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary px-5" type="submit" id="searchSubmit">Search</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-2 d-flex align-items-center">
                                    <h5 class="mb-0">Search By</h5>
                                </div>
                                <div class="col-md-10">
                                    <div class="d-flex flex-wrap align-items-center" style="gap: 10px 24px;">
                                        <div class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" <?= $request->getPost("company_name") == '1' ? 'checked' : '' ?> id="colorCheck1" name="company_name" value="1">
                                            <label class="custom-control-label" for="colorCheck1">Company Name</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" <?= $request->getPost("phone") == '1' ? 'checked' : '' ?> id="phone1" name="phone" value="1">
                                            <label class="custom-control-label" for="phone1">Phone</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" <?= $request->getPost("city") == '1' ? 'checked' : '' ?> id="colorCheck4" name="city" value="1">
                                            <label class="custom-control-label" for="colorCheck4">City</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" <?= $request->getPost("email") == '1' ? 'checked' : '' ?> id="email" name="email" value="1">
                                            <label class="custom-control-label" for="email">Email</label>
                                        </div>
                                    </div>
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

                                <?php if (isset($clients)) { ?>
                                    <div class="card-datatable">
                                        <!-- <div id="filterBtn">
                                    <button class="btn btn-primary px-3 mx-1 mt-1" onclick="showFilters()">Show Filters</button>
                                </div> -->
                                        <table class="datatables-basic table">
                                            <thead>
                                                <tr>

                                                    <th>Account No</th>
                                                    <th>Company Name</th>
                                                    <th>Attention</th>
                                                    <th>Street - City -Zip</th>
                                                    <th>Phone Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="searchContent">
                                                <?php
                                                foreach ($clients as $r) { ?>
                                                    <tr>
                                                        <td><?= $r['account_no'] ?></td>
                                                        <td><?= $r['name'] ?></td>
                                                        <td><?= $r['attention'] ?></td>
                                                        <td><?= $r['street'] ?> - <?= $r['city'] ?> - <?= $r['zip'] ?></td>
                                                        <td><?= $r['phone1'] ?></td>
                                                        <td>
                                                            <? if (canPermission('client_edit')): ?>
                                                                <a href="<?= base_url() ?>/clients/editclient?id=<?= $r['account_no'] ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                                            <? endif ?>
                                                        </td>
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
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- BEGIN: Page JS-->


    <!-- END: Page JS-->

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
    </script>
<?= $this->endSection() ?>

