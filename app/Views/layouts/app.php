<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>

    <?= $this->include('common/__header') ?>
    <title><?= esc($title ?? 'Dashboard') ?></title>
    <?= $this->include('common/__css') ?>

    <?= $this->renderSection('styles') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<?php
$globalValidationErrors = [];
$errorsObj = session('errors');
$ciValidationErrors = session('_ci_validation_errors');
$validationObj = session('validation');
$successMessage = session('success');
$errorMessage = session('error');

if (is_array($errorsObj)) {
    $globalValidationErrors = $errorsObj;
} elseif (is_object($errorsObj) && method_exists($errorsObj, 'getErrors')) {
    $globalValidationErrors = $errorsObj->getErrors();
} elseif (is_array($ciValidationErrors)) {
    $globalValidationErrors = $ciValidationErrors;
} elseif (is_object($validationObj) && method_exists($validationObj, 'getErrors')) {
    $globalValidationErrors = $validationObj->getErrors();
}
?>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static"
    data-open="click"
    data-menu="vertical-menu-modern"
    data-col="">

    <!-- Header -->
    <?= $this->include('common/__header_menu') ?>


    <!-- Sidebar -->
    <?= $this->include('common/__left_menu') ?>

    <!-- Content -->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper container-xxl p-0">

            <!-- Page Header -->
            <?= $this->renderSection('page_header') ?>

            <?= $this->renderSection('search') ?>

            <?php if (!empty($globalValidationErrors)): ?>
                <div class="validation-summary mx-1 mt-1 mb-1">
                    <h6 class="validation-summary-title mb-50">Validation Error</h6>
                    <ul class="mb-0 pl-2">
                        <?php foreach ($globalValidationErrors as $message): ?>
                            <li><?= esc($message) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Page Content -->
            <div class="content-body">
                <?= $this->renderSection('content') ?>
            </div>

        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php // $this->include('common/__footer') 
    ?>

    <?php require(APPPATH . "views/common/__js.php");
    ?>

    <?= $this->renderSection('scripts') ?>
    <script>
        $(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                newestOnTop: true,
                positionClass: 'toast-top-right',
                timeOut: 3200
            };

            <?php if (!empty($successMessage)): ?>
                toastr.success(<?= json_encode((string) $successMessage) ?>);
            <?php endif; ?>

            <?php if (!empty($errorMessage)): ?>
                toastr.error(<?= json_encode((string) $errorMessage) ?>);
            <?php endif; ?>
        });
    </script>
    <script>
        (function() {
            function hasRequiredControl(scope) {
                return !!scope.querySelector('input[required]:not([type="hidden"]):not([disabled]), select[required]:not([disabled]), textarea[required]:not([disabled])');
            }

            function appendAsterisk(label) {
                if (!label || label.querySelector('.required-asterisk')) {
                    return;
                }
                if (/\*/.test(label.textContent || '')) {
                    return;
                }

                var mark = document.createElement('span');
                mark.className = 'required-asterisk';
                mark.textContent = ' *';
                label.appendChild(mark);
            }

            document.querySelectorAll('form .form-group').forEach(function(group) {
                if (!hasRequiredControl(group)) {
                    return;
                }
                var label = group.querySelector('label');
                appendAsterisk(label);
            });

            document.querySelectorAll('form label[for]').forEach(function(label) {
                var target = document.getElementById(label.getAttribute('for'));
                if (!target || !target.required || target.disabled || target.type === 'hidden') {
                    return;
                }
                appendAsterisk(label);
            });
        })();
    </script>
    <script>
        (function() {
            var errors = <?= json_encode($globalValidationErrors, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
            if (!errors || typeof errors !== 'object') {
                return;
            }

            Object.keys(errors).forEach(function(fieldName) {
                var nodes = document.getElementsByName(fieldName);
                var field = null;

                if (nodes && nodes.length) {
                    field = nodes[0];
                } else {
                    var indexedMatch = fieldName.match(/^(.+)\.(\d+)$/);
                    if (indexedMatch) {
                        var baseName = indexedMatch[1] + '[]';
                        var fieldIndex = parseInt(indexedMatch[2], 10);
                        var arrayNodes = document.getElementsByName(baseName);
                        if (arrayNodes && arrayNodes.length) {
                            field = arrayNodes[fieldIndex] || arrayNodes[0];
                        }
                    }
                }

                if (!field) {
                    return;
                }

                var message = Array.isArray(errors[fieldName]) ? errors[fieldName][0] : errors[fieldName];
                if (!message) {
                    return;
                }

                field.classList.add('is-invalid');

                var parent = field.closest('.form-group') || field.parentElement || field;
                if (parent.querySelector('.field-inline-error[data-error-key=\"' + fieldName.replace(/\"/g, '&quot;') + '\"]')) {
                    return;
                }

                var errorNode = document.createElement('div');
                errorNode.className = 'invalid-feedback d-block field-inline-error';
                errorNode.setAttribute('data-error-key', fieldName);
                errorNode.textContent = message;

                if (field.nextSibling) {
                    field.parentNode.insertBefore(errorNode, field.nextSibling);
                } else {
                    field.parentNode.appendChild(errorNode);
                }
            });
        })();
    </script>
</body>

</html>