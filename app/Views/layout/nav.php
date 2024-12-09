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
            <li
                class="<?= (strpos(current_url(), base_url('/admin/coach/add')) !== false || strpos(current_url(), 'coach') !== false) ? 'active' : '' ?>">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Coach</span>
                </a>
                <ul aria-expanded="false"
                    class="collapse <?= (strpos(current_url(), 'coach') !== false) ? 'show' : '' ?>">
                    <li class="<?= (current_url() == base_url('/admin/coach/add')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/coach/add') ?>">Add</a>
                    </li>
                    <li class="<?= (current_url() == base_url('/admin/coach/show')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/coach/show') ?>">view</a>
                    </li>
                </ul>
            </li>
            <li
                class="<?= (strpos(current_url(), base_url('/admin/client/add')) !== false || strpos(current_url(), 'client') !== false) ? 'active' : '' ?>">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Client</span>
                </a>
                <ul aria-expanded="false"
                    class="collapse <?= (strpos(current_url(), 'client') !== false) ? 'show' : '' ?>">
                    <li class="<?= (current_url() == base_url('/admin/client/add')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/client/add') ?>">Add</a>
                    </li>
                    <li class="<?= (current_url() == base_url('/admin/client/show')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/client/show') ?>">view</a>
                    </li>
                </ul>
            </li>
            <li
                class="<?= (strpos(current_url(), base_url('/admin/classe/add')) !== false || strpos(current_url(), 'classe') !== false) ? 'active' : '' ?>">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Classes</span>
                </a>
                <ul aria-expanded="false"
                    class="collapse <?= (strpos(current_url(), 'classe') !== false) ? 'show' : '' ?>">
                    <li class="<?= (current_url() == base_url('/admin/classe/add')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/classe/add') ?>">Add</a>
                    </li>
                    <li class="<?= (current_url() == base_url('/admin/classe/show')) ? 'active' : '' ?>">
                        <a href="<?= base_url('/admin/classe/show') ?>">view</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('/admin/calender') ?>" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Calender</span>
                </a>
            </li>
            <li class="<?= (strpos(current_url(), 'absence') !== false) ? 'active' : '' ?>">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Absence</span>
                </a>
                <ul aria-expanded="false"
                    class="<?= (strpos(current_url(), 'absence') !== false) ? 'collapse show' : 'collapse' ?>">
                    <li class="<?= (current_url() == base_url('admin/absence/cl')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/absence/cl') ?>">Clients</a>
                    </li>
                    <li class="<?= (current_url() == base_url('admin/absence/co')) ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/absence/co') ?>">Coachs</a>
                    </li>
                </ul>
            </li>


            <li>
                <a aria-expanded="false" href="<?= base_url('admin/profil') ?>">
                    <i class="icon-user"></i><span class="nav-text">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</div>