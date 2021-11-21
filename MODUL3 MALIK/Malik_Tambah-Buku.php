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
      <div class="container mt-5">
        <div class="card shadow p-3">
          <h1 class="text-center">Tambah Data Buku</h1>
          <form class="row g-3" method="POST" enctype="multipart/form-data" action="Malik_Mengunggah-Buku.php">
              <div class="col-12">
                  <label class="form-label fw-bold">Judul Buku</label>
                  <input type="text" class="form-control" id="inputJudul" name="judulbuku" placeholder="Contoh: Pemrograman Web Bersama EAD">
              </div>
              <div class="col-12">
                  <label class="form-label fw-bold">Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis" readonly value="Malik_1202194234">
              </div>
              <div class="col-12">
                  <label class="form-label fw-bold">Tahun Terbit</label>
                  <input type="text" class="form-control" id="inputTahunTerbit" name="tahunterbit" placeholder="Contoh: 1990">
              </div>
              <div class="col-12">
                  <label class="form-label fw-bold">Deskripsi</label>
                  <input type="text-area" class="form-control" id="inputDeskripsi" name="deskripsi" placeholder="Contoh: Buku ini menjelaskan tentang ...">
              </div>
              <div>
                  <label class="form-label fw-bold">Bahasa</label>
                  <input class="ms-1 me-1" type="radio" id="Indonesia" value="Indonesia" name="Bahasa"><label class="light" for="Indonesia">Indonesia</label>
                  <input class="ms-1 me-1" type="radio" id="Lainnya" value="Lainnya" name="Bahasa"><label class="light" for="Lainnya">Lainnya</label>
              </div>
              <div>
                  <label class="form-label fw-bold">Tag</label>
                  <input class="ms-1 me-1" type="checkbox" id="Pemrograman" value="Pemrograman" name="Tag[]"><label class="light" for="Pemrograman">Pemrograman</label>
                  <input class="ms-1 me-1" type="checkbox" id="Website" value="Website" name="Tag[]"><label class="light" for="Website">Website</label>
                  <input class="ms-1 me-1" type="checkbox" id="Java" value="Java" name="Tag[]"><label class="light" for="Java">Java</label>
                  <input class="ms-1 me-1" type="checkbox" id="OOP" value="OOP" name="Tag[]"><label class="light" for="OOP">OOP</label>
                  <input class="ms-1 me-1" type="checkbox" id="MVC" value="MVC" name="Tag[]"><label class="light" for="MVC">MVC</label>
                  <input class="ms-1 me-1" type="checkbox" id="Kalkulus" value="Kalkulus" name="Tag[]"><label class="light" for="Kalkulus">Kalkulus</label>
                  <input class="ms-1 me-1" type="checkbox" id="Lainnya" value="Lainnya" name="Tag[]"><label class="light" for="Lainnya">Lainnya</label>
              </div>
              <div class="mb-3">
                <label class="form-label fw-bold">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar_buku">
              </div>
              <div class="row justify-content-center" id="navbarSupportedContent">
              <button class="btn btn-primary col-5" aria-current="page" type="submit" name="tambahdatabuku">+ Tambah Buku</button>
            </div>
          </form>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
        <img src="logo-ead.png" alt="" width="300px">
        <h1>Perpustakaan EAD</h1>
        <h4>&copy;Malik_1202194234</h4>
      </footer>