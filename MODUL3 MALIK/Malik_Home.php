<?php
include('Malik_Config.php');
$query = "SELECT * From buku_table";
$select = mysqli_query($conn, $query);
?>

<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Perpustakaan EAD</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="Malik_Home.php"><img src="logo-ead.png" alt="" width="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </ul>
              <a class="btn btn-primary" aria-current="page" href="Malik_Tambah-Buku.php">Tambah Buku</a>
            </div>
          </div>
      </nav>
      <div class="container" >
        <?php
        if(mysqli_num_rows($select)<=0){
          
        ?>
      <h1 class="text-center" style="margin-top: 250px;">Belum Ada Buku</h1>
      <hr style="height: 7px;color: aqua;">
      <h4 class="text-center">Silahkan menambahkan buku</h4>
      <?php
        }
        else {
          ?>
      <div class="card-group" style="margin-top: 50px;">
      <?php
      while ($selects = mysqli_fetch_assoc ($select)) {
        ?>
        <div class="card">
          <img src="<?= $selects['gambar']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $selects['judul_buku']?></h5>
            <p class="card-text"><?= $selects['deskripsi']?></p>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="Malik_Detail-Buku.php?id_buku=<?= $selects['id_buku']?>">Tampilkan lebih lanjut</a>
          </div>
        </div>
        <?php }
        ?>
      </div>
      <?php }
      ?>

      </div>
      
      <footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
        <img src="logo-ead.png" alt="" width="300px">
        <h1>Perpustakaan EAD</h1>
        <h4>&copy;Malik_1202194234</h4>
      </footer>
