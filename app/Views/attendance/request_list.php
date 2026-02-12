<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <div class="col-md-6 col-sm-12">
            <h4 class="text-muted mb-0">
                User Attendance Requests
            </h4>
        </div>

        <div class="col-md-6 col-sm-12 text-end mt-1">
            <div class="gap-1" role="group">

                <a href="<?= base_url('user-desktime') ?>" class="btn btn-primary btn-md mb-1">
                    Add User Desk Time
                </a>

                <a href="<?= base_url('attendance/email-payroll') ?>" class="btn btn-primary btn-md mb-1">
                    Email Payroll
                </a>

                <a href="<?= base_url('request-attendance-list') ?>" class="btn btn-primary btn-md mb-1">
                    Request Time Listing
                </a>

                

            </div>
        </div>

    </div>

    <div class="card-datatable">
        <table class="datatables-basic table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>From Time</th>
                    <th>To Time</th>
                    <th>Request Notes</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($list)): ?>
                    <?php foreach ($list as $i => $row): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= esc($row['user_id']) ?></td>
                            <td><?= esc($row['from_time'] ?? '-') ?></td>
                            <td><?= esc($row['to_time'] ?? '-') ?></td>
                            <td class="text-primary fw-bold"><?= esc($row['request_notes'] ?? '-') ?></td>
                            <td class="status-col">
                                <?php $status = $row['request_status'] ?? 'on_waiting'; ?>

                                <?php if ($status == 'Accepted'): ?>
                                    <span class="badge bg-success">Accepted</span>
                                <?php elseif ($status == 'Rejected'): ?>
                                    <span class="badge bg-danger">Rejected</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark">Waiting</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <button type="button"
                                    class="btn btn-success btn-sm btn-status"
                                    data-id="<?= esc($row['id']) ?>"
                                    data-type="accept">
                                    Approve
                                </button>

                                <button type="button"
                                    class="btn btn-danger btn-sm btn-status"
                                    data-id="<?= esc($row['id']) ?>"
                                    data-type="reject">
                                    Reject
                                </button>
                            </td>

                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            No attendance records found
                        </td>
                    </tr>
                <?php endif ?>
            </tbody>

        </table>
    </div>

</div>


<script>
    document.addEventListener("click", function(e) {
        if (!e.target.classList.contains("btn-status")) return;

        const btn = e.target;
        const id = btn.getAttribute("data-id");
        const type = btn.getAttribute("data-type");
        const row = btn.closest("tr");

        if (!confirm("Are you sure?")) return;

        btn.disabled = true;

        fetch("<?= base_url('attendance/requests/status') ?>", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: new URLSearchParams({
                    id: id,
                    type: type
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert(data.msg);

                    // remove row after success
                    row.remove();
                } else {
                    alert(data.msg || "Something went wrong");
                    btn.disabled = false;
                }
            })
            .catch(err => {
                console.error(err);
                alert("Server error!");
                btn.disabled = false;
            });
    });
</script>

<?= $this->endSection() ?>