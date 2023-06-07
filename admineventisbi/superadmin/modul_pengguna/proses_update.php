<?php

//include koneksi database
include('../../konfig/koneksi.php');

//get data dari form
$id         = $_POST['id_pengguna'];
$username   = $_POST['username'];
$password   = md5($_POST['password']);
$level      = $_POST['level'];

//query update data ke dalam database berdasarkan ID
$sql = "UPDATE pengguna SET username = '$username', 
                            password = '$password', 
                            level = '$level'
                            WHERE id_pengguna = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_POST['id_pengguna'].') Terupdate")
        window.location.href="../pengguna.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>