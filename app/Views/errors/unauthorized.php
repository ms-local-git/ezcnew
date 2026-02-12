<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <h2 class="content-header-title mb-0 text-danger">
            Unauthorized Access
        </h2>
        <p class="text-muted mt-1">
            You do not have permission to access this page
        </p>
    </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="card">
    <div class="card-body text-center py-5">

        <h1 class="display-4 text-danger mb-1">403</h1>

        <h4 class="mb-2">Access Denied</h4>

        <p class="text-muted mb-3">
            You don’t have the required permissions to view this page.
            Please contact your administrator if you believe this is a mistake.
        </p>

        <a href="<?= base_url('/') ?>" class="btn btn-primary">
            Go to Dashboard
        </a>

        <a href="<?= previous_url() ?>" class="btn btn-outline-secondary ml-1">
            Go Back
        </a>

    </div>
</div>

<?= $this->endSection() ?>
