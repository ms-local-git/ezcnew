<?= $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<style>
    .folder-grid-card {
        min-height: 190px;
    }

    .folder_link {
        display: block;
        color: #1f2d5c;
        text-decoration: none;
        height: 100%;
    }

    .folder_icons {
        box-shadow: 0 4px 12px #00000026;
        border-radius: 10px;
        border: 1px solid #ebe9f1;
        background: #fff;
        min-height: 170px;
        padding: 18px 10px;
        margin-top: 14px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: transform .18s ease, box-shadow .18s ease;
    }

    .folder_icons:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px #0000002b;
    }

    .folder_icon_visual {
        color: #ffd43b;
        font-size: 52px;
        line-height: 1;
        margin-bottom: 10px;
    }

    .file_name {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
        text-align: center;
        word-break: break-word;
    }

    .btn-create {
        background-color: #7367f0;
        color: #fff;
    }

    .btn-create:hover {
        color: #fff;
    }

    .directory-empty {
        min-height: 140px;
        display: grid;
        place-items: center;
        color: #6e6b7b;
    }

    .popbox {
        height: auto;
    }

    .flater {
        height: 278px;
    }

    .loader-2,
    .folder-grid-card {
        min-height: 500px;
    }

    .loader {
        --size: 100px;
        --primary-color: cornflowerblue;
        height: var(--size);
        width: var(--size);
        margin: 123px auto 0;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .one {
        border: calc(var(--size) / 8) solid var(--primary-color);
        border-left-color: transparent;
        border-radius: 100%;
        box-sizing: border-box;
        animation: spin .7s linear infinite;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0" style="border-right: none;">CPT Directory</h2>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-block">
        <button type="button" class="btn btn-create" id="openCreateDirModal">Create Directory</button>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section name="invoice-printout">
    <div class="row">
        <div class="col-md-12">
            <div class="row general-info">
                <div class="col-md-12">
                    <div class="card folder-grid-card">
                        <div class="card-body loader-2">
                            <div class="row">
                                <?php if (!empty($cpt_records)): ?>
                                    <?php foreach ($cpt_records as $cptdir): ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                            <a href="<?= base_url('cpt/' . $cptdir['id']) ?>" class="folder_link loaderbtn load-page">
                                                <div class="folder_icons">
                                                    <i class="fa fa-folder folder_icon_visual"></i>
                                                    <h4 class="file_name"><?= esc($cptdir['name']) ?></h4>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="col-12">
                                        <h5 class="text-center mb-0 directory-empty">No directories found.</h5>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Dir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('addcptdir') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 flater">
                            <div class="card-body popbox">
                                <div class="row">
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="valid-state"><b>Name</b><span style="color:red">*</span></label>
                                            <input type="text" class="form-control" name="name" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="valid-state"><b>Description</b><span style="color:red">*</span></label>
                                            <textarea class="form-control" rows="5" name="description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Dir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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

    $('#openCreateDirModal').on('click', function() {
        $('#exampleModalCenter').modal('show');
    });

    $('.loaderbtn').on('click', function() {
        $('.loader-2').html('<div class="loader one"></div>');
    });
</script>
<?= $this->endSection() ?>
