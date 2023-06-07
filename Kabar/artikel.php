<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../assets/css/artikel.css" rel="stylesheet" type="text/css">
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
                            <a class="dropdown-item" href="#"><i class="fas fa-paperclip"></i> Kabar
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
                            <a class="dropdown-item" href="../kegiatan/seluruh.php">Seluruh Kegiatan</a>
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

    <!-- ARTIKEL -->
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
                        include '../admineventisbi/konfig/koneksi.php';
                    
                        $page = (isset($_GET['page']))? $_GET['page'] : 1;
                        $limit = 6; 
                        $limit_start = ($page - 1) * $limit;
                        $no = $limit_start + 1;
                    
                        $query = "SELECT * FROM artikel ORDER BY tgl_artikel DESC LIMIT $limit_start, $limit";
                        $artikel = $conn ->prepare($query);
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
                    <div class="card mb-2">
                        <div class="row">
                            <div class="profile-1">
                                <img src="../admineventisbi/images/artikel/<?php echo $gambar; ?>">
                            </div>
                            <div class="col-md-8 px-3">
                                <div class="card-block">
                                    <h4 class="card-title"><?php echo $judul_artikel; ?></h4>
                                    <div><small><i class="fas fa-clock"></i> <?php echo $tgl_artikel; ?>
                                            &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; <i class="fas fa-comment"></i>
                                            Kategori:
                                            <?php echo $kat_artikel; ?></small></div>
                                    <p class="card-text"> <?php echo substr ($isi_artikel, 0, 240)." ..."; ?></p>
                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalartikel<?php echo $id_artikel; ?>">Selengkapnya</a>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalartikel<?php echo $id_artikel; ?>" tabindex="-1"
                                role="dialog" aria-labelledby="ModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                    <div class="modal-content content-artikel">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalScrollableTitle">
                                                <b><?php echo $judul_artikel; ?></b></h5>
                                        </div>
                                        <div class="modal-body body-artikel">
                                            <img src="../admineventisbi/images/artikel/<?php echo $gambar; ?>"
                                                style="width:100%;">
                                            <hr>
                                            <div><small><i class="fas fa-clock"></i> <?php echo $tgl_artikel; ?>
                                                    &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; <i
                                                        class="fas fa-comment"></i> Kategori:
                                                    <?php echo $kat_artikel; ?></small></div>
                                            <p style="text-align:justify">
                                                <?php echo $isi_artikel; ?>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-artikel"
                                                data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- AKHIR ARTIKEL -->

    <!--FOOTER-->
    <footer class="footer mt-5">
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
    <script>
        $('.carousel').carousel({
            interval: 2000 * 10
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/top.js"></script>


</body>

</html>