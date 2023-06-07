<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_slider'];

$sql = "DELETE FROM slider WHERE id_slider = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_slider'].') Terhapus")
        window.location.href="../slider.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>