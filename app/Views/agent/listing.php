<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<style>
    .agent-search-options {
        gap: 8px 16px;
    }

    .agent-search-options .custom-control {
        margin-bottom: 0;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0" style="border-right: none;">Agents</h2>
                
            </div>
        </div>
    </div>
    <? if (canPermission('agent_add')): ?>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <a href="<?= base_url('/agent/add') ?>" class="add-heading-link">
                Add Agent
            </a>
        </div>
    <? endif ?>

    
</div>
<?= $this->endSection() ?>
<?= $this->section('search') ?>
<div class="row">
    <div class="col-12">
        <div class="card py-1 px-4" id="searchBox">
            <form id="searchForm" action="<?= base_url() ?>/agent" method="post">
                <div class="row">
                    <label class="col-md-2">
                        <h3>Search Filter</h3>
                    </label>
                    <div class="col-md-8">
                        <input type="text" name="search" id="searchVal" class="form-control" minlength="3" value="<?= $request->getPost("search"); ?>">
                        <small style="display:none;" id="showError" class="text-danger">Please enter a minimum of 3 characters for search</small>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-primary px-5" type="button" id="searchSubmit" value="Search">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2 d-flex align-items-center">
                        <h5 class="mb-0">Search By</h5>
                    </div>
                    <div class="col-md-10">
                        <div class="d-flex flex-wrap align-items-center agent-search-options">
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" <?php if ($request->getPost("caller") == '1') echo "checked"; ?> id="agent" name="agent_name" value="1" checked>
                                <label class="custom-control-label" for="agent"> Agent Name</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" <?php if ($request->getPost("phone") == '1') echo "checked"; ?> id="phone1" name="phone" value="1">
                                <label class="custom-control-label" for="phone1"> Phone </label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" <?php if ($request->getPost("city") == '1') echo "checked"; ?> id="colorCheck4" name="city" value="1" />
                                <label class="custom-control-label" for="colorCheck4"> City</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" <?php if ($request->getPost("email") == '1') echo "checked"; ?> id="email" name="email" value="1" />
                                <label class="custom-control-label" for="email"> Email</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <?php if (isset($agent)) { ?>
                    <div class="card-datatable">

                        <table class="datatables-basic table">
                            <thead>
                                <tr>

                                    <th>Agent Name</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody id="searchContent">
                                <?php
                                foreach ($agent as $r) { ?>
                                    <tr>
                                        <td><?= $r['agent_name'] ?></td>
                                        <td><?= $r['phone'] ?></td>
                                        <td><?= $r['city'] ?></td>
                                        <td><?= $r['email'] ?> </td>
                                        <td>
                                            <? if (canPermission('agent_edit')) : ?>
                                                <a href="agent/edit/<?= $r['id'] ?>" role="button">
                                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                                </a>
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


<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
    $(window).on('load', function() {

        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    });

    $('#searchSubmit').click(function() {
        var value = $('#searchVal').val();
        if (value.length >= 3) {
            $('#searchForm').submit();
        } else {
            $('#showError').show();
        }
    });
</script>
<?= $this->endSection() ?>?>
