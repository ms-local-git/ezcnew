<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <h2 class="content-header-title mb-0">Edit Role</h2>
        <p class="text-muted mt-1">
            Update role details and modify assigned permissions
        </p>
    </div>
</div>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<form method="post" action="<?= base_url('roles/update/' . $role['id']) ?>">

    <!-- ROLE INFO -->
    <div class="card mb-2">
        <div class="card-header">
            <h4 class="card-title mb-0">Role Information</h4>
        </div>

        <div class="card-body">
            <div class="row">

                <!-- ROLE NAME -->
                <div class="col-md-6">
                    <label class="form-label">Role Name</label>
                    <input type="text"
                        name="name"
                        value="<?= old('name') ?? esc($role['name']) ?>"
                        class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>">

                    <?php if (session('errors.name')): ?>
                        <div class="invalid-feedback">
                            <?= esc(session('errors.name')) ?>
                        </div>
                    <?php endif ?>
                </div>

                <!-- SLUG -->
                <div class="col-md-6">
                    <label class="form-label">Slug</label>
                    <input type="text"
                        name="slug"
                        value="<?= old('slug') ?? esc($role['slug']) ?>"
                        class="form-control <?= session('errors.slug') ? 'is-invalid' : '' ?>">

                    <?php if (session('errors.slug')): ?>
                        <div class="invalid-feedback">
                            <?= esc(session('errors.slug')) ?>
                        </div>
                    <?php endif ?>

                    <small class="text-muted">
                        Used internally (lowercase, no spaces)
                    </small>
                </div>

            </div>
        </div>
    </div>


    <!-- PERMISSIONS -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Permissions</h4>
            <small class="text-muted">
                Modify permissions assigned to this role
            </small>
        </div>

        <div class="card-body">

            <?php foreach ($permissionTree as $block): ?>
                <div class="border rounded mb-1 permission-block" data-category-slug="<?= esc($block['category']['slug']) ?>">

                    <!-- CATEGORY HEADER -->
                    <div class="d-flex justify-content-between align-items-center px-2 py-1 bg-light">
                        <strong><?= esc($block['category']['name']) ?></strong>

                        <?php
                            // determine checked permissions source
                            $currentPermissions = old('permissions') ?? $assignedIds;

                            $allChecked = true;
                            foreach ($block['permissions'] as $p) {
                                if (!in_array($p['id'], $currentPermissions)) {
                                    $allChecked = false;
                                    break;
                                }
                            }
                        ?>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                class="custom-control-input check-category"
                                id="cat<?= $block['category']['id'] ?>"
                                data-category="<?= $block['category']['id'] ?>"
                                <?= $allChecked ? 'checked' : '' ?>>
                            <label class="custom-control-label"
                                for="cat<?= $block['category']['id'] ?>">
                                Select All
                            </label>
                        </div>
                    </div>

                    <!-- PERMISSIONS LIST -->
                    <div class="p-2">
                        <div class="row">
                            <?php foreach ($block['permissions'] as $perm): ?>
                                <div class="col-md-4 col-sm-6 mb-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                            class="custom-control-input perm-<?= $block['category']['id'] ?>"
                                            id="perm<?= $perm['id'] ?>"
                                            name="permissions[]"
                                            value="<?= $perm['id'] ?>"
                                            <?= in_array($perm['id'], $currentPermissions) ? 'checked' : '' ?>>
                                        <label class="custom-control-label"
                                            for="perm<?= $perm['id'] ?>">
                                            <?= esc($perm['title']) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>

        </div>
    </div>


    <!-- ACTION BAR -->
    <div class="card mt-2">
        <div class="card-body d-flex justify-content-end">
            <a href="<?= base_url('roles') ?>"
                class="btn btn-outline-secondary mr-1">
                Cancel
            </a>
            <button type="submit"
                class="btn btn-success px-3">
                Update Role
            </button>
        </div>
    </div>

</form>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>
$('.check-category').on('change', function () {
    const catId = $(this).data('category');
    $('.perm-' + catId).prop('checked', this.checked);
});

function normalizeSlug(value) {
    return (value || '').toLowerCase().replace(/[^a-z0-9]/g, '');
}

function applyPermissionFilterByRoleSlug() {
    const roleSlug = normalizeSlug($('input[name="slug"]').val());
    const $blocks = $('.permission-block');

    if (!roleSlug) {
        $blocks.show();
        return;
    }

    let matchCount = 0;
    $blocks.each(function () {
        const catSlug = normalizeSlug($(this).data('category-slug'));
        const matched = catSlug && (catSlug.includes(roleSlug) || roleSlug.includes(catSlug));
        $(this).toggle(matched);
        if (matched) {
            matchCount++;
        }
    });

    // Fallback: if no matching category exists for this slug, show all.
    if (matchCount === 0) {
        $blocks.show();
    }
}

$('input[name="slug"]').on('input', applyPermissionFilterByRoleSlug);
applyPermissionFilterByRoleSlug();
</script>
<?= $this->endSection() ?>
