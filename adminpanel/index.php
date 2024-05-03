<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Club Vespa P01</title>
    <link rel="shortcut icon" href="" type="image/x-icon"> 
    
    <link rel="stylesheet" href="../layouts/css/css/bootstrap.min.css">
        <script src="../layouts/css/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<aside>

<header>
      <img src="" class="brand">
      <div class="user">Admin Panel</div>
</header>

<nav>
      <ul>
            <li>
                  <a href="index.php?hal=anggota_tampil">Data Anggota</a>
            </li>
            </li>
                        <li class="">
                        <a class="" href="logout.php">Log Out</a>
                        </li>
                        <li class="">
                        <a class="" href="../index.php">Masuk Ke Halaman Tampil</a>
                        </li>
      </ul>
</nav>

</aside>

<main>
                  <section class="main.section">
                        <?php if (isset($_GET['hal'])) {
                              require $_GET ['hal'] . '.php';
                        } else {
                              require "main.php";
                        }
                         ?>
                  </section>
            </main>

</body>
</html>