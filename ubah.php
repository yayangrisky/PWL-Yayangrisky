<?php

include("koneksi.php");
if( !isset($_GET['id'])){
    header('location: tampil.php');
}

$id = $_GET['id'];  
$sql = "SELECT * FROM db_joki WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nahasiswa</title>
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2FtZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
<div class="container my-3">
<div class="card">
    <div class="card-body">
    <header>
            <h5>Data Customer</h3>
    </header>
    <form action="edit.php" method="POST">
        <fieldset>
            <input type="hidden" Name="id" value="<?php echo 
            $row['id'] ?>"/>
    <div class="mb-3">
            <label class="form-label" for="id">Id : </label>
            <input type="text" name ='id' placeholder="id" value="<?php echo $row['id'] ?>" 
            class="form-control" Required/> 
    </div> 
    <div class="mb-3">
            <label class="form-label" for="nama">Nama : </label>
            <input type="text" name ='nama' placeholder="Masukan nama" value="<?php echo $row['nama'] ?> "
            class="form-control" Required/> 
    </div> 
    <div class="mb-3">
            <label class="form-label">Rank : </label>
            <select type="text" name='rank'class="form-control" Required>
            <option>Epic</option>
            <option>Legend</option>
            <option>Mythic</option>
            <option>Mythic Glory</option>
    </select>
    </div>
    <div div class="mb-3">
            <label class="form-label" for="server">Server : </label>
            <input type="text" name ='server' placeholder="Masukan server" value="<?php echo $row['server'] ?>"
            class="form-control" Required/> 
    </div> 
        
            <button type="submit" value="Simpan" Nama="simpan" class="btn btn-danger">Simpan </button>
            

</fieldset>  
</div> 
    </div>
</div>  
</body>
</html>