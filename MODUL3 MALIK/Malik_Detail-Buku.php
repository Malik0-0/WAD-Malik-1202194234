<?php
include('Malik_Config.php');
$id_buku = $_GET ['id_buku'];
$query = "SELECT * From buku_table where id_buku = '$id_buku'";
$select = mysqli_query($conn, $query);
$database = mysqli_fetch_assoc($select);
$tag_buku = explode(", ",$database["tag"]);
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
        <div class="card shadow p-5 mt-5">
            <H1 class="text-center">Detail Buku</H1>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <img src="<?= $database['gambar']?>" alt="" height="800px" width="500px">
            </div>
            <hr style="height: 7px;color: aqua;">
            <label class="form-label fw-bold">Judul Buku</label>
            <p><?= $database['judul_buku']?></p>

            <label class="form-label fw-bold">Penulis</label>
            <p><?= $database['penulis_buku']?></p>

            <label class="form-label fw-bold">Tahun Terbit</label>
            <p><?= $database['tahun_terbit']?></p>

            <label class="form-label fw-bold">Deskripsi</label>
            <p><?= $database['deskripsi']?></p>

            <label class="form-label fw-bold">Bahasa</label>
            <p><?= $database['bahasa']?></p>

            <label class="form-label fw-bold">Tag</label>
            <p><?= $database['tag']?></p>
            <div class="row">
            <button class="btn btn-primary col" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
            <a class="btn btn-danger col ms-1" href="Malik_Hapus-Buku.php?id_buku=<?= $database['id_buku']?>">Hapus</a>
            </div>      
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sunting Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="row g-3" method="POST" enctype="multipart/form-data" action="Malik_Perbarui-Buku.php">
                <input type="hidden" name="id_buku" value="<?= $database['id_buku']?>">
            <div class="modal-body">
                <div class="col-12">
                    <label class="form-label fw-bold">Judul Buku</label>
                    <input type="text" class="form-control" id="inputJudul" name="judulbuku" placeholder="Contoh: Pemrograman Web Bersama EAD" value="<?= $database['judul_buku']?>">
                </div>
                <div class="col-12">
                    <label class="form-label fw-bold">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" readonly value="Malik_1202194234">
                </div>
                <div class="col-12">
                    <label class="form-label fw-bold">Tahun Terbit</label>
                    <input type="text" class="form-control" id="inputTahunTerbit" name="tahunterbit" placeholder="Contoh: 1990" value="<?= $database['tahun_terbit']?>">
                </div>
                <div class="col-12">
                    <label class="form-label fw-bold">Deskripsi</label>
                    <input type="text-area" class="form-control" id="inputDeskripsi" name="deskripsi" placeholder="Contoh: Buku ini menjelaskan tentang ..." value="<?= $database['deskripsi']?>">
                </div>
                <div>
                    <label class="form-label fw-bold">Bahasa</label>
                    <input <?php if($database["bahasa"]=="Indonesia") echo "checked" ?> class="ms-1 me-1" type="radio" id="Indonesia" value="Indonesia" name="Bahasa"><label class="light" for="Indonesia">Indonesia</label>
                    <input <?php if($database["bahasa"]=="Lainnya") echo "checked" ?> class="ms-1 me-1" type="radio" id="Lainnya" value="Lainnya" name="Bahasa"><label class="light" for="Lainnya">Lainnya</label>
                </div>
                <div>
                    <label class="form-label fw-bold">Tag</label>
                    <input <?php if(in_array("Pemrograman",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="Pemrograman" value="Pemrograman" name="Tag[]"><label class="light" for="Pemrograman">Pemrograman</label>
                    <input <?php if(in_array("Website",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="Website" value="Website" name="Tag[]"><label class="light" for="Website">Website</label>
                    <input <?php if(in_array("Java",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="Java" value="Java" name="Tag[]"><label class="light" for="Java">Java</label>
                    <input <?php if(in_array("OOP",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="OOP" value="OOP" name="Tag[]"><label class="light" for="OOP">OOP</label>
                    <input <?php if(in_array("MVC",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="MVC" value="MVC" name="Tag[]"><label class="light" for="MVC">MVC</label>
                    <input <?php if(in_array("Kalkulus",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="Kalkulus" value="Kalkulus" name="Tag[]"><label class="light" for="Kalkulus">Kalkulus</label>
                    <input <?php if(in_array("Lainnya",$tag_buku)) echo "checked" ?> class="ms-1 me-1" type="checkbox" id="Lainnya" value="Lainnya" name="Tag[]"><label class="light" for="Lainnya">Lainnya</label>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar_buku">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="perbarui">Save changes</button>
            </div>
            </form>
            </div>
        </div>
        </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
        <img src="logo-ead.png" alt="" width="300px">
        <h1>Perpustakaan EAD</h1>
        <h4>&copy;Malik_1202194234</h4>
      </footer>
