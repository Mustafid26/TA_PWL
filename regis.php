<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaiSHOP!</title> 
    <link rel="stylesheet" href="css/style_regis.css">
    <!-- favicon -->
    <link rel="icon" href="media/favicon.ico">
   </head>
<body>
  <div class="wrapper">
    <h2>Registrasi</h2>
    <form action="action-regis.php" method="post">
      <div class="input-box">
        <input type="text" name="username" placeholder="Buat Username" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Buat Password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Daftar">
      </div>
      <div class="text">
        <h3>Sudah Punya Akun? <a href="login.php">Masuk Sekarang</a></h3>
      </div>
    </form>
  </div>
</body>
</html>