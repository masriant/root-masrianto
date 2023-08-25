<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <?php if (in_groups('admin')) : ?>
                    <div class="sb-sidenav-menu-heading">USER MANAGEMENT</div>
                    <!-- Divider User List-->
                    <hr class="sidebar-divider d-none d-md-block">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        User List
                    </a>
                <?php endif; ?>

                <div class="sb-sidenav-menu-heading">USER PROFILE</div>

                <!-- Divider User-->
                <hr class="sidebar-divider d-none d-md-block">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    My Profile
                </a>
                <a class="nav-link" href="<?= base_url('user'); ?>/edit">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                    Edit Profile
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <?php if (logged_in()) : ?>
                    <a class="nav-link" href="<?= base_url('logout'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>
                <?php else : ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
                        Login
                    </a>
                <?php endif; ?>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= user()->fullname; ?> </span>
            <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class="img-profile rounded-circle" alt="" width="30">

        </div>
    </nav>
</div>