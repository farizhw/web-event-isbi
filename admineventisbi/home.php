<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}

?>
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin EVENT ISBI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include './fungsi/sidebar.php'; ?>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <?php if ($_SESSION['level'] == "SuperAdmin") { ?>
                        <!-- profile info & task notification -->
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span id="notif"></span>
                                    </i>
                                    <div id="pesan" class="dropdown-menu bell-notify-box notify-box">
                                        <!-- <span class="notify-title">Melihat Semua Pesan<a href="#" class="float-right">lihat semua</a></span> -->

                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="home.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right btn-sm">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION['username']; ?>
                                <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="text-muted" href="#"> <b> <?php echo $_SESSION['level']; ?></b></a>
                                <a class="dropdown-item" href="konfig/proses_logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row ">
                        <?php if ($_SESSION['level'] == "SuperAdmin") { ?>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Data Pengguna</h4>
                                            <a href="./superadmin/pengguna.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_pengguna = mysqli_query($conn, "Select * From pengguna");
                                            $jumlah_pengguna = mysqli_num_rows($data_pengguna);
                                            ?>
                                            <h2><?php echo "$jumlah_pengguna"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Kegiatan</h4>
                                            <a href="./superadmin/kegiatan.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kegiatan = mysqli_query($conn, "select * from keg");

                                            $jumlah_kegiatan = mysqli_num_rows($data_kegiatan);
                                            ?>
                                            <h2><?php echo "$jumlah_kegiatan"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Artikel</h4>
                                            <a href="./superadmin/artikel.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kegiatan = mysqli_query($conn, "select * from artikel");

                                            $jumlah_kegiatan = mysqli_num_rows($data_kegiatan);
                                            ?>
                                            <h2><?php echo "$jumlah_kegiatan"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Data Kontak</h4>
                                            <a href="./superadmin/kontak.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kontak = mysqli_query($conn, "Select * From kontak");
                                            $jumlah_kontak = mysqli_num_rows($data_kontak);
                                            ?>
                                            <h2><?php echo "$jumlah_kontak"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Data Proposal</h4>
                                            <a href="./superadmin/proposal.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kontak = mysqli_query($conn, "Select * From proposal");
                                            $jumlah_kontak = mysqli_num_rows($data_kontak);
                                            ?>
                                            <h2><?php echo "$jumlah_kontak"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_SESSION['level'] == "Admin") { ?>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Kegiatan</h4>
                                            <a href="./superadmin/kegiatan.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kegiatan = mysqli_query($conn, "select * from keg");

                                            $jumlah_kegiatan = mysqli_num_rows($data_kegiatan);
                                            ?>
                                            <h2><?php echo "$jumlah_kegiatan"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Artikel</h4>
                                            <a href="./superadmin/artikel.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kegiatan = mysqli_query($conn, "select * from artikel");

                                            $jumlah_kegiatan = mysqli_num_rows($data_kegiatan);
                                            ?>
                                            <h2><?php echo "$jumlah_kegiatan"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Data Kontak</h4>
                                            <a href="./superadmin/kontak.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kontak = mysqli_query($conn, "Select * From kontak");
                                            $jumlah_kontak = mysqli_num_rows($data_kontak);
                                            ?>
                                            <h2><?php echo "$jumlah_kontak"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($_SESSION['level'] == "Pimpinan") { ?>
                            <div class="col-md-4">
                                <div class="single-report mb-xs-30">
                                    <div class="s-report-inner pr--20 pt--30 mb-3">
                                        <div class="icon"><i class="fas fa-folder-open ml-5"></i></div>
                                        <div class="s-report-title d-flex justify-content-between">
                                            <h4 class="header-title mb-0">Data Jadwal</h4>
                                            <a href="./pimpinan/data_jadwal.php"><i class="fas fa-play fa-sm"></i></a>
                                        </div>
                                        <div class="d-flex justify-content-between pb-2">
                                            <?php
                                            include 'konfig/koneksi.php';
                                            $data_kontak = mysqli_query($conn, "Select * From jad");
                                            $jumlah_kontak = mysqli_num_rows($data_kontak);
                                            ?>
                                            <h2><?php echo "$jumlah_kontak"; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- sales report area end -->

                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        <?php include './fungsi/footer.php'; ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            selesai();
        });


        function selesai() {
            setTimeout(function() {
                jumlah();
                selesai();
                pesan();
            }, 200);
        }


        function jumlah() {
            $.getJSON("./superadmin/modul_proposal/proses_notif.php", function(datas) {
                $("#notif").html(datas.jumlah);
            });
        }



        function pesan() {
            $.getJSON("./superadmin/modul_proposal/proses_notif_pesan.php", function(data) {
                $("#pesan").empty();
                var no = 1;
                $.each(data.result, function() {
                    $("#pesan").append(`
                    <div class="nofity-list">
                        <a id="pesan" class="notify-item" href="./superadmin/proposal.php">
                            <div class="notify-thumb"><i class="fa fa-send btn-info"></i></div>
                            <div class="notify-text">
                                <p>Pengajuan proposal dari: <b>` + this['nama'] + ` </b></p>
                                <span>` + this['tgl_up'] + `</span>
                            </div>
                        </a>
                    </div>
                    `);
                });
            });
        }
    </script>
</body>

</html>