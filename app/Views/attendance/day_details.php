<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <div class="col-md-6 col-sm-12">
            <h3 class="mb-1 fw-bold">
                User: <span class="text-primary"><?= esc($userId) ?></span>
            </h3>
            <h4 class="text-muted mb-0">
                Day Wise Attendance Report — <?= date('d-M-Y', strtotime($date)) ?>
            </h4>
        </div>

        <div class="col-md-6 col-sm-12 text-end mt-1">
            <div class="gap-1" role="group">

                <a href="<?= base_url('/user-desktime') ?>" class="btn btn-primary btn-md mb-1">
                    Add User Desk Time
                </a>

                <a href="<?= base_url('attendance/email-payroll') ?>" class="btn btn-primary btn-md mb-1">
                    Email Payroll
                </a>

                <a href="<?= base_url('request-attendance-list') ?>" class="btn btn-primary btn-md mb-1">
                    Request Time Listing
                </a>

                <a href="<?= base_url('attendance/request-attendance/' . $userId .'?date='.$date) ?>" class="btn btn-primary btn-md mb-1">
                    Add Request for Misc. Time
                </a>

                <a href="<?= base_url(
                    'request-attendance/' . $userId 
                ) ?>" class="btn btn-secondary btn-sm mb-1">
                    ← Back
                </a>

            </div>
        </div>

    </div>

    <div class="card-datatable">
        <table class="datatables-basic table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Day Hours</th>
                    <th>Night Hours</th>
                    <th>Hours</th>
                    <th>Pic In</th>
                    <th>Pic Out</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalDayMinutes   = 0;
                $totalNightMinutes = 0;
                $totalMinutes      = 0;
                ?>
                <?php if (!empty($records)): ?>
                    <?php foreach ($records as $i => $row): ?>
                        <?php
                        $totalDayMinutes   += $row['day_minutes'];
                        $totalNightMinutes += $row['night_minutes'];
                        $totalMinutes      += $row['minutes'];
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= esc($row['check_in']) ?></td>
                            <td><?= esc($row['check_out'] ?? '-') ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['day_minutes']) ?? 0 ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['night_minutes']) ?? 0 ?></td>
                            <td class="text-primary font-weight-bold"><?= mTh($row['minutes']) ?? 0 ?></td>

                            <!-- Pic In -->
                            <td>
                                <?php if (!empty($row['pic_in'])): ?>
                                    <img
                                        src="<?= base_url('public/uploads/attendance/' . $row['pic_in']) ?>"
                                        alt="Pic In"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imagePreviewModal"
                                        onclick="showImage(this.src)"
                                        style="width:40px;height:40px;object-fit:cover;border-radius:4px;cursor:pointer;">
                                <?php else: ?>
                                    <span class="text-muted">N/A</span>
                                <?php endif ?>
                            </td>

                            <!-- Pic Out -->
                            <td>
                                <?php if (!empty($row['pic_out'])): ?>
                                    <img
                                        src="<?= base_url('public/uploads/attendance/' . $row['pic_out']) ?>"
                                        alt="Pic Out"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imagePreviewModal"
                                        onclick="showImage(this.src)"
                                        style="width:40px;height:40px;object-fit:cover;border-radius:4px;cursor:pointer;">
                                <?php else: ?>
                                    <span class="text-muted">N/A</span>
                                <?php endif ?>
                            </td>

                            <td><?= esc($row['reason'] ?? '-') ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center text-muted">
                            No attendance records found
                        </td>
                    </tr>
                <?php endif ?>
            </tbody>
            <tfoot>
                <tr class="fw-bold bg-light">
                    <td colspan="3" class="text-end font-weight-bold">TOTAL</td>
                    <td class="font-weight-bold"><?= mTh($totalDayMinutes) ?? 0 ?></td>
                    <td class="font-weight-bold"><?= mTh($totalNightMinutes) ?? 0 ?></td>
                    <td colspan="3" class="font-weight-bold"><?= mTh($totalMinutes) ?? 0 ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

<!-- Image Preview Modal -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Image Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="previewImage" src="" class="img-fluid rounded" alt="Preview">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showImage(src) {
        document.getElementById('previewImage').src = src;
    }
</script>
<?= $this->endSection() ?>
