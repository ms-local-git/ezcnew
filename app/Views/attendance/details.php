<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="card">

    <div class="card-header">
        <div class="row align-items-center">

            <div class="col-md-6 col-sm-12">
                <h3 class="mb-1 fw-bold">
                    User: <span class="text-primary"><?= esc($userId) ?></span>
                </h3>
                <h4 class="text-muted mb-0">
                    Month Wise Attendance Report — <?= date('F Y', strtotime($month . '-01')) ?>
                </h4>
            </div>



            <div class="col-md-6 col-sm-12 text-right mt-1">
                <div class="gap-1" role="group">

                    <a href="<?= base_url('admin/user-desktime') ?>"
                        class="btn btn-primary btn-md mb-1">
                        Add User Desk Time
                    </a>

                    <a href="<?= base_url('attendance/email-payroll?user_id=' . $userId . '&month=' . $month) ?>"
                        class="btn btn-primary btn-md mb-1">
                        Email Payroll
                    </a>

                    <a href="<?= base_url('request-attendance-list') ?>"
                        class="btn btn-primary btn-md mb-1">
                        Request Time Listing
                    </a>

                    <a href="<?= base_url('attendance/request-attendance/' . $userId ) ?>"
                        class="btn btn-primary btn-md mb-1">
                        Add Request for Misc. Time
                    </a>

                    <a href="<?= base_url('attendance?month=' . $month) ?>"
                        class="btn btn-secondary btn-sm mb-1">
                        ← Back
                    </a>

                </div>
            </div>

        </div>
    </div>



    <div class="card-datatable">
        <table class="datatables-basic table" id="user-attendance-table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Date</th>
                    <th>Entries</th>
                    <th>Day Hours</th>
                    <th>Night Hours</th>
                    <th>Hours</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalDayMinutes   = 0;
                $totalNightMinutes = 0;
                $totalMinutes      = 0;
                ?>
                <?php if (!empty($days)): ?>
                    <?php foreach ($days as $row): ?>
                        <?php
                        $totalDayMinutes   += $row['day_minutes'];
                        $totalNightMinutes += $row['night_minutes'];
                        $totalMinutes      += $row['total_minutes'];

                        $dayDetailsUrl = base_url('attendance/day/' . $userId . '?date=' . $row['day']);
                        ?>
                        <tr class="clickable-row" data-href="<?= esc($dayDetailsUrl) ?>">
                            <td><?= esc($userId) ?></td>
                            <td><?= date('d-M-Y', strtotime($row['day'])) ?></td>
                            <td><?= esc($row['entries']) ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['day_minutes']) ?? 0 ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['night_minutes']) ?? 0 ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['total_minutes']) ?? 0 ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            No records found
                        </td>
                    </tr>
                <?php endif ?>
            </tbody>
            <tfoot>
                <tr class="fw-bold bg-light">
                    <td colspan="3" class="text-end font-weight-bold">TOTAL</td>
                    <td class="font-weight-bold"><?= mTh($totalDayMinutes) ?? 0 ?></td>
                    <td class="font-weight-bold"><?= mTh($totalNightMinutes) ?? 0 ?></td>
                    <td class="font-weight-bold"><?= mTh($totalMinutes) ?? 0 ?></td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        var table = $('#user-attendance-table').DataTable({
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