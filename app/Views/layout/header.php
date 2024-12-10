<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="<?= base_url() ?>/img/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?= base_url() ?>/img/logo2.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?= base_url() ?>/img/logo2.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="p-1 mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary"><?= count($messages) ?></span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class=""><?= count($messages) ?> New Messages</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <?php foreach ($messages as $message): ?>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <i class="float-left m-2 icon-user"></i>
                                                    <div class="notification-content">
                                                        <div class="notification-heading"><?= esc($message['name']) ?></div>
                                                        <div class="notification-timestamp">
                                                            <?= esc($message['created_at']) ?></div>
                                                        <div class="notification-text">
                                                            <?= esc(substr($message['message'], 0, 50)) ?>...</div>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?= base_url('img/' . session()->get('photo')) ?>" height="40" width="40"
                                    alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('admin/profil') ?>"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li><a href="<?= base_url('auth/logout') ?>"><i class="icon-key"></i>
                                                <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->