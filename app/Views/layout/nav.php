<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            
            <!-- <?php // if (session()->get('level') == 1) { html } ?> -->
            <li class="nav-label">Dashboard</li>
            <li class="<?= (current_url() == base_url('/admin')) ? 'active' : '' ?>">
                <a href="<?= base_url('/admin') ?>" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Home</span>
                </a>
            </li>
            <li>

                <a href="./index.html" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i><span class="nav-text">Email</span>
                </a>
            </li>
            <li class="<?= (strpos(current_url(), base_url('/admin/addCoach')) !== false || strpos(current_url(), 'coach') !== false) ? 'active' : '' ?>">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Coach</span>
                </a>
                <ul aria-expanded="false" class="collapse <?= (strpos(current_url(), 'coach') !== false) ? 'show' : '' ?>">
                    <li class="<?= (current_url() == base_url('/admin/addCoach')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/addCoach') ?>">Add</a>
                    </li>
                    <li class="<?= (current_url() == base_url('/admin/Cliste')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/Cliste') ?>">Read</a></li>
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
