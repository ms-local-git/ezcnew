<link rel="apple-touch-icon" href="<?= base_url() ?>/assets/app/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/app/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/pickers/flatpickr/flatpickr.min.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">

<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/colors.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/components.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/app/css/plugins/forms/pickers/form-flat-pickr.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">

<style>
    :root {
        --app-font-family: Arial, sans-serif;
        --app-text-color: #000066;
    }

    body,
    .app-content,
    .content-wrapper,
    .card,
    .table,
    input,
    select,
    textarea,
    label,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    li,
    a {
        font-family: var(--app-font-family) !important;
        color: var(--app-text-color);
    }

    .btn,
    .btn * {
        font-family: var(--app-font-family) !important;
    }

    .mainNav {
        /*  color: #7b128c; */
        font-weight: bold;
    }

    .subNav {
        font-weight: bold;
    }

    .dataTables_length,
    .dataTables_info,
    .dataTables_paginate,
    .dataTables_filter {
        padding: 0px 18px;
    }

    .validation-summary {
        border: 1px solid #f5c6cb;
        background: linear-gradient(180deg, #fff5f6 0%, #fff 100%);
        border-left: 4px solid #dc3545;
        border-radius: 8px;
        padding: 12px 16px;
    }

    .validation-summary-title {
        color: #b42318 !important;
        font-weight: 700;
        margin: 0;
    }

    .validation-summary li {
        color: #b42318 !important;
        margin-bottom: 2px;
    }

    .field-inline-error {
        color: #b42318 !important;
        font-size: 12px;
        line-height: 1.3;
        margin-top: 6px;
        font-weight: 600;
    }

    .form-control.is-invalid,
    .custom-select.is-invalid,
    select.is-invalid,
    textarea.is-invalid {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.1rem rgba(220, 53, 69, 0.15) !important;
    }

    .required-asterisk {
        color: #dc3545 !important;
        font-weight: 700;
    }

    /* .card-datatable {
            display:none;
        } */
</style>
<!-- Sidebar Toggle Script -->

<style>
    .main-menu .main-menu-content,
    .main-menu .main-menu-content label,
    .main-menu .main-menu-content input {
        font-family: Arial, sans-serif !important;
        font-size: 14px !important;
    }

    .main-menu .main-menu-content .navigation,
    .main-menu .main-menu-content .navigation-main,
    .main-menu .main-menu-content .navigation-main .menu-content,
    .main-menu .main-menu-content .navigation-main li,
    .main-menu .main-menu-content .navigation-main a {
        margin-left: 0 !important;
    }

    .main-menu.menu-light .navigation .navigation-header span,
    .main-menu.menu-light .navigation>li>a,
    .main-menu.menu-light .navigation>li>a span {
        color: #00004d !important;
        font-weight: 500 !important;
    }

    .main-menu.menu-light .navigation>li ul.menu-content a,
    .main-menu.menu-light .navigation>li ul.menu-content a span {
        color: #3a4f9a !important;
        font-weight: 400 !important;
    }

    .main-menu.menu-light .navigation>li>a i,
    .main-menu.menu-light .navigation>li>a svg {
        color: #00004d !important;
    }

    .main-menu.menu-light .navigation>li ul.menu-content a i,
    .main-menu.menu-light .navigation>li ul.menu-content a svg {
        color: #3a4f9a !important;
    }

    .main-menu .main-menu-content label,
    .main-menu .main-menu-content input {
        color: #00004d !important;
        font-weight: 600 !important;
    }

    .sidebar-menu-search-item {
        padding: 0.5rem 0.75rem;
    }

    .sidebar-menu-search-wrap {
        position: relative;
    }

    .sidebar-menu-search-wrap #sidebar-menu-search-input {
        height: 34px;
        font-size: 14px;
    }

    .content-header-title {
        font-weight: 500;
        color: #00004d !important;
    }
</style>
<style>
    /* .add-heading-link {
        color: #7367f0;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid transparent;
        transition: color .2s ease, border-color .2s ease;
        font-size: 18px;
        padding-right: 11px;
    } */

        .add-heading-link {
        /* color: #7367f0;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid transparent;
        transition: color .2s ease, border-color .2s ease; */
        font-size: 18px;
        padding-right: 11px;
    }

    .add-heading-link:hover,
    .add-heading-link:focus {
        color: #5e50ee;
        border-bottom-color: #5e50ee;
        text-decoration: none;
    }
</style>