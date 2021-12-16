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

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Entry</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header active">Region:</h6>
                        <a class="collapse-item" href="/wilayah1">Region 1</a>
                        <a class="collapse-item" href="/wilayah2">Region 2</a>
                        <a class="collapse-item" href="/wilayah3">Region 3</a>
                        <a class="collapse-item" href="/wilayah4">Region 4</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Info
            </div>

            <!-- Nav Item - About -->
            <li class="nav-item">
                <a class="nav-link" href="/aboutadmin">
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

                    <!-- Topbar Search -->
                    <div class="col-4">
                        <ul class="navbar-nav ml-auto">
                            <form action="" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-5 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" autocomplete="off" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-800">Admin</span>
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

                    <div id="container">
                        <h1>Data Vaksin Wilayah 3 <br></br></h1>

                        <div id="body">
                            <table style="text-align:center" class="table table-striped" width="1200px">
                                <tr>
                                    <td scope="col">No.Batch</td>
                                    <td scope="col">NIK</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">Jenis Kelamin</td>
                                    <td scope="col">Usia</td>
                                    <td scope="col">Dosis</td>
                                    <td scope="col">Jenis Vaksin</td>
                                    <td scope="col">Action</td>
                                </tr>
                                <?php
                                foreach ($wilayah3 as $row) :
                                ?>
                                    <tr>
                                        <td scope="row"><?= strtoupper($row['no_batch']) ?></td>
                                        <td scope="row"><?= $row['nik'] ?></td>
                                        <td scope="row"><?= ucwords($row['nama']) ?></td>
                                        <td scope="row"><?= $row['jenis_kelamin'] ?></td>
                                        <td scope="row"><?= $row['usia'] ?></td>
                                        <td scope="row"><?= $row['dosis'] ?></td>
                                        <td scope="row"><?= $row['jenis_vaksin'] ?></td>
                                        <td scope="row" style="text-align:center">
                                            <a href="<?= base_url("edit/" . $row['no_batch']) ?>" class="btn btn-primary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button">Edit</a>
                                            <form action="delete/<?= $row['no_batch'] ?>/<?= $row['wilayah'] ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="Delete">
                                                <button type="submit" class="btn btn-danger" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); ">Delete</button>
                                            </form>
                                            <?php if ($row['status'] == 2) : ?>
                                                <a href="<?= base_url("cetak/" . $row['no_batch']) ?>" class="btn btn-warning" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button">Cetak</a>
                                            <?php else : ?>
                                                <button class="btn btn-secondary" type="button" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" disabled>Cetak</button>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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
    <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
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
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endSection(); ?>