<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_pengguna'];

$sql = "DELETE FROM pengguna WHERE id_pengguna = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_pengguna'].') Terhapus")
        window.location.href="../pengguna.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>