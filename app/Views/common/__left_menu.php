<!-- BEGIN: Main Menu-->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$hide_sidebar = false;

if (
    isset($_SESSION['hide_sidebar'], $_SESSION['current_url']) &&
    $_SESSION['hide_sidebar'] == 1 &&
    $_SESSION['current_url'] == current_url()

) {
    $hide_sidebar = true;
}

?>




<?php if (!$hide_sidebar): ?>
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <span class="brand-logo">
                            <!-- Your SVG logo -->
                            <svg viewBox="0 0 139 95" height="24" xmlns="http://www.w3.org/2000/svg">
                                <!-- SVG content unchanged -->
                                <defs><!-- gradients --></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path d="M69.3453773,32.2519224 L101.428699,0 L138.784583,0 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon fill="#000000" opacity="0.05" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon fill="#000000" opacity="0.1" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon fill="url(#linearGradient-2)" opacity="0.1" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <h2 class="brand-text">COMPANY.</h2>
                    </a>
                </li>
                <!-- <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"></i>
                    </a>
                </li> -->
            </ul>
        </div>

        <div class="shadow-bottom"></div>

        <div class="main-menu-content">
            <!-- Hide Sidebar Toggle -->
            <!-- <div class="p-2 border-bottom">
                <form method="post" action="<?= base_url() ?>/toggle_sidebar" id="sidebar-toggle-form">
                    <div class="custom-control custom-switch custom-switch-success">
                        <input type="checkbox" class="custom-control-input" id="hide-sidebar-toggle" name="hide_sidebar" <?= $hide_sidebar ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="hide-sidebar-toggle">Hide sidebar (clean view)</label>
                    </div>
                </form>
            </div> -->

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="nav-item sidebar-menu-search-item">
                    <div class="sidebar-menu-search-wrap">
                        <input
                            type="text"
                            id="sidebar-menu-search-input"
                            class="form-control"
                            placeholder="Search menu..."
                            autocomplete="off">
                    </div>
                </li>

                <!-- Favourites -->
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="star"></i>
                        <span class="menu-title text-truncate">Favourites</span>
                        <?php if (!empty($_SESSION['bookmarks'])): ?>
                            <span class="badge badge-light-warning badge-pill ml-auto"><?= count($_SESSION['bookmarks']) ?></span>
                        <?php endif; ?>
                    </a>
                    <ul class="menu-content">
                        <?php if (!empty($_SESSION['bookmarks'])): ?>
                            <?php foreach ($_SESSION['bookmarks'] as $b): ?>
                                <li>
                                    <a href="<?= $b['page_url'] ?>">
                                        <i data-feather="bookmark"></i>
                                        <span class="menu-title text-truncate"><?= htmlentities($b['page_title']) ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><a class="text-muted"><i data-feather="bookmark"></i><span>No bookmarks yet</span></a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <hr>
                <!-- Agents -->
                <?php if (canCategory('agent')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#agents">
                            <i data-feather="users"></i>
                            <span class="menu-title text-truncate">Agents</span>
                        </a>
                        <ul class="menu-content" id="agents">
                            <?php if (canPermission('agent_list')): ?>
                                <li><a href="<?= base_url() ?>/agent"><i data-feather="list"></i><span>Agents Listing</span></a></li>
                            <?php endif; ?>
                            <?php if (canPermission('agent_add')): ?>
                                <li><a href="<?= base_url() ?>/agent/add"><i data-feather="user-plus"></i><span>Add Agent</span></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Role Management -->
                <?php if (hasRole('Admin')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#roles">
                            <i data-feather="shield"></i>
                            <span class="menu-title text-truncate">Role Management</span>
                        </a>
                        <ul class="menu-content" id="roles">
                            <li><a href="<?= base_url() ?>/roles"><i data-feather="layers"></i><span>Roles</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Clients -->
                <?php if (canCategory('client')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#clients">
                            <i data-feather="anchor"></i>
                            <span class="menu-title text-truncate">Clients</span>
                        </a>
                        <ul class="menu-content" id="clients">
                            <?php if (canPermission('client_add')): ?>
                                <li><a href="<?= base_url() ?>/clients/addclient"><i data-feather="user-plus"></i><span>Add Client</span></a></li>
                            <?php endif; ?>
                            <?php if (canPermission('client_list')): ?>
                                <li><a href="<?= base_url() ?>/clients"><i data-feather="users"></i><span>Clients List</span></a></li>
                            <?php endif; ?>

                            <!-- Reports -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#clients_reports">
                                    <i data-feather="file-text"></i>
                                    <span class="menu-title text-truncate">Reports</span>
                                </a>
                                <ul class="menu-content" id="clients_reports">
                                    <li><a href="<?= base_url() ?>/tools/travel_time_manage"><i data-feather="clock"></i><span>Travel Time Manage</span></a></li>
                                    <li><a href="<?= base_url() ?>/tools/pickup_time_manage"><i data-feather="clock"></i><span>Pickup Time Manage</span></a></li>
                                    <li><a href="<?= base_url() ?>/clients/inactive_clients"><i data-feather="user-x"></i><span>Inactive Clients</span></a></li>
                                    <li><a href="<?= base_url() ?>/clients/client_activity"><i data-feather="activity"></i><span>Client Activity</span></a></li>
                                    <li><a href="<?= base_url() ?>/clients/clients_pod_report"><i data-feather="image"></i><span>Client POD Report</span></a></li>
                                    <li><a href="<?= base_url() ?>/clients/charges_report"><i data-feather="dollar-sign"></i><span>Client Charges Report</span></a></li>
                                    <li><a href="<?= base_url() ?>/clients/missing_charges"><i data-feather="alert-circle"></i><span>Missing Charges</span></a></li>
                                </ul>
                            </li>

                            <!-- Credit Cards -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#credit_cards">
                                    <i data-feather="credit-card"></i>
                                    <span class="menu-title text-truncate">Credit Cards</span>
                                </a>
                                <ul class="menu-content" id="credit_cards">
                                    <li><a href="<?= base_url() ?>/credit_cards/notes_listing"><i data-feather="file-text"></i><span>Notes List</span></a></li>
                                    <li><a href="<?= base_url() ?>/credit_cards/add"><i data-feather="plus"></i><span>Add Note</span></a></li>
                                    <li><a href="<?= base_url() ?>/credit_cards/online_charges"><i data-feather="shopping-cart"></i><span>Online Charges</span></a></li>
                                    <li><a href="<?= base_url() ?>/credit_cards/pay_report"><i data-feather="dollar-sign"></i><span>Pay Report</span></a></li>
                                    <li><a href="<?= base_url() ?>/credit_cards/credit_card_list"><i data-feather="list"></i><span>Card Entries</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Owner Operators (DR) -->
                <?php if (canCategory('driver')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#ownerOperators">
                            <i data-feather="award"></i>
                            <span class="menu-title text-truncate">Owner Operators</span>
                        </a>
                        <ul class="menu-content" id="ownerOperators">
                            <!-- DR Manifest -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dr_manifest">
                                    <i data-feather="book-open"></i>
                                    <span class="menu-title text-truncate">DR Manifest</span>
                                </a>
                                <ul class="menu-content" id="dr_manifest">
                                    <li><a href="<?= base_url() ?>/dr_manifest/manifest_submitted"><i data-feather="circle"></i><span>Manifest Submitted</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_manifest/manifest_submit_report"><i data-feather="circle"></i><span>Manifest Submit Report</span></a></li>
                                </ul>
                            </li>

                            <!-- DR Reports -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dr_reports">
                                    <i data-feather="clipboard"></i>
                                    <span class="menu-title text-truncate">DR Reports</span>
                                </a>
                                <ul class="menu-content" id="dr_reports">
                                    <li><a href="<?= base_url() ?>/dr_report/inactive_drivers"><i data-feather="circle"></i><span>Inactive Drivers</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_report/advance_bonus_report"><i data-feather="circle"></i><span>Advance Bonus/Deduction Report</span></a></li>
                                </ul>
                            </li>

                            <!-- DR Settlement -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dr_settlement">
                                    <i data-feather="thumbs-up"></i>
                                    <span class="menu-title text-truncate">DR Settlement</span>
                                </a>
                                <ul class="menu-content" id="dr_settlement">
                                    <li><a href="<?= base_url() ?>/dr_settlement/pending_settlement"><i data-feather="circle"></i><span>Pending Settlement</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_settlement/pending_charges_approval"><i data-feather="circle"></i><span>Pending Charges Approval</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_settlement/check_manage"><i data-feather="circle"></i><span>Check Manage</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_settlement/bonus_deduction"><i data-feather="circle"></i><span>Bonus Deduction</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_settlement/browse"><i data-feather="circle"></i><span>Browse</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_settlement/check_modify"><i data-feather="circle"></i><span>Driver Check Modify</span></a></li>
                                </ul>
                            </li>

                            <!-- DR New Stuff -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dr_new_stuff">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="menu-title text-truncate">DR New Stuff</span>
                                </a>
                                <ul class="menu-content" id="dr_new_stuff">
                                    <li><a href="<?= base_url() ?>/dr_new_stuff/missing_settlement"><i data-feather="circle"></i><span>Driver Missing Settlement</span></a></li>
                                </ul>
                            </li>

                            <!-- DR Papers -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dr_papers">
                                    <i data-feather="copy"></i>
                                    <span class="menu-title text-truncate">DR Papers</span>
                                </a>
                                <ul class="menu-content" id="dr_papers">
                                    <li><a href="<?= base_url() ?>/dr_papers/templates"><i data-feather="circle"></i><span>Driver Paper Templates</span></a></li>
                                    <li><a href="<?= base_url() ?>/dr_papers/papers"><i data-feather="circle"></i><span>Driver Papers</span></a></li>
                                </ul>
                            </li>

                            <!-- Driver Info -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#d_info">
                                    <i data-feather="info"></i>
                                    <span class="menu-title text-truncate">D Info</span>
                                </a>
                                <ul class="menu-content" id="d_info">
                                    <li><a href="<?= base_url() ?>/d_info/driver_add"><i data-feather="circle"></i><span>Add Driver</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Warehouse -->
                <?php if (canCategory('warehouse')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#warehouse">
                            <i data-feather="home"></i>
                            <span class="menu-title text-truncate">Warehouse</span>
                        </a>
                        <ul class="menu-content" id="warehouse">
                            <!-- Ware Activity -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#ware_activity">
                                    <i data-feather="activity"></i>
                                    <span class="menu-title text-truncate">Ware Activity</span>
                                </a>
                                <ul class="menu-content" id="ware_activity">
                                    <li><a href="<?= base_url() ?>/ware_activity/activity_serial"><i data-feather="circle"></i><span>By Serial #</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_activity/activity_part"><i data-feather="circle"></i><span>By Part #</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_activity/activity_date"><i data-feather="circle"></i><span>By Date</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_activity/activity_search"><i data-feather="circle"></i><span>Activity Search</span></a></li>
                                </ul>
                            </li>

                            <!-- Ware Availability -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#ware_availability">
                                    <i data-feather="check-circle"></i>
                                    <span class="menu-title text-truncate">Ware Availability</span>
                                </a>
                                <ul class="menu-content" id="ware_availability">
                                    <li><a href="<?= base_url() ?>/ware_availability/summary"><i data-feather="circle"></i><span>Summary</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_availability/detailed_info"><i data-feather="circle"></i><span>Detailed Info</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_availability/serial_no"><i data-feather="circle"></i><span>By Serial #</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_availability/part_no"><i data-feather="circle"></i><span>By Part #</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_availability/availability_search"><i data-feather="circle"></i><span>Availability Search</span></a></li>
                                </ul>
                            </li>

                            <!-- Ware Inventory -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#ware_inventory">
                                    <i data-feather="database"></i>
                                    <span class="menu-title text-truncate">Ware Inventory</span>
                                </a>
                                <ul class="menu-content" id="ware_inventory">
                                    <li><a href="<?= base_url() ?>/ware_inventory/location_report"><i data-feather="circle"></i><span>Inventory by location</span></a></li>
                                </ul>
                            </li>

                            <!-- Ware Modify -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#ware_modify">
                                    <i data-feather="edit"></i>
                                    <span class="menu-title text-truncate">Ware Modify</span>
                                </a>
                                <ul class="menu-content" id="ware_modify">
                                    <li><a href="<?= base_url() ?>/ware_modify/tracking_modify"><i data-feather="circle"></i><span>Tracking Modify</span></a></li>
                                    <li><a href="<?= base_url() ?>/ware_modify/location_modify"><i data-feather="circle"></i><span>Serial Location Modify</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Co Vehicles -->
                <?php if (canCategory('co_vehicles')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#co_vehicles">
                            <i data-feather="truck"></i>
                            <span class="menu-title text-truncate">Co Vehicles</span>
                        </a>
                        <ul class="menu-content" id="co_vehicles">
                            <li><a href="<?= base_url() ?>/co_vehicles/max_value_manage"><i data-feather="alert-triangle"></i><span>Vehicle Max Value Manage</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/vehicle_listing"><i data-feather="align-justify"></i><span>Vehicle Manage/Listing</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/expense_listing"><i data-feather="list"></i><span>Vehicle Expense Listing</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/add"><i data-feather="plus"></i><span>Add New Vehicles</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/toll_manage_list"><i data-feather="tag"></i><span>Toll Code Listing</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/vehicle_miles_diff_report"><i data-feather="bar-chart"></i><span>Vehicle Miles Diff Report</span></a></li>
                            <li><a href="<?= base_url() ?>/co_vehicles/summary_report"><i data-feather="book"></i><span>Summary Report</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Dispatch -->
                <?php if (canCategory('dispatch')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#dispatch">
                            <i data-feather="map-pin"></i>
                            <span class="menu-title text-truncate">Dispatch</span>
                        </a>
                        <ul class="menu-content" id="dispatch">
                            <li><a href="<?= base_url() ?>/dispatch/order_search"><i data-feather="search"></i><span>Order Search</span></a></li>
                            <li><a href="<?= base_url() ?>/dispatch/order_quality"><i data-feather="eye"></i><span>Order Quality Control</span></a></li>
                            <li><a href="<?= base_url() ?>/dispatch/acknowledgement"><i data-feather="thumbs-up"></i><span>Acknowledgement</span></a></li>
                            <li><a href="<?= base_url() ?>/dispatch/dispatched_jobs"><i data-feather="send"></i><span>Dispatched Jobs</span></a></li>
                            <li><a href="<?= base_url() ?>/dispatch/dispatching"><i data-feather="truck"></i><span>Dispatching</span></a></li>
                            <li><a href="<?= base_url() ?>/dispatch/driver_zone"><i data-feather="alert-octagon"></i><span>Driver Zone Manage</span></a></li>

                            <!-- Dispatch Reports -->
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#dispatch_reports">
                                    <i data-feather="file-text"></i>
                                    <span class="menu-title text-truncate">Dispatch Reports</span>
                                </a>
                                <ul class="menu-content" id="dispatch_reports">
                                    <li><a href="<?= base_url() ?>/dispatch_reports/weekly_charges"><i data-feather="circle"></i><span>Weekly Charges</span></a></li>
                                    <li><a href="<?= base_url() ?>/dispatch_reports/missing_dr_charges"><i data-feather="circle"></i><span>Missing Driver Charges</span></a></li>
                                    <li><a href="<?= base_url() ?>/dispatch_reports/weekly_charges_night"><i data-feather="circle"></i><span>Weekly Charges (Night)</span></a></li>
                                    <li><a href="<?= base_url() ?>/dispatch_reports/weekly_charges_day"><i data-feather="circle"></i><span>Weekly Charges (Day)</span></a></li>
                                    <li><a href="<?= base_url() ?>/dispatch_reports/job_charges"><i data-feather="circle"></i><span>Job Charges Report</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Accounts -->
                <?php if (canCategory('accounts')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#accounts">
                            <i data-feather="file-text"></i>
                            <span class="menu-title text-truncate">Accounts</span>
                        </a>
                        <ul class="menu-content" id="accounts">
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#accounts_receivable">
                                    <i data-feather="download"></i>
                                    <span class="menu-title text-truncate">Accounts Receivable</span>
                                </a>
                                <ul class="menu-content" id="accounts_receivable">
                                    <li><a href="<?= base_url() ?>/accounts/pending_payment"><i data-feather="circle"></i><span>Pending Payment</span></a></li>
                                    <li><a href="<?= base_url() ?>/accounts/holding_payment"><i data-feather="circle"></i><span>Holding Payment List</span></a></li>
                                    <li><a href="<?= base_url() ?>/accounts/bad_debt"><i data-feather="circle"></i><span>Bad Debt List</span></a></li>
                                    <li><a href="<?= base_url() ?>/accounts/pending_invoice"><i data-feather="circle"></i><span>Pending Invoices</span></a></li>
                                    <li><a href="<?= base_url() ?>/accounts/charge_compare"><i data-feather="circle"></i><span>Charge Compare Report</span></a></li>
                                    <li><a href="<?= base_url() ?>/accounts/payment_search"><i data-feather="circle"></i><span>Payment Search</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Jobs -->
                <?php if (canCategory('jobs')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#jobs">
                            <i data-feather="search"></i>
                            <span class="menu-title text-truncate">Jobs</span>
                        </a>
                        <ul class="menu-content" id="jobs">
                            <li><a href="<?= base_url() ?>/jobs/new_job"><i data-feather="bell"></i><span>New Job Entry</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/job_search"><i data-feather="zoom-in"></i><span>Search</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/reffrence"><i data-feather="link"></i><span>Job Reference</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/jobtype"><i data-feather="type"></i><span>Job Type</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/branch"><i data-feather="cpu"></i><span>Branch</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/airport"><i data-feather="navigation-2"></i><span>Airport</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/pod"><i data-feather="circle"></i><span>POD</span></a></li>
                            <li><a href="<?= base_url() ?>/jobs/client"><i data-feather="circle"></i><span>Client</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Branches -->
                <?php if (canCategory('branches')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#branches">
                            <i data-feather="share-2"></i>
                            <span class="menu-title text-truncate">Branches</span>
                        </a>
                        <ul class="menu-content" id="branches">
                            <li><a href="<?= base_url() ?>/branch"><i data-feather="list"></i><span>Branch Listing</span></a></li>
                            <li><a href="<?= base_url() ?>/branch/add"><i data-feather="file-plus"></i><span>Add Branch</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Users -->
                <?php if (canCategory('users')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#users">
                            <i data-feather="users"></i>
                            <span class="menu-title text-truncate">Users</span>
                        </a>
                        <ul class="menu-content" id="users">
                            <li><a href="<?= base_url() ?>/user"><i data-feather="list"></i><span>User Listing</span></a></li>
                            <li><a href="<?= base_url() ?>/user/add"><i data-feather="user-plus"></i><span>Add Users</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Coupons -->
                <?php if (canCategory('coupons')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#coupons">
                            <i data-feather="gift"></i>
                            <span class="menu-title text-truncate">Coupons</span>
                        </a>
                        <ul class="menu-content" id="coupons">
                            <li><a href="<?= base_url() ?>/coupons/email_bank"><i data-feather="mail"></i><span>Emails Bank</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Checks -->
                <?php if (canCategory('checks')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#checks">
                            <i data-feather="check-square"></i>
                            <span class="menu-title text-truncate">Checks</span>
                        </a>
                        <ul class="menu-content" id="checks">
                            <li><a href="<?= base_url() ?>/checks/bank_manage"><i data-feather="aperture"></i><span>Bank Manage</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!-- Checks -->
                <?php if (canCategory('checks')): ?>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" data-toggle="collapse" data-target="#checks">
                            <i data-feather="check-square"></i>
                            <span class="menu-title text-truncate">Attendence</span>
                        </a>
                        <ul class="menu-content" id="checks">
                            <li><a href="<?= base_url() ?>/attendance"><i data-feather="aperture"></i><span>Manage</span></a></li>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
<?php endif; ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('hide-sidebar-toggle');
        const form = document.getElementById('sidebar-toggle-form');
        const menuSearchInput = document.getElementById('sidebar-menu-search-input');
        const mainMenu = document.getElementById('main-menu-navigation');
        const searchContainer = menuSearchInput ? menuSearchInput.closest('.sidebar-menu-search-item') : null;

        if (toggle && form) {
            toggle.addEventListener('change', function() {
                const formData = new FormData(form);
                formData.set('hide_sidebar', this.checked ? '1' : '0');

                fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            location.reload(); // Reload the page to show/hide sidebar
                        } else {
                            alert('Failed to save preference.');
                            this.checked = !this.checked;
                        }
                    })
                    .catch(() => {
                        alert('Network error.');
                        this.checked = !this.checked;
                    });
            });
        }

        if (!menuSearchInput || !mainMenu) {
            return;
        }

        function getDirectAnchor(li) {
            if (!li || !li.children) {
                return null;
            }

            for (let i = 0; i < li.children.length; i++) {
                const child = li.children[i];
                if (child.tagName === 'A') {
                    return child;
                }
            }
            return null;
        }

        function getDirectMenuContent(li) {
            if (!li || !li.children) {
                return null;
            }

            for (let i = 0; i < li.children.length; i++) {
                const child = li.children[i];
                if (child.tagName === 'UL' && child.classList.contains('menu-content')) {
                    return child;
                }
            }
            return null;
        }

        function getAnchorText(li) {
            const directAnchor = getDirectAnchor(li);
            if (!directAnchor) {
                return '';
            }

            const span = directAnchor.querySelector('span');
            if (span && span.textContent) {
                return span.textContent.trim().toLowerCase();
            }
            return (directAnchor.textContent || '').trim().toLowerCase();
        }

        function filterNode(li, query) {
            if (!li || li === searchContainer) {
                return true;
            }

            const subMenu = getDirectMenuContent(li);
            let childMatch = false;

            if (subMenu) {
                const childItems = Array.from(subMenu.children).filter(function(child) {
                    return child.tagName === 'LI';
                });

                childItems.forEach(function(child) {
                    if (filterNode(child, query)) {
                        childMatch = true;
                    }
                });
            }

            const ownText = getAnchorText(li);
            const ownMatch = !query || ownText.indexOf(query) !== -1;
            const matched = !query || ownMatch || childMatch;

            li.style.display = matched ? '' : 'none';

            if (subMenu) {
                if (!query) {
                    li.classList.remove('open');
                } else if (childMatch) {
                    li.classList.add('open');
                }
            }

            return matched;
        }

        function applySidebarFilter(rawQuery) {
            const query = (rawQuery || '').trim().toLowerCase();
            const topLevelItems = Array.from(mainMenu.children).filter(function(child) {
                return child.tagName === 'LI';
            });

            let hasVisibleModule = false;
            let modulesHeader = null;

            topLevelItems.forEach(function(li) {
                if (li.classList.contains('navigation-header')) {
                    modulesHeader = li;
                    return;
                }

                if (li === searchContainer) {
                    li.style.display = '';
                    return;
                }

                const visible = filterNode(li, query);

                if (modulesHeader && visible) {
                    hasVisibleModule = true;
                }
            });

            if (modulesHeader) {
                if (!query) {
                    modulesHeader.style.display = '';
                } else {
                    modulesHeader.style.display = hasVisibleModule ? '' : 'none';
                }
            }
        }

        menuSearchInput.addEventListener('input', function() {
            applySidebarFilter(menuSearchInput.value);
        });

        menuSearchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                menuSearchInput.value = '';
                applySidebarFilter('');
            }
        });
    });
</script>
<!-- END: Main Menu -->
