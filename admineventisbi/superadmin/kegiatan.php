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
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
                                    <li class="active"><a href="#"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li><a href="./grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
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
                                    <li class="active"><a href="#"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                    <li><a href="./grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-calendar"></i><span>Jadwal</span></a>
                                <ul class="collapse">
                                    <li><a href="../pimpinan/form_jadwal.php"><i class="ti-files"></i><span>Form Jadwal</span></a></li>
                                    <li><a href="../pimpinan/data_jadwal.php"><i class="ti-files"></i><span>Data Jadwal</span></a></li>
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
                                <li><span>Data Kegiatan</span></li>
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
            <?php
                // Load file koneksi.php
                include '../konfig/koneksi.php';
                $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
                $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
                if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
                    // Buat sql untuk menampilkan semua data kegiatan
                    $sql = "SELECT * FROM keg ORDER BY tglmulai ASC";
                    $url_cetak = "./modul_kegiatan/cetak_kegiatan.php";
                    $label = "Semua Data Kegiatan";
                }else{ // Jika terisi
                    // Buat sql untuk menampilkan data kegiatan sesuai periode tanggal
                    $sql = "SELECT * FROM keg WHERE (tglmulai BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."') ORDER BY tglmulai ASC";
                    $url_cetak = "./modul_kegiatan/cetak_kegiatan.php?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&filter=true";
                    $tgl_awal = date('d-F-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
                    $tgl_akhir = date('d-F-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
                    $label = 'Periode Tanggal <b>'.$tgl_awal.'</b> s/d <b>'.$tgl_akhir;
                }
            ?>
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-4 mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-rounded btn-primary btn-sm" data-toggle="modal"
                                data-target="#tambahmodal">
                                Tambah Data
                            </button> &nbsp;
                            <a href="<?php echo $url_cetak ?>" target="_blank">
                                <button type="button" class="btn btn-rounded btn-light btn-sm"><i
                                        class="fas fa-file-pdf"></i>
                                    Cetak PDF
                                </button>
                            </a>
                        </div>
                    </div><br>
                    <form method="get" action="kegiatan.php">
                        <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    <label class="sr-only">Dari Tanggal</label>
                                    <input type="text" name="tgl_awal" class="form-control form-control-sm tgl_awal"
                                        value="<?= @$_GET['tgl_awal'] ?>" placeholder="Dari Tanggal">
                                </div>
                            </div>
                            <div class="col-sm-3 my-1">
                                <label class="sr-only">Sampai Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    <input type="text" name="tgl_akhir" class="form-control form-control-sm tgl_akhir"
                                        value="<?= @$_GET['tgl_akhir'] ?>" placeholder="Sampai Tanggal">
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" name="filter" value="true"
                                    class="btn btn-rounded btn-info btn-xs">Tampilkan</button> &nbsp;
                                    <?php
                                    if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                                        echo '<a href="kegiatan.php" class="btn btn-rounded btn-secondary btn-xs">Reset</a>';
                                    ?>
                            </div>
                        </div>
                    </form>
                    <p class="label"><?php echo $label ?></p>
                    <br />
                </div>
                
                <!-- Tabel Kegiatan -->
                <table id="mydatatabel" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th width="1px">NO</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Jenis</th>
                            <th width="40px">Kategori</th>
                            <th>Gambar</th>
                            <th width="130px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $hasil=mysqli_query($conn, $sql);
                            $no=1;
                            while ($d=mysqli_fetch_array($hasil)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['judul_k'];?></td>
                            <td><?php echo substr ($d['desk_k'], 0, 160)." ..."; ?></td>
                            <td><?php echo date('d-n-Y H:i',strtotime($d['tglmulai'])); ?></td>
                            <td><?php echo date('d-n-Y H:i',strtotime($d['tglakhir'])); ?></td>
                            <td><?php echo $d['jenis_k']; ?></td>
                            <td style="text-align:center"><?php echo $d['kategori_k']; ?></td>
                            <td align="center" width="10"><?php echo "<img src='../images/$d[gambar_k]'>" ?></td>
                            <td>
                                <a href="./modul_kegiatan/edit_kegiatan.php?id_kegiatan=<?php echo $d['id_kegiatan']; ?>"
                                    class=" btn btn-warning btn-rounded btn-sm">Edit
                                </a> |
                                <a href="./modul_kegiatan/proses_hapus.php?id_kegiatan=<?php echo $d['id_kegiatan']; ?>"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                    class=" btn btn-danger btn-rounded btn-sm">Hapus
                                </a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- main content area end -->

        <!-- MODAL TAMBAH -->
        <form action="./modul_kegiatan/proses_simpan.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="tambahmodallabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahmodallabel">Tambah Data Kegiatan</h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="col-form-label">Judul Kegiatan</label>
                                    <input type="text" class="form-control" name="judul_k" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Desikripsi Kegiatan</label>
                                    <textarea class="form-control" name="desk_k" rows="3" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Tanggal Mulair</label>
                                    <input type="datetime-local" class="form-control col-sm-4" name="tglmulai"
                                        autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Tanggal Akhir</label>
                                    <input type="datetime-local" class="form-control col-sm-4" name="tglakhir"
                                        autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kegiatan</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="jenis_k" value="Internal"> Internal
                                    </label> &nbsp;
                                    <label class="radio-inline">
                                        <input type="radio" name="jenis_k" value="Eksternal"> Eksternal
                                    </label>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="col-form-label">Kategori Kegiatan</label>
                                    <select class="form-control" name="kategori_k" required>
                                        <option value="">-- Pilih Kategori Kegiatan --</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Webinar">Webinar</option>
                                        <option value="Talkshow">Talkshow</option>
                                        <option value="Talkshow">Festival</option>
                                    </select>
                                </div> -->

                                <div class="form-group">
                                    <label class="col-form-label">Kategori Kegiatan</label>
                                    <select class="form-control" name="kategori_k" required>
                                        <option value="">-- Pilih Kategori Kegiatan --</option>
                                        <?php 
                                        
                                        include '../konfig/koneksi.php';

                                        $sql="SELECT * FROM jurusan";
                                        $hasil=mysqli_query($conn, $sql);
                                        $no=0;
                                        while ($d=mysqli_fetch_array($hasil)) {
                                            $no++;
                                        ?>
                                        <option value="<?php echo $d['kode_jurusan'];?>">
                                            <?php echo $d['nama_jurusan'];?> </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Poster</label>
                                    <input type="file" accept="image/*" class="form-control" name="gambar_k"
                                        required="" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded btn-light" data-dismiss="modal"> Batal</button>
                            <button type="submit" name="kirim" class="btn btn-rounded btn-primary"> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- MODAL TAMBAH -->

        <!-- MODAL TAMBAH -->
        <form action=" " method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="cetakmodal" tabindex="-1" role="dialog" aria-labelledby="cetakmodallabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cetakmodallabel">Cetak Laporan Periode</h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="col-form-label">Dari Tanggl</label>
                                    <input type="date" class="form-control" name="tgl_1" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Sampai Tanggl</label>
                                    <input type="date" class="form-control" name="tgl_2" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="kirim" class="btn btn-rounded btn-primary"> Cetak </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- MODAL TAMBAH -->

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
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    </script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script>
        $(document).ready(function () {
            $('#mydatatabel').DataTable();
        });
    </script>
    <script>
    $(document).ready(function(){
        setDateRangePicker(".tgl_awal", ".tgl_akhir")
    })
    </script>
    
</body>

</html>