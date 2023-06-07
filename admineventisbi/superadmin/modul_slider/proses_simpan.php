<?php

//include koneksi database
include('../../konfig/koneksi.php');

//get data dari form
// $slideku = $_POST['slideku'];
$ket_slider = $_POST['ket_slider'];
$kat_slider = $_POST['kat_slider'];
$nama_file = $_FILES['slideku']['name'];
$tmp_file = $_FILES['slideku']['tmp_name'];

$folder = '../../images/';
move_uploaded_file($tmp_file, $folder.$nama_file);

//query insert data ke dalam database
$sql = "INSERT INTO slider (ket_slider, kat_slider, nama_slider) VALUES ('$ket_slider', '$kat_slider', '$nama_file')";

if (mysqli_query($conn, $sql)){ 
    echo '<script LANGUAGE="JavaScript">
        alert("Data baru berhasil Tersimpan")
        window.location.href="../slider.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}
 //header('location:http://localhost/');
?>