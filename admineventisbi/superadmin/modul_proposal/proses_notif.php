

<?php

// melakukan koneksi 
include('../../konfig/koneksi.php');

//menghitung jumlah pesan dari tabel pesan
$query= mysqli_query($conn, "SELECT COUNT(id_proposal) as jumlah From proposal");

//menampilkan data
$hasil = mysqli_fetch_array($query);

//membuat data json
echo json_encode(array('jumlah' => $hasil['jumlah']));

?>