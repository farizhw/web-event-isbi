<?php
include '../../konfig/koneksi.php';

$id = $_GET['id_proposal'];
$sql = mysqli_query($conn, "SELECT * FROM proposal WHERE id_proposal='$id'");
$result = mysqli_fetch_assoc($sql);
?>

<title>Preview PDF</title>

<embed src="../../berkas/<?= $result['namafile'];?>" type="application/pdf" width="100%" height="100%">