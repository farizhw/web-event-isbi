<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../assets/css/seluruh.css" rel="stylesheet" type="text/css">
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.css" />
    <!-- IMG -->
    <link href="../assets/image/isbi.png" rel="icon">

    <title>Kegiatan ISBI Bandung</title>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand page-scroll navbar-active" href="../index.php#home">
                <img src="../assets/image/isbi.png" width="45" class="d-inline-block"> &nbsp;ISBI Bandung
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="../index.php#tentang">Tentang</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../Kabar/artikel.php"><i class="fas fa-paperclip"></i> Kabar
                                ISBI</a>
                        </div>
                    </div>
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="../index.php#event">Kegiatan</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Seluruh Kegiatan</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../kalender.php">Kalender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../proposal.php">Ajukan Proposal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="../hubungi.php">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR AKHIR -->

    <!-- TODAY -->

    <!-- ISI -->
    <section class="event" id="event">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Kegiatan ISBI Bandung
                        <hr class="bawah mx-auto">
                    </h2>
                </div>
            </div>
            <!-- COMBO BOX -->
            <form class="" method="get">
                <div class="form-group">
                    <label for="sel1">Pilih Kategori Kegiatan</label>
                    <select class="form-control" name="jurusan">
                        <?php
                            include "../admineventisbi/konfig/koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                            $sql="select * from jurusan";

                            $hasil=mysqli_query($conn,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;

                            $ket="";
                            if (isset($_GET['jurusan'])) {
                                $jurusan = trim($_GET['jurusan_siswa']);

                                if ($jurusan==$data['kode_jurusan'])
                                {
                                    $ket="selected";
                                }
                            }
                            ?>
                        <option <?php echo $ket; ?> value="<?php echo $data['kode_jurusan'];?>">
                            <?php echo $data['nama_jurusan'];?></option>
                        <?php
                                }
                            ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-info" value="Pilih" />
                    <a href="seluruh.php" class="btn btn-sm btn-warning">Reset </a>
                </div>
            </form>
            <!-- AKHIR COMBO BOX -->
            <div class="row mt-5 mb-5 justify-content-center">
                <div class="row" id="load_data">
                    <?php
                        include '../admineventisbi/konfig/koneksi.php';

                        if (isset($_GET['jurusan'])) {
                            $jurusan=trim($_GET['jurusan']);
                            $query="SELECT * FROM keg WHERE kategori_k='$jurusan' ORDER BY tglmulai DESC";
                        }else {
                            $query="SELECT * FROM keg ORDER BY tglmulai DESC";
                        }

                        $hasil=mysqli_query($conn, $query);
                        while ($row=mysqli_fetch_assoc($hasil)) {
                        $id_kegiatan = $row["id_kegiatan"];
                        $judul_k = $row["judul_k"];
                        $desk_k = $row["desk_k"];
                        $tglmulai = $row["tglmulai"];
                        $tglakhir = $row["tglakhir"];
                        $jenis_k = $row["jenis_k"];
                        $kategori_k = $row["kategori_k"];
                        $gambar_k = $row["gambar_k"];
                        // if (strlen($judul_k) > 60) {
                        //     $judul_k = substr($judul_k, 0, 60) . "...";
                        // }
                        // $desk_k = $row["desk_k"];
                        // if (strlen($desk_k) > 100) {
                        //     $desk_k = substr($desk_k, 0, 100) . "...";
                        // }
                    ?>
                    <div class="m-2 mb-3">
                        <div class="card shadow-sm">
                            <img src="../admineventisbi/images/<?php echo $gambar_k; ?>" class="card-img-top"
                                alt="gambar">
                            <div class="card-body">
                                <p class="kategori float-left"> *<?php echo $jenis_k; ?></p><br><br>
                                <h6 class="card-title"> <b> <?php echo substr ($judul_k, 0, 45)." ..."; ?> </b> </h6>
                                <p class="card-text"><?php echo substr ($desk_k, 0, 80)." ....."; ?></p>
                                <div class="card-btn">
                                    <a href="#" class="btn btnview" data-toggle="modal"
                                        data-target="#modalisi<?php echo $id_kegiatan; ?>">Detail</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalisi<?php echo $id_kegiatan; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <img src="../admineventisbi/images/<?php echo $gambar_k; ?>">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <b><?php echo $judul_k; ?></b></h5>
                                            </div>
                                            <div class="modal-body">
                                                <p style="text-align:justify">
                                                    <?php echo $desk_k; ?>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-success"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Modal -->
                            </div>
                            <div class="card-footer">
                                <small>Berakhir <?php echo $tglakhir; ?></small>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR ISI -->



    <!--FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="small text-center text-warning">
                <p>ISI Yogyakarta | ISI Surakarta | ISI Denpasar | ISI Padang Panjang | ISBI Tanah Papua | ISBI Aceh
                    <br>
                    <b>ISBI BANDUNG</b> <br>
                    Jl. Buah Batu No. 212 Bandung | Phone: +62 7314982 | Fax: +62 7303021 | e-Mail: <a
                        href="https://mail.google.com/">isbi@isbi.ac.id</a><br><br>
                    Copyright by <b>Event Team 2021 ISBI Bandung.</b></p>
            </div>
        </div>
    </footer>
    <!--AKHIR FOOTER-->

    <a id="back-to-top" href="#" class="btn btn-secondary btn-md back-to-top" role="button"><i
            class="fas fa-chevron-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/top.js"></script>


</body>

</html>