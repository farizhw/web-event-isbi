<?php

include('../../konfig/koneksi.php');

//get id
$id = $_GET['id_proposal'];

$sql = "DELETE FROM proposal WHERE id_proposal = '$id'";

if(mysqli_query($conn,$sql)) {
    echo '<script LANGUAGE="JavaScript">
        alert("Data dengan ID: ('.$_GET['id_proposal'].') Terhapus")
        window.location.href="../proposal.php";
        </script>'; 
}
else{
    echo "Error : ".$sql.". ".mysqli_error($conn);
}

?>