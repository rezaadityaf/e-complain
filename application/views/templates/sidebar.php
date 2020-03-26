        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('assets/') ?>dist/img/logoo.png" alt="Angkasa Pura Hotel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><img src="<?= base_url('assets/') ?>dist/img/logo7.png" alt="Logo" style="width : 70%"></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item mt-2">
                        <a href="<?= base_url('admin') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>
                </ul>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-header" style="border-bottom: 1px solid #4b545c;">MENU</li>

                        <li class="nav-item">
                            <a href="<?= base_url('admin/user') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Jabatan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i></i>
                                <p>
                                    Divisi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-map-marker-alt"></i></i>
                                <p>
                                    Lokasi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i></i>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-people-carry"></i></i>
                                <p>
                                    Pegawai
                                </p>
                            </a>
                        </li>
                        <li class="nav-item " style="border-top: 1px solid #4b545c; border-bottom: 1px solid #4b545c;">
                            <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i></i></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->