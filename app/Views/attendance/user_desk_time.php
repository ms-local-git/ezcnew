<?php $this->extend('layouts/app') ?>

<?php $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Add User Desk Time</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Add User Desk Time</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>


<?php $this->section('content') ?>
<section name="invoice-printout">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">

                    <form action="<?= base_url('store-attendence') ?>" method="POST">

                        <!-- User -->
                        <div class="row mb-2">
                            <div class="col-md-8 col-12">
                                <div class="form-group">
                                    <label><b>User ID</b> <span class="text-danger">*</span></label>
                                    <select name="user_id" class="form-control select2" required>
                                        <?foreach($users as $user):?>
                                        <option value="<?= $user['user_id']?>"><?= esc($user['user_name'])?></option>
                                        <?endforeach?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Check In / Out -->
                        <div class="row mb-2">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label><b>Check In</b> <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control" name="check_in" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="form-group">
                                    <label><b>Check Out</b> <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control" name="check_out" required>
                                </div>
                            </div>
                        </div>

                        <!-- Reason -->
                        <div class="row mb-3">
                            <div class="col-md-10 col-12">
                                <div class="form-group">
                                    <label><b>Reason</b></label>
                                    <textarea class="form-control" name="reason" rows="4"></textarea>
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