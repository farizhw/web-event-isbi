<?php

//include koneksi database
include('../../konfig/koneksi.php');

if (isset($_POST['kirim'])) {
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_artikel, 4)) AS id FROM artikel");
    $hasil = mysqli_fetch_object($getMaxId);
    $generateId = 'A'.date('Y').sprintf("%04s", $hasil->id + 1); 

    $judul_artikel = $_POST['judul_artikel'];
    $kat_artikel = $_POST['kat_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $tgl_artikel = $_POST['tgl_artikel'];
    $gambar = $_FILES['gambar']['name'];
	$filetmpname = $_FILES['gambar']['tmp_name'];
	$folder = '../../images/artikel/';

	move_uploaded_file($filetmpname, $folder.$gambar);
    
    mysqli_query($conn, "INSERT INTO artikel VALUES ('$generateId', '$judul_artikel', '$kat_artikel', '$isi_artikel', '$tgl_artikel', '$gambar')");
    echo '<script>alert("Artikel Dengan ID: '.$generateId.' Berhasil Diupload");document.location="../artikel.php";</script>';
 //header('location:http://localhost/');
}

?>