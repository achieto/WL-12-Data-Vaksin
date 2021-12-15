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
            <li class="nav-item active">
                <a class="nav-link" href="/input">
                    <i class="fas fa-edit"></i>
                    <span>Input Entry</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Entry</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Region:</h6>
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

                    <div id="cont" style="padding: 6px;">
                    <center>
                        <h1>Tambah Data Vaksin</h1>
                        <center>
                            <h1>Tambah Data Vaksin</h1>
                            <div class="card" style="width: 45rem; border-radius: 20px">
                                <div class="card-body">
                                    <table cellpadding="12" cellspacing="5">
                                        <form action="/store" method="post">
                                            <tr>
                                                <td>No Batch</td>
                                                <td class="col-sm-6"><input type="text" onchange="ValidateNoBatch()" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" id="no_batch" name="no_batch" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Wilayah</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="wilayah">Wilayah</label>
                                                        </div>
                                                        <select class="form-control" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="wilayah" id="wilayah" required>
                                                            <option selected="true" value="" disabled selected>Pilih...</option>
                                                            <optgroup label="Wilayah 1">
                                                                <option value="1">Sumatera</option>
                                                                <option value="1">Jakarta</option>
                                                                <option value="1">Jawa Barat</option>
                                                                <option value="1">Banten</option>
                                                            </optgroup>
                                                            <optgroup label="Wilayah 2">
                                                                <option value="2">Jawa Tengah</option>
                                                                <option value="2">Yogyakarta</option>
                                                            </optgroup>
                                                            <optgroup label="Wilayah 3">
                                                                <option value="3">Jawa Timur</option>
                                                                <option value="3">Kalimantan</option>
                                                                <option value="3">Madura</option>
                                                                <option value="3">Bali</option>
                                                                <option value="3">NTT</option>
                                                                <option value="3">NTB</option>
                                                            </optgroup>
                                                            <optgroup label="Wilayah 4">
                                                                <option value="4">Sulawesi</option>
                                                                <option value="4">Maluku</option>
                                                                <option value="4">Papua</option>
                                                            </optgroup>
                                                        </select>
                                                        <span id="description"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td><input type="text" onchange="ValidateNoBatch()" class=" form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nik" id="nik" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>
                                                    <input type="radio" name="jenis_kelamin" id="ll" value="Laki-laki" required>
                                                    <label for="ll" style="margin-right: 15px">Laki-Laki</label>
                                                    <input type="radio" name="jenis_kelamin" id="p" value="Perempuan" required>
                                                    <label for="p">Perempuan</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Usia</td>
                                                <td><input type="text" class="form-control" onchange="validate()" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="usia" id="usia" autocomplete="off" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="kategori">Kategori</label>
                                                        </div>
                                                        <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="kategori" id="kategori" required>
                                                            <option selected="true" value="" disabled selected>Pilih...</option>
                                                            <option value="Tenaga Medis" id="tenaga_medis">Tenaga Medis</option>
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
                                                            <option selected="true" value="" disabled selected>Pilih...</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3" id="3">3</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mr-5">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="jenis_vaksin">Jenis Vaksin</label>
                                                        </div>
                                                        <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="jenis_vaksin" id="jenis_vaksin" required>
                                                            <option selected="true" value="" disabled selected>Pilih...</option>
                                                            <option value="Sinovac" id="sinovac">Sinovac</option>
                                                            <option value="AstraZeneca" id="astrazeneca">AstraZeneca</option>
                                                            <option value="Sinopharm" id="sinopharm">Sinopharm</option>
                                                            <option value="Moderna" id="moderna">Moderna</option>
                                                            <option value="Novavax" id="novavax">Novavax</option>
                                                            <option value="Sputnik-V" id="sputnikv">Sputnik-V</option>
                                                            <option value="Janssen" id="janssen">Janssen</option>
                                                            <option value="Convidencia" id="convidencia">Convidencia</option>
                                                            <option value="Zifivax" id="zifivax">Zifivax</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input class="btn btn-primary btn-md" style="float:right" type="submit" id="submit" name="submit" value="          Save          "></td>
                                            </tr>
                                        </form>
                                    </table>
                                </div>
                            </div>
                        </center>
                    </div>
                    <script>
                        document.getElementById('kategori').onchange = function() {
                            if (this.value == 'Non-Tenaga Medis') {
                                document.getElementById('3').disabled = true;
                            } else {
                                document.getElementById('3').disabled = false;
                            }
                        }

                        function ValidateNoBatch() {
                            var no_batch = $("#no_batch").val().length;

                            if (no_batch != 8) {
                                alert('Mohon masukkan no batch yang valid');
                                $("#no_batch").addClass("is-invalid");
                                $("#submit").addClass("disabled");
                            } else {
                                $("#no_batch").removeClass("is-invalid");
                                $("#submit").removeClass("disabled");
                                return true;
                            }
                            return false;
                        }

                        function ValidateNIK() {
                            var no_batch = $("#nik").val().length;

                            if (no_batch != 16) {
                                alert('Mohon masukkan NIK yang valid');
                                $("#nik").addClass("is-invalid");
                                $("#submit").addClass("disabled");
                            } else {
                                $("#nik").removeClass("is-invalid");
                                $("#submit").removeClass("disabled");
                                return true;
                            }
                            return false;
                        }

                        function validateUsia(usia) {
                            var re = /^(12[0-6]|1[01][0-9]|[2-9][0-9]|1[2-9])$/;
                            return re.test(usia);
                        }

                        function validateUsia2(usia) {
                            var re = /^(12[0-6]|1[01][0-9]|[3-9][0-9]|2[1-9])$/;
                            return re.test(usia);
                        }

                        function validateUsia3(usia) {
                            var re = /^(1[2-7])$/;
                            return re.test(usia);
                        }

                        function validate() {
                            var usia = $("#usia").val();

                            if (validateUsia(usia)) {
                                if (validateUsia2(usia)) {
                                    document.getElementById('tenaga_medis').disabled = false;
                                    if (validateUsia3(usia)) {
                                        document.getElementById('astrazeneca').disabled = true;
                                        document.getElementById('sinopharm').disabled = true;
                                        document.getElementById('moderna').disabled = true;
                                        document.getElementById('novavax').disabled = true;
                                        document.getElementById('sputnikv').disabled = true;
                                        document.getElementById('janssen').disabled = true;
                                        document.getElementById('convidencia').disabled = true;
                                        document.getElementById('zifivax').disabled = true;
                                    } else {
                                        document.getElementById('astrazeneca').disabled = false;
                                        document.getElementById('sinopharm').disabled = false;
                                        document.getElementById('moderna').disabled = false;
                                        document.getElementById('novavax').disabled = false;
                                        document.getElementById('sputnikv').disabled = false;
                                        document.getElementById('janssen').disabled = false;
                                        document.getElementById('convidencia').disabled = false;
                                        document.getElementById('zifivax').disabled = false;
                                    }
                                } else {
                                    if (validateUsia3(usia)) {
                                        document.getElementById('astrazeneca').disabled = true;
                                        document.getElementById('sinopharm').disabled = true;
                                        document.getElementById('moderna').disabled = true;
                                        document.getElementById('novavax').disabled = true;
                                        document.getElementById('sputnikv').disabled = true;
                                        document.getElementById('janssen').disabled = true;
                                        document.getElementById('convidencia').disabled = true;
                                        document.getElementById('zifivax').disabled = true;
                                    } else {
                                        document.getElementById('astrazeneca').disabled = false;
                                        document.getElementById('sinopharm').disabled = false;
                                        document.getElementById('moderna').disabled = false;
                                        document.getElementById('novavax').disabled = false;
                                        document.getElementById('sputnikv').disabled = false;
                                        document.getElementById('janssen').disabled = false;
                                        document.getElementById('convidencia').disabled = false;
                                        document.getElementById('zifivax').disabled = false;
                                    }
                                    document.getElementById('tenaga_medis').disabled = true;
                                }
                                $("#usia").removeClass("is-invalid");
                                $("#submit").removeClass("disabled");
                                return true;
                            } else {
                                if (validateUsia2(usia)) {
                                    if (validateUsia3(usia)) {
                                        document.getElementById('astrazeneca').disabled = true;
                                        document.getElementById('sinopharm').disabled = true;
                                        document.getElementById('moderna').disabled = true;
                                        document.getElementById('novavax').disabled = true;
                                        document.getElementById('sputnikv').disabled = true;
                                        document.getElementById('janssen').disabled = true;
                                        document.getElementById('convidencia').disabled = true;
                                        document.getElementById('zifivax').disabled = true;
                                    } else {
                                        document.getElementById('astrazeneca').disabled = false;
                                        document.getElementById('sinopharm').disabled = false;
                                        document.getElementById('moderna').disabled = false;
                                        document.getElementById('novavax').disabled = false;
                                        document.getElementById('sputnikv').disabled = false;
                                        document.getElementById('janssen').disabled = false;
                                        document.getElementById('convidencia').disabled = false;
                                        document.getElementById('zifivax').disabled = false;
                                    }
                                    document.getElementById('tenaga_medis').disabled = false;
                                } else {
                                    if (validateUsia3(usia)) {
                                        document.getElementById('astrazeneca').disabled = true;
                                        document.getElementById('sinopharm').disabled = true;
                                        document.getElementById('moderna').disabled = true;
                                        document.getElementById('novavax').disabled = true;
                                        document.getElementById('sputnikv').disabled = true;
                                        document.getElementById('janssen').disabled = true;
                                        document.getElementById('convidencia').disabled = true;
                                        document.getElementById('zifivax').disabled = true;
                                    } else {
                                        document.getElementById('astrazeneca').disabled = false;
                                        document.getElementById('sinopharm').disabled = false;
                                        document.getElementById('moderna').disabled = false;
                                        document.getElementById('novavax').disabled = false;
                                        document.getElementById('sputnikv').disabled = false;
                                        document.getElementById('janssen').disabled = false;
                                        document.getElementById('convidencia').disabled = false;
                                        document.getElementById('zifivax').disabled = false;
                                    }
                                    document.getElementById('tenaga_medis').disabled = true;
                                }
                                alert('Mohon masukkan usia yang valid');
                                $("#usia").addClass("is-invalid");
                                $("#submit").addClass("disabled");
                            }

                            return false;
                        }
                    </script>
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
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php $this->endSection(); ?>