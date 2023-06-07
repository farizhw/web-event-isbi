<?php

//include koneksi database
include('../../konfig/koneksi.php');

//get data dari form
$username = $_POST['username'];
$password  = md5($_POST['password']);
$level  = $_POST['level'];

//query insert data ke dalam database
$sql = "INSERT INTO pengguna (username, password, level) VALUES ('$username', '$password', '$level')";

if (mysqli_query($conn, $sql)){ 
    echo '<script LANGUAGE="JavaScript">
        alert("Data baru dengan username: '.$_POST['username'].' Tersimpan")
        window.location.href="../pengguna.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}
 //header('location:http://localhost/');
?>