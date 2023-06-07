<?php

include '../../konfig/koneksi.php';

//mengambil data 5 pesan terbaru 
$query = mysqli_query($conn, "SELECT * FROM proposal ORDER BY id_proposal DESC limit 5");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>