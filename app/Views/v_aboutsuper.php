<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Data Vaksin Covid-19</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/super">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Vaksin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/inputadmin">
                    <i class="fas fa-edit"></i>
                    <span>Input Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/entrysuper">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Entry</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Info
            </div>

            <!-- Nav Item - About -->
            <li class="nav-item active">
                <a class="nav-link" href="/aboutsuper">
                    <i class="fas fa-info-circle"></i>
                    <span>About</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800"><?php echo ucwords($nama) ?></span>
                                <i class="fa fa-user-md mr-2 text-gray-800"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="cont" style="padding: 6px;">
                        <h1>Tentang Pengembang</h1>

                        <br><br>
                        <div class="card-deck">
                            <div class="card">
                                <img src="assets/images/anggie.png" class="card-img-top" alt="Anggie Tamara" onclick="return alert('Jangan lupa vaksin ya teman-teman');">
                                <div class=" card-body">
                                    <h5 class="card-title" align="center">Backend</h5>
                                    <hr>
                                    <p class="card-text">
                                        Anggie Tamara<br>
                                        1917051006
                                    </p>
                                    <br>
                                    <center>
                                        <a href="https://web.facebook.com/spachieto"><img src="assets/icons/facebook.png" width="25px"></a>
                                        <a href="https://www.instagram.com/gietmra_/"><img src="assets/icons/instagram.png" width="25px"></a>
                                        <a href="https://www.youtube.com/channel/UC6W1IryazZBDKISiuSkx-rQ"><img src="assets/icons/youtube.png" width="30px"></a>
                                        <a href="https://github.com/achieto"><img src="assets/icons/github.png" width="25px"></a>
                                    </center>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets/images/lase.png" class="card-img-top" alt="Anisa Nadila Lase" onclick="return alert('Aku frontend loh');">
                                <div class="card-body">
                                    <h5 class="card-title" align="center">Frontend</h5>
                                    <hr>
                                    <p class="card-text">
                                        Anisa Nadila Lase<br>
                                        1917051003
                                    </p>
                                    <br>
                                    <center>
                                        <a href="https://web.facebook.com/anisanadila.lase"><img src="assets/icons/facebook.png" width="25px"></a>
                                        <a href="https://www.instagram.com/ans.ndlals/"><img src="assets/icons/instagram.png" width="25px"></a>
                                        <a href="https://www.youtube.com/channel/UCnN_i-dIOjwv1phVqzB-2xg"><img src="assets/icons/youtube.png" width="30px"></a>
                                        <a href="https://github.com/AnisaNadila26"><img src="assets/icons/github.png" width="25px"></a>
                                    </center>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets/images/aprila.png" class="card-img-top" alt="Aprila Dwi Utami" onclick="return alert('aku princess');">
                                <div class="card-body">
                                    <h5 class="card-title" align="center">Database</h5>
                                    <hr>
                                    <p class="card-text">
                                        April Dwi Utami<br>
                                        1917051012
                                    </p>
                                    <br>
                                    <center>
                                        <a href="https://web.facebook.com/aprila.d.utami.3"><img src="assets/icons/facebook.png" width="25px"></a>
                                        <a href="https://www.instagram.com/apriladwiutami/"><img src="assets/icons/instagram.png" width="25px"></a>
                                        <a href="https://www.youtube.com/channel/UC7fR2jqBOozSE1uZsiE7Iag"><img src="assets/icons/youtube.png" width="30px"></a>
                                        <a href="https://github.com/apriladwiutami"><img src="assets/icons/github.png" width="25px"></a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Developed by Prianly</span>
                        <br>
                        <span>Copyright &copy; Our Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol "Logout" jika anda yakin ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-info" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endSection(); ?>