<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_artikel'];

$sql = "DELETE FROM artikel WHERE id_artikel = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_artikel'].') Terhapus")
        window.location.href="../artikel.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>