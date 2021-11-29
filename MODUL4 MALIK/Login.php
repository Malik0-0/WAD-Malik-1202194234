    <?php
    session_stop();
    $nav = 'Black';
    if (isset($_COOKIE['nav'])) {
        $nav = $_COOKIE['nav'];
    }
    include_once('Config.php');
    if (isset($_POST['login'])) {
        logout($_POST);
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
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['registered'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php unset($_SESSION['registered']);
        endif;  ?>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow p-3">
                        <div class="container">
                            <h4 class="card-title text-center mt-4 pb-2">Login</h4>
                            <hr>
                            <div class="card-boddy pt-0">
                                <form action="" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input required type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberme" name='rememberme'>
                                            <label class="form-check-label" for="rememberme">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center pt-2">
                                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                                        <p class="mt-3">Belum punya akun? <a href="Register.php" class="text-secondary">Registrasi</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    <footer class="d-flex flex-column align-items-center justify-content-center" style="background-color: darkgray; height: 500px;margin-top: 250px;">
        <h1>Created by</h1>
        <h4>&copy;Malik_1202194234</h4>
    </footer>
