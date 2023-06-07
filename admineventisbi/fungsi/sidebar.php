<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="https://www.isbi.ac.id/" target="_blank"><img src="assets/images/isbi2.png" width="150"
                    alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active"><a href="home.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                    <!-- UNTUK SUPERADMIN -->
                    <?php if ($_SESSION['level']=="SuperAdmin") { ?>
                        <li><a href="superadmin/pengguna.php"><i class="fas fa-users-cog"></i><span>Data Pengguna</span></a></li>
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                            <ul class="collapse">
                                <li><a href="superadmin/kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                                <li><a href="superadmin/grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                            </ul>
                        </li>
                        <li><a href="superadmin/artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                        <li><a href="superadmin/kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                        <li><a href="superadmin/proposal.php"><i class="fa fa-sticky-note"></i><span>Data Proposal</span></a></li>
                        <li><a href="superadmin/slider.php"><i class="fas fa-sliders-h"></i></i><span>Slider</span></a></li>
                    <?php 
                                }
                            ?>
                    <!-- UNTUK SUPERADMIN -->

                    <!-- UNTUK ADMIN -->
                    <?php if ($_SESSION['level']=="Admin") { ?>
                        <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                        <ul class="collapse">
                            <li><a href="superadmin/kegiatan.php"><i class="far fa-file-alt"></i><span>Data Kegiatan</span></a></li>
                            <li><a href="superadmin/grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                        </ul>
                        </li>
                        <li><a href="superadmin/artikel.php"><i class="far fa-newspaper"></i><span>Artikel</span></a></li>
                        <li><a href="superadmin/kontak.php"><i class="far fa-address-book"></i><span>Data Kontak</span></a></li>
                    <?php 
                                }
                            ?>
                    <!-- UNTUK ADMIN -->

                    <!-- UNTUK PIMPINAN -->
                    <?php if ($_SESSION['level']=="Pimpinan") { ?>
                        <!-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>Kegiatan</span></a>
                        <ul class="collapse">
                            <li><a href="superadmin/grafik.php"><i class="fas fa-chart-area"></i><span>Grafik</span></a></li>
                        </ul>
                        </li> -->
                        <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-calendar-day"></i><span>Jadwal</span></a>
                        <ul class="collapse">
                            <li><a href="pimpinan/form_jadwal.php"><i class="far fa-calendar-alt"></i><span>Form Jadwal</span></a></li>
                            <li><a href="pimpinan/data_jadwal.php"><i class="far fa-file-alt"></i><span>Data Jadwal</span></a></li>
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