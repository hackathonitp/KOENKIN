
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Daftar</title>

</head>
<body>
   <div class="box">
   <a href="Home">
      <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" fill="currentColor" class="bi bi-arrow-left-circle-fill bulek" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
      </a>
    <div class="container">
        

<form action="../registration.php" method="post">


    <div class= "top">
        <header>Daftar</header>
    </div>

    <div class="input-field">
        <input type="text" class="input" placeholder="Nama anda" id="nama" name="nama">
        <i class='bx bx-user' ></i>
    </div>

    <div class="input-field">
        <input type="text" class="input" placeholder="Email anda" id="email" name="email">
        <i class='bx bx-lock-alt'></i>
    </div>

    <div class="input-field">
        <input type="text" class="input" placeholder="Nama Pengguna" id="username" name="username">
        <i class='bx bx-user' ></i>
    </div>



    <div class="input-field">
        <input type="Password" class="input" placeholder="Kata sandi" id="password" name="password">
        <i class='bx bx-lock-alt'></i>
    </div>

    <div class="input-field login">
        <input type="submit" class="daftar" value="Daftar" id="btn-daftar" name="register">
    </div>

    <div class="two-col opsi">
        <div class="one">
        <label><a href="#">Lupa kata sandi?</a></label>
        </div>
        <div class="two">
        <a class="nanya" href="masuk.php">Sudah punya akun?</a>
        </div>


    </div>
</form>

    </div>
</div>  
</body>
</html>