<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <i class="fas fa-futbol fa-2x" style="color:rgb(22, 120, 129);"></i>
        <span class="brand-text font-weight-light">Rafhely Futsal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Dashboard -->
                    <li class="nav-item">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Cek Jadwal -->
                <li class="nav-item">
                    <a href="<?= base_url('jadwal'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Cek Jadwal</p>
                    </a>
                </li>
                
                <!-- Input Sewa -->
                <li class="nav-item">
                    <a href="<?= base_url('sewa'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Input Sewa</p>
                    </a>
                </li>
                
                <!-- Input Perlengkapan -->
                <li class="nav-item">
                    <a href="<?= base_url('perlengkapan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Input Sewa Perlengkapan</p>
                    </a>
                </li>
                
                <!-- Cetak Laporan -->
                <li class="nav-item">
                    <a href="<?= base_url('laporan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Cetak Laporan</p>
                    </a>
                </li>

                <!-- Kelola User -->
                <li class="nav-item">
                    <a href="<?= base_url('kelola-user'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Kelola User</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
