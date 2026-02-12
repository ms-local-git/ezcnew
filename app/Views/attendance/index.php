<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Attendance</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <a href="<?= base_url('attendance/create') ?>" class="btn btn-primary">
            Add Attendance
        </a>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-header">
                    <form method="GET" action="<?= base_url('attendance') ?>" class="w-100">
                        <div class="row align-items-end">

                            <div class="col-md-3 col-sm-6">
                                <label><b>Month</b></label>
                                <input
                                    type="month"
                                    name="month"
                                    class="form-control"
                                    value="<?= esc($month ?? date('Y-m')) ?>"
                                    onchange="this.form.submit()">
                            </div>

                            <div class="col-md-9 col-sm-6 text-right mt-1">
                                <div class="gap-2" role="group">

                                    <a href="<?= base_url('user-desktime') ?>"
                                        class="btn btn-primary btn-md">
                                        Add User Desk Time
                                    </a>

                                    <a href="<?= base_url('attendance/email-payroll?month=' . $month) ?>"
                                        class="btn btn-primary btn-md">
                                        Email Payroll
                                    </a>

                                    <a href="<?= base_url('request-attendance-list') ?>"
                                        class="btn btn-primary btn-md">
                                        Request Time Listing
                                    </a>

                                    
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <!-- TABLE -->
                <div class="card-datatable">
                    <table class="datatables-basic table" id="attendance-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Day Hours</th>
                                <th>Night Hours</th>
                                <th>Total Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $totalDayMinutes   = 0;
                            $totalNightMinutes = 0;
                            $totalMinutes      = 0;
                            ?>

                            <?php if (!empty($attendance)): ?>
                                <?php foreach ($attendance as $i => $row): ?>
                                    <?php
                                    $totalDayMinutes   += $row['day_minutes'];
                                    $totalNightMinutes += $row['night_minutes'];
                                    $totalMinutes      += $row['total_minutes'];

                                    $detailsUrl = base_url('attendance/details/' . $row['user_id'] . '?month=' . $month);
                                    ?>

                                    <tr class="clickable-row" data-href="<?= esc($detailsUrl) ?>">
                                        <td><?= $i + 1 ?></td>
                                        <td><?= esc($row['user_id']) ?></td>
                                        <td class="text-danger font-weight-bold"><?= mTh($row['day_minutes']) ?? 0 ?></td>
                                        <td class="text-danger font-weight-bold"><?= mTh($row['night_minutes']) ?? 0 ?></td>
                                        <td class="text-danger font-weight-bold"><?= mTh($row['total_minutes']) ?? 0 ?></td>
                                    </tr>

                                <?php endforeach ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        No attendance found for selected month
                                    </td>
                                </tr>
                            <?php endif ?>

                        </tbody>
                        <tfoot>
                            <tr class="fw-bold bg-light">
                                <td colspan="2" class="text-end font-weight-bold">TOTAL</td>
                                <td class="font-weight-bold"><?= mTh($totalDayMinutes) ?? 0 ?></td>
                                <td class="font-weight-bold"><?= mTh($totalNightMinutes) ?? 0 ?></td>
                                <td class="font-weight-bold"><?= mTh($totalMinutes) ?? 0 ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
    </div>
</section>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        var table = $('#attendance-table').DataTable({
            retrieve: true,

        });

        $(document).on('click', '.clickable-row', function(e) {
            if ($(e.target).is('a, button, input, select, textarea')) {
                return;
            }
            window.location = $(this).data('href');
        });

        $('.clickable-row').css('cursor', 'pointer');
    });
</script>

<style>
    .clickable-row:hover {
        background-color: rgba(0, 123, 255, 0.075) !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->endSection() ?>