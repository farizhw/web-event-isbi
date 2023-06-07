<?php
  include ('../../konfig/koneksi.php');

    $id_artikel = $_POST['id_artikel'];
    $judul_artikel = $_POST['judul_artikel'];
    $kat_artikel = $_POST['kat_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $tgl_artikel = $_POST['tgl_artikel'];
    $gambar = ($_FILES['gambar']['name']);
  
    if($gambar != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
            move_uploaded_file($file_tmp, '../../images/artikel/'.$nama_gambar_baru); 
                
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $sql = "UPDATE artikel SET judul_artikel = '$judul_artikel', kat_artikel = '$kat_artikel', isi_artikel = '$isi_artikel', tgl_artikel = '$tgl_artikel', gambar = '$nama_gambar_baru' WHERE id_artikel='$id_artikel'";
            $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../artikel.php';</script>";
            }

        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='./edit_artikel.php';</script>";
        }
        
    } else {
        $sql = "UPDATE artikel SET judul_artikel = '$judul_artikel', kat_artikel = '$kat_artikel', isi_artikel = '$isi_artikel', tgl_artikel = '$tgl_artikel' WHERE id_artikel='$id_artikel'";
        $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../artikel.php';</script>";
            }
    }
?>