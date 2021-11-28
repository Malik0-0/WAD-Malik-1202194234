<?php
session_start();
include_once('Config.php');
$nav = 'Black';
if (isset($_COOKIE['nav'])) {
  $nav = $_COOKIE['nav'];
}
if (isset($_POST['booking'])) {
  $usr = $_SESSION['id'];
  $tempat = $_POST['tempat'];
  $lokasi = $_POST['lokasi'];
  $harga = $_POST['harga'];
  $tanggal = $_POST['tanggal'];

  mysqli_query($conn, "INSERT INTO booking(user_id,nama_tempat,lokasi,harga,tanggal) VALUES('$usr','$tempat','$lokasi','$harga','$tanggal')");
  $_SESSION['message'] = "Berhasil memesan tiket";
  header("location: index.php");
} ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Register</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg justify-content-between navbar-dark" style="background-color: <?= $nav ?>;">
    <h1>
      <strong>
        <a class="navbar-brand text-light" href="index.php">WAD Login Center</a>
      </strong>
    </h1>
    <ul class="navbar-nav font-weight-bold">
      <?php if (!isset($_SESSION['nama'])) : ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Login</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="Booking.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nama'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
          </ul>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
  <?php
  if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $_SESSION['message'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php unset($_SESSION['message']);
  endif; ?>

  <?php
  if (isset($_SESSION['registered'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $_SESSION['registered'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php unset($_SESSION['registered']);
  endif;  ?>
  <div class="Title">
    <div class="row justify-content-center text-center">
      <div class="card" style="width: 80%;">
        <div class="card-body pb-5 pt-5 ">
          <h1 class="card-title">EAD Travel</h1>
        </div>
      </div>
    </div>
  </div>
  <div class = "container justify-content-center align-items-center d-flex flex-column">
    <div class="card" style="width: 80%;">
      <div class="row justify-content-center">
        <div class="col">
          <div class="card">
            <img src="Tes 1.jpg" alt="" style="width: 100%; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Raja Ampat, Papua</h5>
              <p class="mb-0" style="color: grey;">Kepuluan Raja Ampat adalah kepulauan Indonesia di ujung barat laut semenanjung Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan goa kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waigeo. Batanta dan salawati adalah pulau - pulau utama lainnya di nusantara.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold">Rp. 7.000.000</li>
            </ul>
            <div class="card-body text-center">
              <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ampat">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="Tes 2.jpg" alt="" style="width: 100%; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Gunung Bromo, Malang</h5>
              <p class="mb-0" style="color: grey;">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger di Jawa Timur Indonesia. Pasa 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold">Rp. 2.000.000</li>
            </ul>
            <div class="card-body text-center">
              <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bromo">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="Tes 3.jpg" alt="" style="width: 100%; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Tanah Lot, Bali</h5>
              <p class="mb-0" style="color: grey;">Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Disini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari Pura Dang Kahyangan.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item fw-bold">Rp. 5.000.000</li>
            </ul>
            <div class="card-body text-center">
              <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lot">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="modal fade" id="ampat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="" method="POST">
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" name="tanggal" required>
                <input type="hidden" name="tempat" value="Raja Ampat">
                <input type="hidden" name="lokasi" value="Papua">
                <input type="hidden" name="harga" value="7000000">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="booking" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="bromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="" method="POST">
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" name="tanggal" required>
                <input type="hidden" name="tempat" value="Bromo">
                <input type="hidden" name="lokasi" value="Malang">
                <input type="hidden" name="harga" value="2000000">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="booking" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="lot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="" method="POST">
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" name="tanggal" required>
                <input type="hidden" name="tempat" value="Tanah Lot">
                <input type="hidden" name="lokasi" value="Bali">
                <input type="hidden" name="harga" value="5000000">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="booking" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
  <h1>Created by</h1>
  <h4>&copy;Malik_1202194234</h4>
</footer>