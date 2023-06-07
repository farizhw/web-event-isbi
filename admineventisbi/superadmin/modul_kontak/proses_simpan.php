<?php

//include koneksi database
include('../../konfig/koneksi.php');

//get data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//query insert data ke dalam database
$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $sql)){ 
    echo '<script LANGUAGE="JavaScript">
        alert("Data baru dengan Nama: '.$_POST['nama'].' Berhasil Tersimpan")
        window.location.href="../../../hubungi.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}
 //header('location:http://localhost/');
?>