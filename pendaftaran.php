<?php
include("koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $rank = $_POST['rank'];
    $server = $_POST['server'];
    

    $sql = "INSERT INTO db_joki (id, nama, rank, server) VALUE 
    ('$id','$nama','$rank','$server')";
    $query = mysqli_query($conn, $sql);

    header("location: tampil.php");
?>