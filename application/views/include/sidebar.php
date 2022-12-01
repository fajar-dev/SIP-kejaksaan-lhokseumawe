<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
         <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/brand/logo/logo.svg" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow  active " href="index.html">
                            <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Permintaan</div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="layers" class="nav-icon icon-xs me-2" ></i> pending
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                            <i data-feather="layers" class="nav-icon icon-xs me-2"></i> Proses
                        </a>
                        <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="pages/profile.html">Disposisi 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="pages/profile.html"> Disposisi 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="pages/profile.html"> Disposisi 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="layers" class="nav-icon icon-xs me-2" ></i> Selesai
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Main</div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="clipboard" class="nav-icon icon-xs me-2" ></i> Data Jaksa
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
                            <i data-feather="user" class="nav-icon icon-xs me-2" ></i> Admin
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pages/layout.html">
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
                                    <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> John E. Grainger</h5>
                                        <span class="text-inherit fs-6">admin</span>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="index.html">
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