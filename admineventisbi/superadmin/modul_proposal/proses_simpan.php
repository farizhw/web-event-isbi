<?php

//include koneksi database
include('../../konfig/koneksi.php');

if (isset($_POST['ajukan'])) {
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_proposal, 4)) AS id FROM proposal");
    $hasil = mysqli_fetch_object($getMaxId);
    $generateId = 'P'.date('Y').sprintf("%04s", $hasil->id + 1); 

    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nowa = $_POST['nowa'];
    $tgl_up = $_POST['tgl_up'];
    $file = $_FILES['namafile']['name'];
    $lokasi = $_FILES['namafile']['tmp_name'];

    $ekstensiFileValid = ['pdf'];
    $ekstensiFile = explode('.', $file);
    $ekstensiFile = strtolower(end($ekstensiFile));

    if( !in_array($ekstensiFile, $ekstensiFileValid) ){
        echo"
        <script>
        alert('Pastikan File Berektensi PDF');document.location='../../../proposal.php';
        </script>
        ";
        return false;
    }
    move_uploaded_file($lokasi, "../../berkas/".$file);
    
    mysqli_query($conn, "INSERT INTO proposal VALUES ('$generateId', '$judul', '$nama', '$email', '$nowa', '$tgl_up', '$file')");
    echo '<script>alert("File Proposal Dengan ID: '.$generateId.' Berhasil Diupload");document.location="../../../proposal.php";</script>';
 //header('location:http://localhost/');
}

?>