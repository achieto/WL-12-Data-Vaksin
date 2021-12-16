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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                        <center>
                            <h1>Tambah Data Admin</h1>
                            <div class="card" style="width: 45rem;">
                                <div class="card-body">
                                    <table cellpadding="12" cellspacing="5">
                                        <form action="/storeadmin" method="post">
                                            <tr>
                                                <td>Username</td>
                                                <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="username" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td class="col-sm-6"><input type="password" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="password" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="nama" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td class="col-sm-6">
                                                    <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="admin" id="admin" required>
                                                        <option selected="true" value="" disabled selected>Pilih...</option>
                                                        <option value="AdminModel" id="Admin">Admin</option>
                                                        <option value="ValidatorModel" id="Validator">Validator</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <input type="hidden" name="role" id="role" value="">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input class="btn btn-info btn-md" style="float:right" type="submit" value="          Save          "></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            </div>

                            <div class="card" style="width: 45rem; margin-top: 3rem">
                                <div class="card-body">
                                    <table style="text-align:center" class="table table-striped" width="1200px">
                                        <tr>
                                            <td scope="col">Username</td>
                                            <td scope="col">Nama</td>
                                            <td scope="col">Role</td>
                                        </tr>
                                        <?php
                                        foreach ($vaksinasi as $row) :
                                        ?>
                                            <tr>
                                                <td scope="row"><?= $row['username'] ?></td>
                                                <td scope="row"><?= $row['nama'] ?></td>
                                                <td scope="row"><?= $row['role'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php
                                        foreach ($vaksin as $row) :
                                        ?>
                                            <tr>
                                                <td scope="row"><?= $row['username'] ?></td>
                                                <td scope="row"><?= $row['nama'] ?></td>
                                                <td scope="row"><?= $row['role'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>

                <script>
                    document.getElementById('admin').onchange = function() {
                        if (this.value == 'AdminModel') {
                            document.getElementById('role').value = "Admin";
                        } else {
                            document.getElementById('role').value = "Validator";
                        }
                    }
                </script>
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
                        <span aria-hidden="true">×</span>
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