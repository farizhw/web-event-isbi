<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css" />
    <!-- IMG -->
    <link href="assets/image/isbi.png" rel="icon">

    <title>Kegiatan ISBI Bandung</title>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand page-scroll navbar-active" href="#home">
                <img src="./assets/image/isbi.png" width="45" class="d-inline-block"> &nbsp;ISBI Bandung
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#tentang">Tentang</a>
                    </li> -->
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="#tentang">Tentang</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./Kabar/artikel.php"><i class="fas fa-paperclip"></i> Kabar ISBI</a>
                        </div>
                    </div>
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="#event">Kegiatan</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./kegiatan/seluruh.php"><i class="fas fa-paperclip"></i>
                                Seluruh Kegiatan</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="kalender.php">Kalender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="proposal.php">Ajukan Proposal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="hubungi.php">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR AKHIR -->

    <!-- SLIDER -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            <?php
            include './admineventisbi/konfig/koneksi.php';

            $i = 0;
            $data_sl = mysqli_query($conn, "SELECT * FROM slider ORDER BY id_slider ASC");
            while ($d = mysqli_fetch_array($data_sl)) { ?>

                <?php
                $active = "";
                if ($i == 0) {
                    $active = 'active';
                }
                ?>

                <div class="carousel-item <?php echo $active; ?>" data-interval="6000">
                    <img src="./admineventisbi/images/<?php echo $d['nama_slider']; ?>" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4"><b><?php echo $d['ket_slider'] ?></b><br>
                            <span class="kategori"><?php echo $d['kat_slider'] ?></span><br>
                            <span class="instansi">Institut Seni Budaya Indonesia</span>
                        </h1>
                        <a class="page-scroll" href="kalender.php">
                            <div class="slider-btn">
                                <button class="btn btnevt">KALENDER KEGIATAN</button>
                            </div>
                        </a>
                    </div>
                </div>

            <?php $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- SLIDER AKHIR -->

    <!-- TODAY -->
    <section id="tentang" class="tentang">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Tentang ISBI Bandung
                        <hr class="bawah mx-auto">
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                include './admineventisbi/konfig/koneksi.php';
                $sql = "SELECT * FROM tentang";
                $hasil = mysqli_query($conn, $sql);

                $jumlah_tentang = mysqli_num_rows($hasil);
                if ($jumlah_tentang > 0) {
                    while ($row = mysqli_fetch_assoc($hasil)) {
                        $id_tentang = $row["id_tentang"];
                        $judul = $row["judul"];
                        $ket = $row["ket"];
                ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="serviceBox blue">
                                <img src="assets/image/isbiii.png" width="150" class="mx-auto">
                                <br>
                                <br>
                                <h3 class="title"><?php echo $judul = $row['judul']; ?></h3>
                                <p class="description">
                                    <?php
                                    $ket = $row["ket"];
                                    $output = substr($ket, 0, 129) . "...";
                                    echo "$output"
                                    ?>
                                </p>
                                <a href="https://isbi.ac.id/index.php/tentang-isbi-bandung/visi-misi-dan-tujuan" class="read-more"><span>Baca lebih lanjut</span></a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- AKHIR TODAY -->

    <!-- KABAR ISBI -->
    <section class="artikel" id="artikel">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Kabar ISBI Bandung
                        <hr class="bawah mx-auto">
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row" id="load_data">
                    <?php
                    include './admineventisbi/konfig/koneksi.php';

                    $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                    $limit = 6;
                    $limit_start = ($page - 1) * $limit;
                    $no = $limit_start + 1;

                    $query = "SELECT * FROM artikel ORDER BY tgl_artikel DESC LIMIT $limit_start, $limit";
                    $artikel = $conn->prepare($query);
                    $artikel->execute();
                    $res1 = $artikel->get_result();
                    while ($row = $res1->fetch_assoc()) {
                        $id_artikel = $row["id_artikel"];
                        $judul_artikel = $row["judul_artikel"];
                        $kat_artikel = $row["kat_artikel"];
                        $isi_artikel = $row["isi_artikel"];
                        $tgl_artikel = $row["tgl_artikel"];
                        $gambar = $row["gambar"];
                    ?>
                        <div class="col-4 mb-5">
                            <div class="profile-card-2"><img src="./admineventisbi/images/artikel/<?php echo $gambar; ?>">
                                <div class="profile-btn"><a href="#" class="btn btnkabar" data-toggle="modal" data-target="#modalartikel<?php echo $id_artikel; ?>">Selengkapnya</a></div>
                                <div class="profile-judul"><?php echo substr($judul_artikel, 0, 60) . " ..."; ?></div>
                                <div class="profile-kategori">Kat: <?php echo $kat_artikel; ?></div>
                                <div class="profile-tgl"><?php echo $tgl_artikel; ?></div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalartikel<?php echo $id_artikel; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                        <div class="modal-content content-artikel">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalScrollableTitle">
                                                    <b><?php echo $judul_artikel; ?></b>
                                                </h5>
                                            </div>
                                            <div class="modal-body body-artikel">
                                                <img src="./admineventisbi/images/artikel/<?php echo $gambar; ?>" style="width:100%;">
                                                <hr>
                                                <div><small><i class="fas fa-clock"></i> <?php echo $tgl_artikel; ?>
                                                        &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; <i class="fas fa-comment"></i> Kategori:
                                                        <?php echo $kat_artikel; ?></small></div>
                                                <p style="text-align:justify">
                                                    <?php echo $isi_artikel; ?>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-artikel" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Modal -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php
                $query_jumlah = "SELECT count(*) AS jumlah FROM artikel";
                $artikel = $conn->prepare($query_jumlah);
                $artikel->execute();
                $res1 = $artikel->get_result();
                $row = $res1->fetch_assoc();
                $total_records = $row['jumlah'];
                ?>
                <nav class="col-12 mt-4 mb-5">
                    <ul class="pagination pagination-sm justify-content-center">
                        <?php
                        $jumlah_page = ceil($total_records / $limit);
                        $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                        $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
                        $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;

                        if ($page == 1) {
                            echo '<li class="page-item disabled"><a class="page-link page-scroll page-scroll" href="#">Pertama</a></li>';
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                        } else {
                            $link_prev = ($page > 1) ? $page - 1 : 1;
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=1">Pertama</a></li>';
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $link_prev . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                        }

                        for ($i = $start_number; $i <= $end_number; $i++) {
                            $link_active = ($page == $i) ? ' active' : '';
                            echo '<li class="page-item ' . $link_active . '"><a class="page-link page-scroll" href="?page=' . $i . '">' . $i . '</a></li>';
                        }

                        if ($page == $jumlah_page) {
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#">Terakhir</a></li>';
                        } else {
                            $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $link_next . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $jumlah_page . '">Terkahir</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- KABAR ISBI -->

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
            <div class="row justify-content-center">
                <div class="row" id="load_data">
                    <?php
                    include './admineventisbi/konfig/koneksi.php';

                    $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $no = $limit_start + 1;

                    $query = "SELECT * FROM keg ORDER BY tglmulai DESC LIMIT $limit_start, $limit";
                    $kegiatan = $conn->prepare($query);
                    $kegiatan->execute();
                    $res1 = $kegiatan->get_result();
                    while ($row = $res1->fetch_assoc()) {
                        $id_kegiatan = $row["id_kegiatan"];
                        $judul_k = $row["judul_k"];
                        $desk_k = $row["desk_k"];
                        $tglmulai = $row["tglmulai"];
                        $tglakhir = $row["tglakhir"];
                        $jenis_k = $row["jenis_k"];
                        $kategori_k = $row["kategori_k"];
                        $gambar_k = $row["gambar_k"];
                        // if (strlen($judul_k) > 60) {
                        //     $judul_k = substr($judul_k, 0,45) . " ...";
                        // }
                        // // if (strlen($desk_k) > 100) {
                        // //     $desk_k = substr($desk_k, 0, 100) . "...";
                        // // }
                    ?>
                        <div class="m-2">
                            <div class="card shadow-sm">
                                <img src="./admineventisbi/images/<?php echo $gambar_k; ?>" class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <p class="kategori float-left"> *<?php echo $jenis_k; ?></p><br><br>
                                    <h6 class="card-title"> <b> <?php echo substr($judul_k, 0, 45) . " ..."; ?> </b> </h6>
                                    <p class="card-text"><?php echo substr($desk_k, 0, 80) . " ....."; ?></p>
                                    <div class="card-btn">
                                        <a href="#" class="btn btnview" data-toggle="modal" data-target="#modalisi<?php echo $id_kegiatan; ?>">Detail</a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalisi<?php echo $id_kegiatan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <img src="./admineventisbi/images/<?php echo $gambar_k; ?>">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b><?php echo $judul_k; ?></b>
                                                    </h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="text-align:justify">
                                                        <?php echo $desk_k; ?>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Tutup</button>
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
                <?php
                $query_jumlah = "SELECT count(*) AS jumlah FROM keg";
                $kegiatan = $conn->prepare($query_jumlah);
                $kegiatan->execute();
                $res1 = $kegiatan->get_result();
                $row = $res1->fetch_assoc();
                $total_records = $row['jumlah'];
                ?>
                <nav class="col-12 mt-4 mb-5">
                    <ul class="pagination pagination-sm justify-content-center">
                        <?php
                        $jumlah_page = ceil($total_records / $limit);
                        $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                        $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
                        $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;

                        if ($page == 1) {
                            echo '<li class="page-item disabled"><a class="page-link page-scroll page-scroll" href="#">Pertama</a></li>';
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                        } else {
                            $link_prev = ($page > 1) ? $page - 1 : 1;
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=1">Pertama</a></li>';
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $link_prev . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                        }

                        for ($i = $start_number; $i <= $end_number; $i++) {
                            $link_active = ($page == $i) ? ' active' : '';
                            echo '<li class="page-item ' . $link_active . '"><a class="page-link page-scroll" href="?page=' . $i . '">' . $i . '</a></li>';
                        }

                        if ($page == $jumlah_page) {
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                            echo '<li class="page-item disabled"><a class="page-link page-scroll" href="#">Terakhir</a></li>';
                        } else {
                            $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $link_next . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                            echo '<li class="page-item"><a class="page-link page-scroll" href="?page=' . $jumlah_page . '">Terkahir</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
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
                    Jl. Buah Batu No. 212 Bandung | Phone: +62 7314982 | Fax: +62 7303021 | e-Mail: <a href="https://mail.google.com/">isbi@isbi.ac.id</a><br><br>
                    Copyright by <b>Event Team 2021 ISBI Bandung.</b>
                </p>
            </div>
        </div>
    </footer>
    <!--AKHIR FOOTER-->

    <a id="back-to-top" href="#" class="btn btn-secondary btn-md back-to-top" role="button">
        <i class="fas fa-chevron-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/top.js"></script>

</body>