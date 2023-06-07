<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/css/hubungi.css" rel="stylesheet" type="text/css">
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#tentang">Tentang</a>
                    </li> -->
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="./index.php#tentang">Tentang</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./Kabar/artikel.php"><i class="fas fa-paperclip"></i> Kabar ISBI</a>
                        </div>
                    </div>
                    <div class="btn-group mr-auto">
                        <a type="button" class="nav-link page-scroll" href="./index.php#event">Kegiatan</a>
                        <a type="button" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <form action="./admineventisbi/superadmin/modul_kontak/proses_simpan.php"
                                            method="POST">
                                            <h3>Hubungi Kami</h3>
                                            <hr class="bawah">
                                            <p>Jangan Ragu untuk menghubungi kami kapan saja. Kami akan menghubungi Anda
                                                sesegera mungkin!.</p>
                                            <div class="form-group ">
                                                <input type="text" class="form-control form-group" name="nama"
                                                    placeholder="Nama" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-group" name="email"
                                                    placeholder="Email" required />
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control form-group" name="pesan"
                                                    placeholder="Pesan" required ></textarea>
                                            </div>
                                            <button type="submit" class="contact_form_submit">Kirim</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="right_conatct_social_icon d-flex align-items-end">
                                    <div class="socil_item_inner d-flex">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_sec">
                            <h4>Info Kontak</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span>+62 7314982</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                                <span>isbi@isbi.ac.id</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>Jln. Buah Batu No. 212 Bandung, Jawa Barat 40265 Indonesia.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/top.js"></script>


</body>

</html>