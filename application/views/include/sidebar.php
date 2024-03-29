<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
         <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="index.html">
                    <h4 class="text-white fw-bold">Kejati-Lhokseumawe</h4>
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/main')){ echo 'active';} ?>" href="<?= base_url('main') ?>">
                            <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Pengajuan</div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pengajuan')){ echo 'active';} ?>" href="<?= base_url('pengajuan') ?>">
                            <i data-feather="layers" class="nav-icon icon-xs me-2" ></i> pending
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                            <i data-feather="layers" class="nav-icon icon-xs me-2"></i> Proses
                        </a>
                        <div id="navPages" class="collapse show" data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pengajuan/disposisi_1')){ echo 'active';} ?>" href="<?= base_url('pengajuan/disposisi_1') ?>">Disposisi 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pengajuan/disposisi_2')){ echo 'active';} ?>" href="<?= base_url('pengajuan/disposisi_2') ?>"> Disposisi 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pengajuan/disposisi_3')){ echo 'active';} ?>" href="<?= base_url('pengajuan/disposisi_3') ?>"> Disposisi 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pengajuan/selesai')){ echo 'active';} ?>" href="<?= base_url('pengajuan/selesai') ?>">
                            <i data-feather="layers" class="nav-icon icon-xs me-2" ></i> Selesai
                        </a>
                    </li>

                    <?php if($this->session->userdata('role') == 2){?>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Main</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/main/jaksa')){ echo 'active';} ?>" href="<?= base_url('main/jaksa') ?>">
                            <i data-feather="clipboard" class="nav-icon icon-xs me-2" ></i>Jaksa
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/main/admin')){ echo 'active';} ?>" href="<?= base_url('main/admin') ?>">
                            <i data-feather="user" class="nav-icon icon-xs me-2" ></i> Admin
                        </a>
                    </li>
                    <?php }?>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('auth/logout') ?>">
                            <i data-feather="power" class="nav-icon icon-xs me-2" ></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
            <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                    <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="<?= base_url() ?>assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> <?php echo $this->session->userdata('nama') ?></h5>
                                        <span class="text-inherit fs-6">
                                            <?php
                                                if($this->session->userdata('role') == '1'){
                                                    echo'Jaksa';
                                                }else{
                                                    echo'admin';
                                                }
                                            ?>
                                        </span>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                            data-feather="power"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>