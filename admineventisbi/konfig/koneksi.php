<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "event";

$conn = mysqli_connect($server, $user, $password, $nama_database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
// mysqli_close($conn);
?>