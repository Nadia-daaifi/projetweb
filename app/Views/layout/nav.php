<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="<?= base_url('/admin') ?>" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>

            </li>
            <!-- <?php // if (session()->get('level') == 1) { html } ?> -->
            <li>
                <a href="./index.html" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                </a>
                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                    <li><a href="./email-inbox.html">Inbox</a></li>
                    <li><a href="./email-read.html">Read</a></li>
                    <li><a href="./email-compose.html">Compose</a></li>
                </ul>
            </li>
            <li>
                <a href="./index.html" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                </a>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->