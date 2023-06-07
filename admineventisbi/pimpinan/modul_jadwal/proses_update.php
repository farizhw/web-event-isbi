<?php

//include koneksi database
include('../../konfig/koneksi.php');

//get data dari form
$id_jad     = $_GET['id_jad'];
$kegiatan   = $_GET['kegiatan'];
$mulai      = $_GET['mulai'];
$selesai    = $_GET['selesai'];

//query update data ke dalam database berdasarkan ID
$sql = "UPDATE jad SET kegiatan = '$kegiatan', 
                            mulai = '$mulai', 
                            selesai = '$selesai'
                            WHERE id_jad = '$id_jad'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_jad'].') Terupdate")
        window.location.href="../data_jadwal.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>