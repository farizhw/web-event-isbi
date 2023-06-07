<?php
  include ('../../konfig/koneksi.php');

    $id_slider = $_POST['id_slider'];
	$ket_slider = $_POST['ket_slider'];
    $kat_slider = $_POST['kat_slider'];
    $nama_slider = ($_FILES['nama_slider']['name']);
  
    if($nama_slider != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $nama_slider);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['nama_slider']['tmp_name'];   
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$nama_slider;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
            move_uploaded_file($file_tmp, '../../images/'.$nama_gambar_baru); 
                
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $sql = "UPDATE slider SET ket_slider = '$ket_slider', kat_slider = '$kat_slider', nama_slider = '$nama_gambar_baru' WHERE id_slider='$id_slider'";
            $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../slider.php';</script>";
            }

        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='./edit_slider.php';</script>";
        }
        
    } else {
        $sql = "UPDATE slider SET ket_slider = '$ket_slider', kat_slider = '$kat_slider' WHERE id_slider='$id_slider'";
        $hasil = mysqli_query($conn, $sql);
            if(!$hasil){
                die ("Query gagal dijalankan: ".mysqli_errno($conn). " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../slider.php';</script>";
            }
    }
?>