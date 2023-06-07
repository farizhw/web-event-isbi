<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheer" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" xml_error_string>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css' rel='stylesheet' />
        <!-- Font -->
        <link rel="stylesheet" type="text/css" href="./assets/fontawesome/css/all.css" />
    <!-- CSS -->
    <link href="./assets/css/kalender.css" rel="stylesheet" type="text/css">
    <!-- FullCalendar -->
    <link rel="stylesheet" href="./assets/fullcalendar/lib/main.css">
  

    <title>Kalender Kegiatan ISBI Bandung</title>
    <link rel="icon" href="assets/image/isbi.png">
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
                        <a class="nav-link page-scroll" href="#">Kalender</a>
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

    <!-- KALENDER -->
    <section class="kalender" id="kalender">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Kalender Kegiatan
                        <hr class="bawah mx-auto">
                    </h2>
                </div>
            </div>
            <div id='calendar'></div>
        </div>
    </section>
    <!-- AKHIR KALENDER -->

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

    <script>
        $('.carousel').carousel({
            interval: 2000 * 10
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="./assets/fullcalendar/lib/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'local',
                navLinks: true,
                dayMaxEvents: true,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                selectable: true,
                events: [
                    <?php 
                    include './admineventisbi/konfig/koneksi.php';
                        //mengambil data dari tabel jadwal
                        $hasil       = mysqli_query($conn,'SELECT * FROM keg');
                        //melakukan looping
                        while($d = mysqli_fetch_array($hasil)){     
                    ?>
                    {
                        title: '<?php echo $d['judul_k']; ?>', //menampilkan title dari tabel
                        start: '<?php echo $d['tglmulai']; ?>', //menampilkan tgl mulai dari tabel
                        end: '<?php echo $d['tglakhir']; ?>' //menampilkan tgl selesai dari tabel
                    },
                    <?php 
                        } 
                    ?>

                 ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
            });
            calendar.render();
        });
    </script>


</body>

</html>