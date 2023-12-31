<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?= base_url(); ?>"><i class="fas fa-code"></i> LAKIP</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <marquee class="text text-white"><small> Lembaga Administrasi keuangan dan Ilmu Pemerintahan</small></marquee>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
        </div>
    </form>
    <!-- Navbar-->

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class="img-profile rounded-circle" alt="" width="30"> <?= user()->username; ?></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('user'); ?>"><img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class="img-profile rounded-circle" alt="" width="50"> My Profile</a></li>
                <li>

                </li>

                <li>
                    <hr class="dropdown-divider" />
                </li>
                <?php if (logged_in()) : ?>
                    <li><a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                <?php else : ?>
                    <li><a class="dropdown-item" href="<?= base_url('login'); ?>"><i class="fas fa-sign-in-alt"></i> Login</a></li>

                <?php endif; ?>


            </ul>
        </li>
    </ul>
</nav>