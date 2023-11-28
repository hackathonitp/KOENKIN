<?php
include("../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid']; 
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET nama=?, email=?, username=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssi", $nama, $email, $username, $password, $userid);

    if ($stmt->execute()) {
        echo "Profil berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
