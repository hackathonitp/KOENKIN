<!DOCTYPE html>
<html>
<head>
    <title>Pengaturan Profil</title>
</head>
<body>
    <h2>Ubah Profil</h2>
    <form method="post" action="pprofil.php">
        <input type="hidden" name="user_id" value="id_pengguna_di_sini">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
