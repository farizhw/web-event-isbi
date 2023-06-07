<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_kegiatan'];

$sql = "DELETE FROM keg WHERE id_kegiatan = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_kegiatan'].') Terhapus")
        window.location.href="../kegiatan.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>