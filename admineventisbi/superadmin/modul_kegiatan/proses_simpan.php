<?php 
include '../../konfig/koneksi.php';

if (isset($_POST['kirim'])) {
	$judul_k = $_POST['judul_k'];
	$desk_k = $_POST['desk_k'];
	$tglmulai = $_POST['tglmulai'];
	$tglakhir = $_POST['tglakhir'];
	$jenis_k = $_POST['jenis_k'];
	$kategori_k = $_POST['kategori_k'];
	$gambar_k = $_FILES['gambar_k']['name'];
	$filetmpname = $_FILES['gambar_k']['tmp_name'];
	$folder = '../../images/';

	move_uploaded_file($filetmpname, $folder.$gambar_k);

	$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM keg WHERE judul_k='$judul_k' or tglmulai='$tglmulai' or tglakhir='$tglakhir'"));

	// $sql=mysqli_query($conn, "INSERT INTO keg VALUES (NULL, '$judul_k', '$desk_k', '$tglmulai', '$tglakhir', '$jenis_k', '$kategori_k', '$gambar_k')");

	if ($cek > 0) {
		echo "<script>window.alert('Nama Kegiatan Yang Anda Masukan Sudah Ada')
		window.location='../kegiatan.php'</script>";
	}else {
		mysqli_query($conn, "INSERT INTO keg VALUES (NULL, '$judul_k', '$desk_k', '$tglmulai', '$tglakhir', '$jenis_k', '$kategori_k', '$gambar_k')");
		echo "<script>window.alert('Data Berhasil Uploads')
		window.location='../kegiatan.php'</script>";
	}
	// if ($sql) {
	// 	echo "Data Berhasil Uploads";
	// 	echo "<a href='../kegiatan.php'> lihat data </a>";
	// }else{
	// 	echo 'GAGAL';
	// }
}

?>