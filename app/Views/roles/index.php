<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Roles</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="<?= base_url('roles/create') ?>" class="btn btn-primary">
            Add Role
        </a>
    </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-datatable">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role Name</th>
                                <th>Slug</th>
                                <th>Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($roles)): ?>
                            <?php foreach ($roles as $i => $role): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= esc($role['name']) ?></td>
                                    <td><?= esc($role['slug']) ?></td>
                                    <td>
                                        <a href="<?= base_url('roles/edit/'.$role['id']) ?>"
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
