<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Data Customer</title>
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2FtZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
<div class="container my-3">
<div class="card">
    <div class="card-body">
    <br>
    <table class="my-2 table table-borderless">
    <header>
        <h3 class = "text-center my-2" >Customer yang sudah mendaftar</h3>
    </header>
    
        <a href="daftar.php" class="btn btn-danger" ><span><i class="bi bi-plus-circle"></i></span> Tambah Baru</a>
    <br>
        <a href="login_sukses.php" class="my-1 btn btn-warning"><span><i class="bi bi-backspace"></i></span> Kembali </a>
        
    <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Rank</th>
                <th>Server</th>
            
            </tr>
    </thead>
    <tbody>
            <?php
            $sql = "SELECT * FROM db_joki";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["rank"]."</td>";
                echo "<td>".$row["server"]."</td>";  
                echo "<td>";
                echo "<a class='btn btn-success mx-3 'href='ubah.php?id=".$row['id']."'>Edit</a> ";
                echo "<a class='btn btn-secondary' href='hapus.php?id=".$row['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
    </tbody>
    </table>
    </div>
</div>
    </div>
</body>
</html