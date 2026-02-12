<?php $this->extend('layouts/app') ?>

<?php $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Add Request for Date Time</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Add Request</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php
$date = filter_input(INPUT_GET, 'date') ?? '';

?>
<?php $this->section('content') ?>

<section name="invoice-printout">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <?php if (session()->has('errors')) : ?>
                        <?php
                        $errors = session('errors');
                        $errorHtml = is_array($errors) ? implode('<br>', $errors) : $errors->listErrors();
                        $errorHtml = str_replace(['<ul>', '</ul>', '<li>', '</li>'], ['', '', '• ', '<br>'], $errorHtml);
                        ?>
                        <script>
                            $(function() {
                                toastr.error(`
                <?= $errorHtml ?>
            `, 'Validation Error', {
                                    closeButton: true,
                                    progressBar: true,
                                    timeOut: 7000
                                });
                            });
                        </script>
                    <?php endif; ?>

                    <form action="<?= base_url('/attendance/request-attendance/' . $id) ?>" method="POST">



                        <!-- Check In / Out -->
                        <div class="row mb-2">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label><b>Check In Date</b> <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="check_in_date" value="<?= htmlspecialchars($date) ?>" min="<?= date('Y-m-d', strtotime('-3 days')) ?>"  max="<?= date('Y-m-d', strtotime('-1 day')) ?>"
                                        required>
                                    <span class="text-danger">(with in 3 days)</span>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label><b>From Time</b> <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="from_time" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label><b>To Time</b> <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="to_time" required>
                                </div>
                            </div>
                        </div>

                        <!-- Reason -->
                        <div class="row mb-3">
                            <div class="col-md-10 col-12">
                                <div class="form-group">
                                    <label><b>Request Notes</b> <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="request_notes" rows="4" required></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<?php $this->endSection() ?>