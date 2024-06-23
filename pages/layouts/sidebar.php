<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="../assets/images/logos/apdp.png" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>

                <li class="sidebar-item <?php if (strpos($_SERVER['PHP_SELF'], 'dashboard.php') !== false) echo 'selected'; ?>">
                    <a class="sidebar-link <?php if (strpos($_SERVER['PHP_SELF'], 'dashboard.php') !== false) echo 'active'; ?>" href="dashboard.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Data</span>
                </li>

                <li class="sidebar-item <?php if (strpos($_SERVER['PHP_SELF'], 'pegawai.php') !== false) echo 'selected'; ?>">
                    <a class="sidebar-link <?php if (strpos($_SERVER['PHP_SELF'], 'pegawai.php') !== false) echo 'active'; ?>" href="pegawai.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Daftar Pegawai</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
