<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_kontak'];

$sql = "DELETE FROM kontak WHERE id_kontak = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_kontak'].') Terhapus")
        window.location.href="../kontak.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>