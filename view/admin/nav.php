<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="dashboard">
            <i class="fa fa-circle-notch text-primary"></i>
            <span class="smini-hide">
                <span class="font-w700 font-size-h5">ADMIN</span> <span class="font-w400">DESA</span>
            </span>
        </a>
        <!-- END Logo -->

        <!-- options -->
        <div>
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
        </div>
        <!-- end options -->

    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link <?php if ($thisPage == 'dashboard') echo 'active'; ?>" href="dashboard">
                    <i class="nav-main-link-icon si si-speedometer"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-heading">Arsip</li>
            <li class="nav-main-item">
                <a class="nav-main-link <?php if ($pages == 'arsip') echo 'active'; ?> nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-layers"></i>
                    <span class="nav-main-link-name">Surat</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($thisPage == 'arsip-pindah') echo 'active'; ?>" href="arsip-data-pindah-diterima">
                            <span class="nav-main-link-name">Pindah</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($thisPage == 'arsip-datang') echo 'active'; ?>" href="arsip-data-datang-diterima">
                            <span class="nav-main-link-name">Datang</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">Data</li>
            <li class="nav-main-item">
                <a class="nav-main-link <?php if ($pages == 'data') echo 'active'; ?> nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-layers"></i>
                    <span class="nav-main-link-name">Data Formulir</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($thisPage == 'pindah') echo 'active'; ?>" href="data-form-pindah">
                            <span class="nav-main-link-name">Data Pindah</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($thisPage == 'datang') echo 'active'; ?>" href="data-form-datang">
                            <span class="nav-main-link-name">Data Datang</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">General</li>
            <li class="nav-main-item">
                <a class="nav-main-link <?php if ($pages == 'halaman') echo 'active'; ?> nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-layers"></i>
                    <span class="nav-main-link-name">Kelola Halaman</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link <?php if ($thisPage == 'pages') echo 'active'; ?>" href="page-manage">
                            <span class="nav-main-link-name">Kontak Kami</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>