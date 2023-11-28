<?php
session_start();
if (!isset($_SESSION['username'])) {
    // header('Location: ../../login.php');
    echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini')
    document.location.href='../user/masuk.php'</script>";
    
    exit();
}
?>