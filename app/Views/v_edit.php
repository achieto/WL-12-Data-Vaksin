<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-syringe"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Data Vaksin Covid-19</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin">
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
                <a class="nav-link" href="/input">
                    <i class="fas fa-edit"></i>
                    <span>Input Entry</span></a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800">Admin</span>
                                <i class="fa fa-user-md mr-2 text-gray-800"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                        <h1>Edit Data Vaksin</h1>

                        <div id="by" style="padding: 6px;">
                            <table cellpadding="5" cellspacing="5">
                                <form action="/update/<?= $row['no_batch'] ?>/<?= $row['wilayah'] ?>" method="post">
                                    <tr>
                                        <td>No Batch</td>
                                        <td><input type="text" value="<?php echo strtoupper($row['no_batch']) ?>" disabled></td>
                                        <td><input type="hidden" name="no_batch" value="<?php echo $row['no_batch'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><input type="text" name="nik" autocomplete="off" required value="<?php echo $row['nik'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><input type="radio" name="jenis_kelamin" id="ll" value="Laki-Laki" required>
                                            <label for=" ll">Laki-Laki</label>
                                        </td>
                                        <td><input type="radio" name="jenis_kelamin" id="p" value="Perempuan" required>
                                            <label for=" p">Perempuan</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Usia</td>
                                        <td><input type="text" name="usia" autocomplete="off" required value=" <?php echo $row['usia'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="kategori">Kategori</label>
                                                </div>
                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="kategori" id="kategori" required>
                                                    <option selected="true" disabled="disabled">Pilih...</option>
                                                    <option value="Tenaga Medis">Tenaga Medis</option>
                                                    <option value="Non-Tenaga Medis">Non-Tenaga Medis</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vaksin</td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="dosis">Dosis</label>
                                                </div>
                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="dosis" id="dosis" required>
                                                    <option selected="true" disabled="disabled">Pilih...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group mr-5">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="jenis_vaksin">Jenis Vaksin</label>
                                                </div>
                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="jenis_vaksin" id="jenis_vaksin" required>
                                                    <option selected="true" disabled="disabled">Pilih...</option>
                                                    <option value="Sinovac">Sinovac</option>
                                                    <option value="AstraZeneca">AstraZeneca</option>
                                                    <option value="Sinopharm">Sinopharm</option>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Novavax">Novavax</option>
                                                    <option value="Sputnik-V">Sputnik-V</option>
                                                    <option value="Janssen">Janssen</option>
                                                    <option value="Convidencia">Convidencia</option>
                                                    <option value="Zifivax">Zifivax</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class=" btn btn-secondary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" type="submit" value="Save"></td>
                                    </tr>
                                </form>
                            </table>
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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol "Logout" jika anda yakin ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endSection(); ?>