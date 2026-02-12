<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $request = $request ?? \Config\Services::request();
    $hide_sidebar = false;
    $page_title = $page_title ?? ($title ?? '');
    $selectedUserType = $request->getGet('user_type') ?? 'driver';
    if (!in_array($selectedUserType, ['driver', 'client', 'agent', 'job'], true)) {
        $selectedUserType = 'driver';
    }
    $searchKeyword = $request->getGet('keyword') ?? '';

    if (
        isset($_SESSION['hide_sidebar'], $_SESSION['current_url']) &&
        $_SESSION['hide_sidebar'] == 1 &&
        $_SESSION['current_url'] == current_url()

    ) {
        $hide_sidebar = true;
    }

    ?>

    <?php if ($hide_sidebar): ?>
        <style>
            /* =========================================================
   Base variables (mobile-first)
   ========================================================= */
            :root {
                --content-margin: 15px;
                --navbar-left: 10px;
                /* added extra margin for navbar */
                --navbar-width: 100%;

                --container-max: 100%;
            }

            /* =========================================================
   Base styles
   ========================================================= */
            html .content {
                margin-left: var(--content-margin);
                margin-right: var(--content-margin);
            }

            /* Remove sidebar offset when sidebar is hidden */
            body.vertical-menu-modern .app-content,
            body.vertical-menu-modern .content {
                margin-left: 0;
                margin-right: 0;
            }

            body.vertical-menu-modern .content-wrapper,
            body.vertical-menu-modern .content-wrapper.container-xxl {
                max-width: 100%;
                width: 100%;
            }

            .header-navbar.navbar-shadow {
                /* margin-right: var(--navbar-left); */
                margin-right: 32px;
                width: 96.5%;
                /*width: 96vw;*/
                /* margin-left: -31px;
                width: var(--navbar-width); */
            }

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl,
            .container-xxl {
                max-width: var(--container-max);
            }

            /* =========================================================
   ≥576px (Small)
   ========================================================= */
            @media (min-width: 576px) {
                :root {
                    --content-margin: 30px;
                    --navbar-left: -5px;
                    /* increased from -15px to -5px */
                    --navbar-width: 95vw;
                    --container-max: 540px;
                }
            }

            /* =========================================================
   ≥768px (Medium)
   ========================================================= */
            @media (min-width: 768px) {
                :root {
                    --content-margin: 60px;
                    --navbar-left: -20px;
                    /* increased from -40px to -20px */
                    --navbar-width: 90vw;
                    --container-max: 720px;
                }
            }

            /* =========================================================
   ≥992px (Large)
   ========================================================= */
            @media (min-width: 992px) {
                :root {
                    --content-margin: 100px;
                    --navbar-left: -50px;
                    /* increased from -70px to -50px */
                    --navbar-width: 85vw;
                    --container-max: 960px;
                }
            }

            /* =========================================================
   ≥1200px (Extra Large)
   ========================================================= */
            @media (min-width: 1200px) {
                :root {
                    --content-margin: 150px;
                    --navbar-left: -67px;
                    /* increased from -87px to -67px */
                    --navbar-width: 81vw;
                    --container-max: 1140px;
                }
            }

            /* =========================================================
   ≥1400px (XXL)
   ========================================================= */
            @media (min-width: 1400px) {
                :root {
                    --container-max: 1320px;
                }
            }

            /* =========================================================
   ≥1440px (Ultra-wide)
   ========================================================= */
            @media (min-width: 1440px) {
                :root {
                    --content-margin: 200px;
                    --navbar-left: -100px;
                    /* increased from -120px to -100px */
                    --navbar-width: 75vw;
                    --container-max: 3000px;
                }
            }
        </style>
    <?php endif; ?>

    <div class="p-2 border-bottom position-fixed top-0 start-0 bg-white" style="z-index:5;">
        <form method="post" action="<?= base_url() ?>/toggle_sidebar" id="sidebar-toggle-form">
            <div class="custom-control custom-switch custom-switch-success">
                <input type="hidden" name="current_url" value="<?= current_url() ?>">

                <input type="checkbox"
                    class="custom-control-input"
                    id="hide-sidebar-toggle"
                    name="hide_sidebar"
                    <?= $hide_sidebar ? 'checked' : '' ?>>
                <label class="custom-control-label" for="hide-sidebar-toggle">
                    Hide sidebar (clean view)
                </label>
            </div>
        </form>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>

            <ul class="nav navbar-nav">
                <h2 class="card-title"><i data-feather="star" style="height: 24px;width: 24px;"></i> <?= $page_title ?></h2>

            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star" onclick="add_bookmark_fun()"><i class="ficon text-secondary star-bookmark" data-feather="star"></i></a>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <!-- <form id="search_header_form">
                    <select class="form-control input me-2" id="search_user_type" name="user_type" style="width: 150px; display: inline-block;margin-left: 9px;">
                        <option value="driver">Driver</option>
                        <option value="client">Client</option>
                        <option value="agent">Agent</option>
                    </select>
                    <input class="form-control input" id="search_header_input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search" style="width: calc(100% - 180px); display: inline-block;">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>

                    <input type="submit" style="display:none;">
                </form> -->

                    <form id="search_header_formm" method="get">
                        <div id="search_user_type_group">
                            <span>Search By</span>
                            <label class="mb-0">
                                <input type="radio" name="user_type" value="driver" <?= $selectedUserType === 'driver' ? 'checked' : '' ?>> Driver
                            </label>
                            <label class="mb-0">
                                <input type="radio" name="user_type" value="client" <?= $selectedUserType === 'client' ? 'checked' : '' ?>> Client
                            </label>
                            <label class="mb-0">
                                <input type="radio" name="user_type" value="agent" <?= $selectedUserType === 'agent' ? 'checked' : '' ?>> Agent
                            </label>
                            <label class="mb-0">
                                <input type="radio" name="user_type" value="job" <?= $selectedUserType === 'job' ? 'checked' : '' ?>> Job
                            </label>
                        </div>
                        <input class="form-control input" id="search_header_input" name="keyword" type="text" value="<?= esc($searchKeyword) ?>" placeholder="Enter Text..." tabindex="-1" data-search="search">
                        <button type="submit" class="btn btn-primary btn-sm" id="search_header_submit">Search</button>
                        <div class="search-input-close"><i data-feather="x"></i></div>
                    </form>



                </div>

            </li>


            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?= $_SESSION['user_name'] ?></span><span class="user-status"><? echo user_role() ?></span></div><span class="avatar"><img class="round" src="<?= base_url() ?>/assets/app/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="page-profile.html">
                        <i class="mr-50" data-feather="user"></i> Profile
                    </a>
                    <!-- <a class="dropdown-item" href="app-email.html">
                            <i class="mr-50" data-feather="mail"></i> Inbox
                        </a>
                        <a class="dropdown-item" href="app-todo.html">
                            <i class="mr-50" data-feather="check-square"></i> Task
                        </a>
                        <a class="dropdown-item" href="app-chat.html">
                            <i class="mr-50" data-feather="message-square"></i> Chats
                        </a> -->
                    <div class="dropdown-divider"></div>
                    <!-- <a class="dropdown-item" href="page-account-settings.html">
                            <i class="mr-50" data-feather="settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="page-pricing.html">
                            <i class="mr-50" data-feather="credit-card"></i> Pricing
                        </a>
                        <a class="dropdown-item" href="page-faq.html">
                            <i class="mr-50" data-feather="help-circle"></i> FAQ
                        </a> -->
                    <a class="dropdown-item" href="<?= base_url() ?>/logout">
                        <i class="mr-50" data-feather="power"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<style>
    #search_header_formm {
        display: flex;
        align-items: center;
        gap: 10px;
        padding-right: 46px;
        min-height: 64px;
    }

    #search_user_type_group {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin-left: 9px;
        white-space: nowrap;
        flex: 0 0 auto;
    }

    #search_user_type_group label {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin: 0;
        font-size: 14px;
        line-height: 1.2;
    }

    /* Override theme search-input generic input rules for radios */
    .search-input #search_user_type_group input[type="radio"] {
        position: static !important;
        width: auto !important;
        height: auto !important;
        margin: 0 !important;
        padding: 0 !important;
        opacity: 1 !important;
        transform: none !important;
        pointer-events: auto !important;
        flex: 0 0 auto;
    }

    #search_header_formm #search_header_input {
        display: inline-block;
        flex: 1 1 auto;
        height: 42px;
        margin-top: 0;
        border: 1px solid #e2e2e2;
    }

    #search_header_formm #search_header_submit {
        flex: 0 0 auto;
        white-space: nowrap;
        min-width: 90px;
        height: 36px;
        line-height: 1;
        padding: 0.45rem 0.9rem;
    }

    .search-input .search-list,
    .search-input .search-list-main {
        display: none !important;
    }
</style>

<script>
    var searchForm = document.getElementById('search_header_formm');
    var searchInput = document.getElementById('search_header_input');

    searchForm.addEventListener('submit', function(e) {
        e.preventDefault(); // prevent default submit

        // Get selected type and keyword
        var selectedType = document.querySelector('input[name="user_type"]:checked');
        var type = selectedType ? selectedType.value : 'driver';
        var keyword = searchInput.value;

        // Prepare redirect URL
        var baseUrl = "<?= base_url() ?>";
        var url = baseUrl; // default

        if (type === 'client') {
            url += '/clients?search-keyword=' + encodeURIComponent(keyword);
        } else if (type === 'driver') {
            url += '/d_info/search?search-keyword=' + encodeURIComponent(keyword);
        } else if (type === 'agent') {
            url += '/agent?search-keyword=' + encodeURIComponent(keyword);
        } else if (type === 'job') {
            url += '/jobs/job_search?search-keyword=' + encodeURIComponent(keyword);
        }

        // Redirect
        window.location.href = url;
    });

    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            searchForm.requestSubmit();
        }
    });
</script>
