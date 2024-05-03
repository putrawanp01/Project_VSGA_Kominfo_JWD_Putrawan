 
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Club Motor</title>
        <link rel="stylesheet" href="layouts/css/css/bootstrap.min.css">
        <script src="layouts/css/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="layouts/img/icon_vespa.ico" type="image/x-icon">

        
    </head>
    <body>
        <header class="container mb-4">
                <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid mt-2">
                    <a class="navbar-brand " href="index.php">
                    <img src="layouts/img/icon_vespa.ico" style="width:60px;" class="rounded-pill"> 
                    Kawan Vespa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">Sejarah Club</a></li>
                            <li><a class="dropdown-item" href="#visimisi">Visi & Misi</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#profil">Profile</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="#galeri">Gallery Club</a>
                        </li>  
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Anggota & Clien</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#data_anggota">Data Anggota</a></li>
                            <li><a class="dropdown-item" href="#">Data Clien</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </ul>
                    </div>
                </div>
                </nav>

        </header>
        
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

            <footer>
                  Copyright &copy; 2024. Designed by Mr. Putrawan &#10004;
            </footer>
    </body>
    </html>