<?php 

session_start();
session_destroy();

echo "<script>alert('Anda telah sukses keluar sistem [LOGOUT]')
document.location.href='../index.php'</script>";
exit();
?>