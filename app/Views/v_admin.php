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
            <li class="nav-item active">
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
                <a class="nav-link" href="/about">
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

                    <!-- Page Heading -->
                    <div class="alert alert-primary" role="alert">
                        Selamat Datang Admin!!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div id="cont" style="padding: 6px;">
                        <h1>Dashboard</h1>
                        <br>

                        <!-- Content Row -->
                        <div class="row">
                            <?php
                            $count1 = 0;
                            $count2 = 0;
                            $count3 = 0;
                            $count4 = 0;
                            foreach ($wilayah1 as $i => $data['wilayah1']) :
                                $count1++;
                            endforeach;
                            foreach ($wilayah2 as $i => $data['wilayah2']) :
                                $count2++;
                            endforeach;
                            foreach ($wilayah3 as $i => $data['wilayah3']) :
                                $count3++;
                            endforeach;
                            foreach ($wilayah4 as $i => $data['wilayah4']) :
                                $count4++;
                            endforeach;
                            ?>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="wilayah1">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                        Wilayah 1</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count1 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-map-marker-alt text-danger" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="wilayah2">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Wilayah 2</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count2 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-map-marker-alt text-success" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="wilayah3">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        Wilayah 3</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count3 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-map-marker-alt text-info" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="wilayah4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Wilayah 4</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count4 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-map-marker-alt text-warning" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Content Row -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <center>
                                        <img src="assets/images/dashboard.png" alt="Admin" width="350px">
                                        <h5><b>Sistem Informasi Pendataan Vaksin Covid-19</b></h5>
                                        <h7>Mendata masyarakat yang sudah melakukan vaksin baik <cite>Tenaga Medis</cite> maupun <cite>Non-Tenaga Medis</cite></h7>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <center>
                                        <h1>Hal-hal yang perlu diketahui sebelum, saat, dan setelah menerima vaksin COVID-19</h1>
                                        <br>
                                        <ul class="list-group list-group-horizontal justify-content-center">
                                            <li class="list-group-item"><a href="#sebelum">Sebelum menerima vaksin</a></li>
                                            <li class="list-group-item"><a href="#saat">Saat menerima vaksin</a></li>
                                            <li class="list-group-item"><a href="#setelah">Setelah menerima vaksin</a></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="background-position:center">
                                    <div class="container">
                                        <img class="d-block img-fluid" src="assets/images/carousel1.jpg" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item" style="background-position:top">
                                    <div class="container">
                                        <img class="d-block img-fluid" src="assets/images/carousel2.jpg" alt="Second slide">
                                    </div>
                                </div>

                                <div class="carousel-item" style="background-position:top">
                                    <div class="container">
                                        <img class="d-block img-fluid" src="assets/images/carousel3.jpg" alt="Third slide">
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <br><br>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <article id="sebelum">
                                        <h2>Sebelum menerima vaksin</h2>
                                        <p><strong>Cari tahu informasi akurat.</strong> Terdapat begitu banyak informasi keliru tentang vaksin di dunia maya. Sangat penting bahwa kita selalu merujuk kepada informasi dari sumber-sumber terpercaya
                                            seperti Kementerian Kesehatan, UNICEF, dan WHO. Anggota masyarakat yang ragu tentang kondisinya dapat berkonsultasi dengan dokter terlebih dahulu tentang boleh atau tidak menerima vaksin. Saat ini, secara umum, seseorang dengan kondisi berikut sebaiknya tidak menerima vaksin COVID-19 demi menghindari kejadian ikutan pasca vaksinasi (KIPI):
                                        </p>
                                        <ul>
                                            <li>Orang dengan riwayat reaksi alergi berat terhadap kandungan vaksin COVID-19</li>
                                            <li>Orang yang sedang sakit atau sedang mengalami gejala COVID-19 (vaksinasi dapat dilakukan setelah sembuh dan dengan persetujuan dokter).</li>
                                        </ul>
                                        <p><strong>Berkonsultasi dengan dokter.</strong> Orang yang pernah mengalami reaksi alergi berat setelah menerima vaksin, atau memiliki obat yang dikonsumsi secara rutin, perlu berkonsultasi dengan dokter terlebih dahulu sebelum mengikuti program vaksinasi.</p>
                                        <p><strong>Pastikan tubuh dalam kondisi bugar.</strong> Beristirahat dan minumlah air putih yang cukup agar Anda merasa bugar pada hari vaksinasi.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <article id="saat">
                                        <h2>Saat menerima vaksin</h2>
                                        <p><strong>Ikuti protokol kesehatan.</strong> Pastikan Anda selalu mengikuti aturan kesehatan pada lokasi vaksinasi, misalnya menjaga jarak saat menunggu panggilan atau mengenakan masker.</p>
                                        <p><strong>Berterus terang tentang kondisi diri sendiri.</strong> Sampaikan kepada tenaga kesehatan jika Anda memiliki kondisi yang harus diperhatikan, seperti sedang mengandung atau mengalami gangguan kekebalan tubuh.</p>
                                        <p><strong>Simpan bukti vaksinasi.</strong> Penerima vaksin akan menerima kartu yang menyatakan jenis vaksin COVID-19 yang diterima, waktu, dan lokasi vaksinasi. Simpan kartu ini dengan baik kalau-kalau dibutuhkan pada masa mendatang.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <article id="setelah">
                                        <h2>Setelah menerima vaksin</h2>
                                        <p><strong>Ikuti prosedur pemantauan.</strong> Setelah vaksinasi, tenaga kesehatan biasanya meminta penerima vaksin menunggu sekitar 15 menit di lokasi untuk memastikan tidak ada reaksi atau KIPI yang bersifat segera. Perlu diketahui, KIPI serius amat sangat jarang terjadi.</p>
                                        <p><strong>Tetap antisipasi reaksi vaksin.</strong> Vaksin bertujuan memberikan kekebalan tubuh tanpa harus terkena penyakit. Kekebalan tubuh dapat terbangun tanpa berbagai reaksi, namum terdapat pula beberapa gejala KIPI umum, yang ringan hingga sedang, dan akan hilang dengan sendirinya dalam hitungan hari. </p>
                                        <p>Beberapa bentuk KIPI ringan hingga sedang yang mungkin dialami pasca vaksinasi adalah:</p>
                                        <ul>
                                            <li>Rasa pegal di sekitar area suntik</li>
                                            <li>Demam ringan</li>
                                            <li>Rasa lelah</li>
                                            <li>Sakit kepala</li>
                                            <li>Pegal pada otot atau sendi</li>
                                            <li>Menggigil</li>
                                            <li>Diare</li>
                                        </ul>
                                        <p>Apabila tubuh mengalami reaksi setelah vaksinasi:</p>
                                        <ul>
                                            <li>Tetap tenang</li>
                                            <li>Jika terjadi reaksi seperti nyeri, bengkak atau kemerahan di tempat suntikan, kompres dengan air dingin pada lokasi tersebut</li>
                                            <li>Jika terjadi demam, kompres dengan air hangat/mandi dengan air hangat, perbanyak minum air putih dan istirahat.</li>
                                            <li>Jika dibutuhkan, minum obat sesuai anjuran petugas kesehatan.</li>
                                        </ul>
                                        <p>Segera hubungi petugas kesehatan jika gejala berlangsung lebih dari tiga hari atau jika terjadi reaksi yang lebih berat.</p>
                                        <p><strong>Bersabar.</strong> Tubuh perlu waktu untuk membangun kekebalan. Seseorang baru dapat dikatakan divaksinasi, setidaknya 2 minggu setelah dosis lengkap.</p>
                                        <p><strong>Jaga diri dan orang lain.</strong> Vaksin-vaksin yang tersedia menunjukkan efektivitas tinggi dalam melindungi penerimanya dari kejadian sakit berat akibat COVID-19. Akan tetapi, orang yang sudah divaksin masih mungkin menularkan COVID-19, meskipun tanpa gejala. Sebab itulah, kita harus tetap mengikuti protokol kesehatan demi diri sendiri dan orang lain—hindari kerumunan, jaga jarak, rajin mencuci tangan, dan selalu kenakan masker di luar rumah.</p>
                                    </article>
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