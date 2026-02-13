<?= $this->extend('layouts/app') ?>

<?php $request = $request ?? \Config\Services::request(); ?>

<?= $this->section('styles') ?>
<style>
    .folder-grid-card {
        min-height: 190px;
    }

    .file_link {
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

    .file_icon_visual {
        color: #b197fc;
        font-size: 48px;
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

    .directory-empty {
        min-height: 140px;
        display: grid;
        place-items: center;
        color: #6e6b7b;
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
                <h2 class="content-header-title float-left mb-0" style="border-right: none;">
                    <?= esc($cpt_namerecords['name'] ?? 'CPT') ?>
                </h2>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section name="invoice-printout">
    <div class="row">
        <div class="col-md-12">
            <div class="card folder-grid-card">
                <div class="card-body loader-2">
                    <div class="row">
                        <?php if (!empty($cpt_data)) : ?>
                            <?php foreach ($cpt_data as $item) : ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <a href="<?= base_url('cptlist/' . $item['id']) ?>" class="file_link loaderbtn">
                                        <div class="folder_icons">
                                            <i class="fa-solid fa-file file_icon_visual"></i>
                                            <h4 class="file_name"><?= esc($item['name']) ?></h4>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12">
                                <h5 class="text-center mb-0 directory-empty">No record found.</h5>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
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

    $('.loaderbtn').on('click', function() {
        $('.loader-2').html('<div class="loader one"></div>');
    });
</script>
<?= $this->endSection() ?>
