<?php
	// INCLUDE KONEKSI KE DATABASE
	include_once("../../konfig/koneksi.php");

	if (isset($_POST['kirim'])) {
		$judul_k = mysqli_real_escape_string($conn, $_POST['judul_k']);
        $desk_k = mysqli_real_escape_string($conn, $_POST['desk_k']);
        $tglmulai = mysqli_real_escape_string($conn, $_POST['tglmulai']);
        $tglakhir = mysqli_real_escape_string($conn, $_POST['tglakhir']);
        $jenis_k = mysqli_real_escape_string($conn, $_POST['jenis_k']);
        $kategori_k = mysqli_real_escape_string($conn, $_POST['kategori_k']);
		$filename = $_FILES['gambar_k']['name'];

		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($judul_k) || empty($desk_k) || empty($tglmulai) || empty($tglakhir) || empty($jenis_k) || empty($kategori_k)) {

            if (empty($judul_k)) {
                echo "<font color='red'>Kolom Judul tidak boleh kosong.</font><br/>";
            }
    
            if (empty($desk_k)) {
                echo "<font color='red'>Kolom Deskripsi tidak boleh kosong.</font><br/>";
            }
    
            if (empty($tglmulai)) {
                echo "<font color='red'>Kolom Tanggal Mulai tidak boleh kosong.</font><br/>";
            }
    
            if (empty($tglakhir)) {
                echo "<font color='red'>Kolom Tanggl Akhir tidak boleh kosong.</font><br/>";
            }
    
            if (empty($jenis_k)) {
                echo "<font color='red'>Kolom Jenis tidak boleh kosong.</font><br/>";
            }
    
            if (empty($kategori_k)) {
                echo "<font color='red'>Kolom Kategori tidak boleh kosong.</font><br/>";
            }
			// KEMBALI KE HALAMAN SEBELUMNYA
			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {
			// JIKA SEMUANYA TIDAK KOSONG
			$filetmpname = $_FILES['gambar_k']['tmp_name'];

			// FOLDER DIMANA GAMBAR AKAN DI SIMPAN
			$folder = '../../images';
			// GAMBAR DI SIMPAN KE DALAM FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
			$hasil = mysqli_query($conn, "INSERT INTO keg VALUES (NULL, '$judul_k', '$desk_k', '$tglmulai', '$tglakhir', '$jenis_k', '$kategori_k', '$filename')");

			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='../kegiatan.php'>Lihat Hasilnya</a>";
		}
	}
?>