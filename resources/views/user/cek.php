<?php
include "../config/koneksi.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usern = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $login = mysqli_query($conn, "SELECT * FROM login WHERE username='$usern' AND password='$pass'")
        or die(mysqli_error($conn));

    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        session_start();

        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['namauser'] = $r['nama_user'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['password'] = $r['password'];

        header('location:../index2.php');
    } else {
        echo "<script>alert('password atau username salah, silahkan coba lagi..!!');</script>";
        header('Location: masuk.php');
    }
}
?>
