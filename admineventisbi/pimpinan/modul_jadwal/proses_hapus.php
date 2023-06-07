<?php

include('../../konfig/koneksi.php');

//get id
$id_jad = $_GET['id_jad'];

$sql = "DELETE FROM jad WHERE id_jad = '$id_jad'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_jad'].') Terhapus")
        window.location.href="../data_jadwal.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>