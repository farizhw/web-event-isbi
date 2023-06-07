<?php 

	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}

 
?>
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin EVENT ISBI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/contoh.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/grafik.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <!-- DataTabel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

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
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="../assets/images/isbi2.png" width="150" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="../home.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                            <!-- UNTUK SUPERADMIN -->
                            <?php if ($_SESSION['level']=="SuperAdmin") { ?>
                                <li><a href="./pengguna.php"><i class="fas fa-users-cog"></i><span>Data Pengguna</span></a></li>
                                <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                                <ul class="collapse">
                                    <li><a href="./kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li class="active"><a href="#"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                                </ul>
                                </li>
                                <li><a href="./artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                                <li><a href="./kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                                <li><a href="./proposal.php"><i class="fa fa-sticky-note"></i><span>Data Proposal</span></a></li>
                                <li><a href="./slider.php"><i class="fas fa-sliders-h"></i></i><span>Slider</span></a></li>
                            <?php 
                                        }
                                    ?>
                            <!-- UNTUK SUPERADMIN -->

                            <!-- UNTUK ADMIN -->
                            <?php if ($_SESSION['level']=="Admin") { ?>
                                <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                                <ul class="collapse">
                                    <li><a href="./kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li class="active"><a href="#"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                                </ul>
                                </li>
                                <li><a href="./artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                                <li><a href="./kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                            <?php 
                                        }
                                    ?>
                            <!-- UNTUK ADMIN -->

                            <!-- UNTUK PIMPINAN -->
                            <?php if ($_SESSION['level']=="Pimpinan") { ?>
                            <!-- <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="#"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-calendar-day"></i><span>Jadwal</span></a>
                                <ul class="collapse">
                                    <li><a href="../pimpinan/form_jadwal.php"><i class="far fa-calendar-alt"></i><span>Form Jadwal</span></a></li>
                                    <li><a href="../pimpinan/data_jadwal.php"><i class="far fa-file-alt"></i><span>Data Jadwal</span></a></li>
                                </ul>
                            </li>
                            <?php 
                                        }
                                    ?>
                            <!-- UNTUK PIMPINAN -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
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
                                <li><a href="../home.php">Home</a></li>
                                <li><span>Grafik</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right btn-sm">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION['username']; ?>
                                <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="text-muted" href="#"> <b> <?php echo $_SESSION['level']; ?></b></a>
                                <a class="dropdown-item" href="../konfig/proses_logout.php"
                                    onclick="return confirm('Apakah anda yakin ingin keluar?')">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- main content area end -->

        <!-- footer area start-->
        <?php include '../fungsi/footer.php'; ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <!-- HighChart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <?php 
        include '../konfig/koneksi.php';

        $festival = mysqli_query($conn, "SELECT kategori_k FROM keg WHERE kategori_k = 'F'");
        $seminar = mysqli_query($conn, "SELECT kategori_k FROM keg WHERE kategori_k = 'S'");
        $talk = mysqli_query($conn, "SELECT kategori_k FROM keg WHERE kategori_k = 'T'");
        $webinar = mysqli_query($conn, "SELECT kategori_k FROM keg WHERE kategori_k = 'W'");
    ?>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Festival', 'Seminar', 'Talk Show', 'Webinar'],
                datasets: [{
                    label: '',
                    data: [
                        <?php echo mysqli_num_rows($festival);?>,
                        <?php echo mysqli_num_rows($seminar);?>,
                        <?php echo mysqli_num_rows($talk);?>,
                        <?php echo mysqli_num_rows($webinar);?>
                    ],
                    backgroundColor: [
                        '#e0e1dd',
                        '#778da9',
                        '#415a77',
                        '#1b263b'
                    ],
                    borderColor: [
                        '#e0e1dd',
                        '#778da9',
                        '#415a77',
                        '#1b263b'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
				maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>