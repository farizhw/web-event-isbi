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
    <link href="assets/css/ajukan.css" rel="stylesheet" type="text/css">
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
            <a class="navbar-brand page-scroll navbar-active" href="./index.php#home">
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

    <section class="ajukan" id="ajukan">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Ajukan Proposal
                        <hr class="bawah mx-auto">
                    </h2>
                </div>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="contact_field">
                    <p>Silahkan jika ingin membuat kegiatan maka bisa mengajukan proposal melalui form ini!.</p>
                    <button type="button" class="contact_form_submit" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Ajukan Sekarang
                    </button>

                    <!-- Modal -->
                    <form action="./admineventisbi/superadmin/modul_proposal/proses_simpan.php" method="post"
                        enctype="multipart/form-data">
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content rounded-1">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Pengajuan Proposal</b>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group ">
                                                <input type="hidden" name="id_proposal" />
                                                <input type="hidden" name="tgl_up" value="<?php echo date('Y-m-d h:i:s A')?>" />
                                                <input type="text" class="form-control form-group" name="judul"
                                                    placeholder="Judul Kegiatan*" required />
                                            </div>
                                            <div class="form-group ">
                                                <input type="text" class="form-control form-group" name="nama"
                                                    placeholder="Nama Lengkap Pengaju*" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-group" name="email"
                                                    placeholder="Email*" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-group" name="nowa"
                                                    placeholder="No WA*" required />
                                            </div>
                                            <i style="font-size: 11px;color: red;">*File harus berekstensi PDF*</i>
                                            <div>
                                                <input type="file" id="actual-btn" name="namafile" hidden />
                                                <label for="actual-btn">Upload File</label>
                                                <span id="file-chosen"><i>Tidak ada file yang dipilih*</i></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="ajukan"
                                            class="btn btn-rounded btn-success btn-sm">Ajukan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Akhir Modal -->

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
    <script>
        const actualBtn = document.getElementById('actual-btn');

        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function () {
            fileChosen.textContent = this.files[0].name
        })
    </script>

</body>

</html>