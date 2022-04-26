<?php

include("koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $rank = $_POST['rank'];
    $server = $_POST['server'];

    $sql="UPDATE db_joki SET id='$id', nama='$nama', rank='$rank', server='$server'
    WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    header ('location: tampil.php');  
    
?>