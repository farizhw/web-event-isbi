<?php
    include '../konfig/koneksi.php';

    //insert data ke dalam database
    $hasil = mysqli_query($conn,'SELECT * FROM jad ORDER BY id_jad');

    $dataArr = array();
    while ($d = mysqli_fetch_array($hasil)) {
        $dataArr[] = array(
            'id' => $d['id_jad'],
            'title' => $d['kegiatan'],
            'start' => $d['mulai'],
            'end' => $d['selesai'],
        );
    }

    echo json_encode($dataArr);
?>