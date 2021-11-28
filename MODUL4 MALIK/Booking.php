<?php
session_start();
include_once('Config.php');
$id = $_SESSION['id'];
$select = mysqli_query($conn, "SELECT * FROM Booking WHERE user_id = '$id'");
$nav = 'Black';
if (isset($_COOKIE['nav'])) {
    $nav = $_COOKIE['nav'];
}
if (isset($_GET['id'])) {
    $idbooking = $_GET['id'];
    mysqli_query($conn, "DELETE FROM Booking WHERE id = '$idbooking'");
    $_SESSION['message'] = "Berhasil Hapus";
    header("location: Booking.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container justify-content-center align-items-center d-flex flex-column">
        <div class="card" style="width: 100%;">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Tempat</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Tanggal Perjalanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $harga = 0;
                        $no = 1;
                        while ($selects = mysqli_fetch_array($select)) :
                            $harga = $harga + (int)$selects['harga'];

                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $selects['nama_tempat'] ?></td>
                                <td><?= $selects['lokasi'] ?></td>
                                <td><?= $selects['tanggal'] ?></td>
                                <td><?= $selects['harga'] ?></td>
                                <td><a class="btn btn-danger" href="Booking.php?id=<?= $selects['id'] ?>">Hapus</a></td>
                            </tr>
                        <?php endwhile; ?>
                        <tr>
                            <th scope="col" colspan="4">Total</th>
                            <td colspan="2" class='fw-bold'><?= $harga ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
    <h1>Created by</h1>
    <h4>&copy;Malik_1202194234</h4>
</footer>