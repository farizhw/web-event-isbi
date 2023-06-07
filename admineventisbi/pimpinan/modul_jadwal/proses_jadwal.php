 <?php

include '../../konfig/koneksi.php';

//mengambil data dari form input
$kegiatan   = $_POST['kegiatan'];
$mulai      = $_POST['mulai'];
$selesai    = $_POST['selesai'];

//insert data ke dalam database
mysqli_query($conn, "INSERT INTO jad SET kegiatan='$kegiatan', mulai='$mulai', selesai='$selesai' ");

echo '<script LANGUAGE="JavaScript">
            alert("Data dengan nama kegiatan ('.$_POST['kegiatan'].') berhasil disimpan")
            window.location.href="../form_jadwal.php";
            </script>';
//kembali ke halaman index.php
// header("location: ../form_jadwal.php");

?>