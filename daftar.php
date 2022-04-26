<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>JokiBray</title>
  </head>
  <body style="background-image:url(https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2FtZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
  <div class="container my-3">
  <div class="card">
  <div class="card-body">
  <header>
        <h3 class="text-center">Data Customer</h3>
  </header>
  <form action="pendaftaran.php" method="POST">
  <div class="mb-3">
        <label class="form-label">Id</label>
        <input type="text" name ='id' class="form-control" Required>
  </div>
  <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name ='nama' class="form-control" Required>
  </div>
  <div class="mb-3">
    <label class="form-label">Rank</label>
    <select type="text" name='rank'class="form-control" Required>
        <option>Epic</option>
        <option>Legend</option>
        <option>Mythic</option>
        <option>Mythic Glory</option>
  </select>
  </div>
  <div class="mb-3">
        <label class="form-label">Server</label>
        <input type="text" name='server' class="form-control" Required>
  </div>
  <button type="submit" value="Daftar" name="daftar" class="btn btn-danger">Daftar</button>
  <a href="tampil.php" class="btn btn-warning"><span><i class="bi bi-backspace"></i></span> Kembali </a>
  </form>
  </div>
  </div></div>
  
  </body>
  </html>