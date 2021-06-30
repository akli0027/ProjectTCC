<?php
     include 'koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM log WHERE id='$id'");

    if ($query) {
        header('Location: log.php');
    }
?>
