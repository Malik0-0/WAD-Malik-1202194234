<?php
if (!isset($_SESSION)) {
    session_start();
}

$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
    echo "<script>
            alert('Failed Connect into Database')'
            </script>";
}


function registrasi($request)
{
    global $conn;
    $nama = $request['nama'];
    $email = $request['email'];
    $nohp = $request['nomorhp'];
    $password = mysqli_real_escape_string($conn, $request['password']);
    $passwordconfirm = mysqli_real_escape_string($conn, $request['passwordconfirm']);

    $emailcheck ="SELECT email FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $emailcheck);

    if (!mysqli_fetch_assoc($select)) {
        if ($password == $passwordconfirm) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user VALUES ('','$nama', '$email', '$password', '$nohp')";
            mysqli_query($conn, $query);

            $_SESSION['registered'] = 'Berhasil registrasi, silahkan login';

            header("Location: login.php");
            exit();
        }
    }
    $_SESSION['message'] = 'Email anda sudah pernah terdaftar!';

    header("Location: login.php");
    exit();
}

function Login($request)
{
    global $conn;
    
    $email = $request['email'];
    $password = $request['password'];

    $emailcheck ="SELECT * FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $emailcheck);

    if (mysqli_num_rows($select) == 1) {
        $result =mysqli_fetch_assoc($select);
        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];

            $_SESSION['message'] = "Berhasil Login";
            
            if (isset($_POST['rememberme'])) {
                setcookie('email', $email, strtotime('+3 days'), '/');
                setcookie('password', $password, strtotime('+3 days'), '/');
            }
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = "Password Salah";
            header("Location: Login.php");
            exit();
        }
        }
    $_SESSION['message'] = 'Gagal Login';

    header("Location: login.php");
    exit();
}
