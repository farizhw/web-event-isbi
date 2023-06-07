<?php
  include ('../../konfig/koneksi.php');

    $id_kegiatan = $_POST['id_kegiatan'];
	$judul_k = $_POST['judul_k'];
	$desk_k = $_POST['desk_k'];
	$tglmulai = $_POST['tglmulai'];
	$tglakhir = $_POST['tglakhir'];
	$jenis_k = $_POST['jenis_k'];
	$kategori_k = $_POST['kategori_k'];
    $gambar_k = ($_FILES['gambar_k']['name']);
  
    if($gambar_k != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $gambar_k);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_k']['tmp_name'];   
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar_k;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
            move_uploaded_file($file_tmp, '../../images/'.$nama_gambar_baru); 
                
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $sql = "UPDATE keg SET judul_k = '$judul_k', desk_k = '$desk_k', tglmulai = '$tglmulai', tglakhir = '$tglakhir', jenis_k = '$jenis_k', kategori_k = '$kategori_k', gambar_k = '$nama_gambar_baru' WHERE id_kegiatan='$id_kegiatan'";
            $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../kegiatan.php';</script>";
            }

        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='./edit_kegiatan.php';</script>";
        }
        
    } else {
        $sql = "UPDATE keg SET judul_k = '$judul_k', desk_k = '$desk_k', tglmulai = '$tglmulai', tglakhir = '$tglakhir', jenis_k = '$jenis_k', kategori_k = '$kategori_k' WHERE id_kegiatan='$id_kegiatan'";
        $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../kegiatan.php';</script>";
            }
    }
?>