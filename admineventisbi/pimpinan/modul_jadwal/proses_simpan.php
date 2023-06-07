<?php 
include '../../konfig/koneksi.php';

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    mysqli_query($conn, "INSERT INTO jad VALUES ('', '$title', '$start', '$end') ");
}

?>