<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../../index.php?pesan=gagal");
	}
 
?>
<!doctype html>

<head>
    <title>Admin EVENT ISBI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
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
                    <a href="index.php"><img src="../../assets/images/isbi2.png" width="150" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="../../home.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                            <!-- UNTUK SUPERADMIN -->
                            <?php if ($_SESSION['level']=="SuperAdmin") { ?>
                                <li class="active"><a href="#"><i class="fas fa-users-cog"></i><span>Data Pengguna</span></a></li>
                                <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                                <ul class="collapse">
                                    <li><a href="../kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li><a href="../grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                                </ul>
                                </li>
                                <li><a href="../artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                                <li><a href="../kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                                <li><a href="../proposal.php"><i class="fa fa-sticky-note"></i><span>Data Proposal</span></a></li>
                                <li><a href="../slider.php"><i class="fas fa-sliders-h"></i></i><span>Slider</span></a></li>
                            <?php 
                                        }
                                    ?>
                            <!-- UNTUK SUPERADMIN -->

                            <!-- UNTUK ADMIN -->
                            <?php if ($_SESSION['level']=="Admin") { ?>
                                <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                                <ul class="collapse">
                                    <li><a href="../kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li><a href="../grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                                </ul>
                                </li>
                                <li><a href="../artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                                <li><a href="../kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                            <?php 
                                        }
                                    ?>
                            <!-- UNTUK ADMIN -->

                            <!-- UNTUK PIMPINAN -->
                            <?php if ($_SESSION['level']=="Pimpinan") { ?>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-calendar"></i><span>Jadwal</span></a>
                                <ul class="collapse">
                                    <li><a href="../../pimpinan/form_jadwal.php"><i class="ti-files"></i><span>Form Jadwal</span></a></li>
                                    <li><a href="../../pimpinan/data_jadwal.php"><i class="ti-files"></i><span>Data Jadwal</span></a></li>
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
                                <li><a href="../../home.php">Home</a></li>
                                <li><a href="../pengguna.php">Data Pengguna</a></li>
                                <li><span>Edit Data Pengguna</span></li>
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
                                <a class="dropdown-item" href="../../konfig/proses_logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

            <div class="main-content-inner mt-5">
                <div class="container" style="margin-top: 80px">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <b>EDIT DATA PENGGUNA</b>
                                </div>
                                <div class="card-body">
                                    <form action="./proses_update.php" method="POST">
                                        <?php 
                                            include('../../konfig/koneksi.php');
                                            $id = $_GET['id_pengguna'];
                                            $sql = "SELECT * FROM pengguna WHERE id_pengguna = $id LIMIT 1";
                                            $hasil = mysqli_query($conn, $sql);
                                            $data_pengguna = mysqli_fetch_array($hasil);
                                        ?>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" value="<?php echo $data_pengguna['username'] ?>"
                                                class="form-control" maxlength="15">
                                            <input type="hidden" name="id_pengguna" value="<?php echo $data_pengguna['id_pengguna'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" value="<?php echo $data_pengguna['password'] ?>"
                                                class="form-control">
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                                 <?php
                                                    // if ($data_pengguna['jk'] == "Laki-laki") echo "<input type='radio' name='jk' value='Laki-laki' checked> Laki-laki  &nbsp; &nbsp; <input type='radio' name='jk' value='Perempuan'> Perempuan";
                                                    // else if ($data_pengguna['jk'] == "Perempuan") echo "<input type='radio' name='jk' value='Laki-laki'> Laki-laki  &nbsp; <input type='radio' name='jk' value='Perempuan' checked> Perempuan";
                                                ?>
                                        </div> -->

                                        <div class="form-group">
                                            <label class="col-form-label">Level</label>
                                            <select class="form-control" name="level">
                                                <?php
                                                // proses menampilkan pilihan jenis pekerjaan.
                                                // jika pekerjaan = petani, maka pada option 'petani' diberi label 'selected', demikian seterusnya
                                                
                                                if ($data_pengguna['level'] == "Pimpinan") echo "<option value='Pimpinan' selected>Pimpinan</option>";
                                                else echo "<option value='Pimpinan'>Pimpinan</option>";
                                                
                                                if ($data_pengguna['level'] == "SuperAdmin") echo "<option value='SuperAdmin' selected>SuperAdmin</option>";
                                                else echo "<option value='SuperAdmin'>SuperAdmin</option>";
                                                
                                                if ($data_pengguna['level'] == "Admin") echo "<option value='Admin' selected>Admin</option>";
                                                else echo "<option value='Admin'>Admin</option>";
                                                ?>
                                            </select>
                                        </div>

                                        <div class="float-right">
                                            <button type="submit" class="btn btn-rounded btn-success">UPDATE</button>
                                            <button type="reset" class="btn btn-rounded btn-light">RESET</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        <?php include '../../fungsi/footer.php'; ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/metisMenu.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../../assets/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>