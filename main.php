<?php
require "inc/koneksi.php";
$koneksi = new Koneksi(); // Membuat objek koneksi
$queryanggota = $koneksi->db->query("SELECT anggota_id, anggota_name, jenis_kelamin, status_anggota, alamat_anggota, gambar_anggota FROM tb_anggota");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5"><!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat datang di WEBSITE Kawan Vespa</h1>
      <h2 class="h2main">Jangan takut di jalanan karna kita punya banyak Kawan</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->
    </div>
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
     <div class="container">

      <div class="row">
       <div class="col-xl-6 col-lg-7" data-aos="fade-right">
       <img src="layouts/img/vespa1.jpg" class="img-fluid" alt="" style="width:65%;height:500px">
         </div>
         <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Sejarah Club Vespa P01</h3>
            <p data-aos="fade-up">
            Pada tahun 2014, sebuah komunitas pecinta Vespa berdiri dengan tekad untuk membentuk sebuah klub yang tidak hanya menjadi tempat berkumpul bagi para penggemar Vespa, tetapi juga sebagai wadah untuk membantu masyarakat sekitar. Club Vespa ini lahir dari semangat solidaritas dan kebersamaan antar sesama penggemar Vespa yang memiliki minat yang sama dalam berkendara dan berbagi pengalaman.
                Dengan semangat inilah, Club Vespa menjelma menjadi tempat yang hangat bagi para pencinta Vespa untuk bertukar cerita, pengalaman, serta saling membantu dalam berbagai aktivitas.</p><br><p class="desk_main">Tujuan utama dari klub ini bukan hanya sekedar berkumpul dan berkreasi bersama, tetapi juga memberikan kontribusi positif bagi masyarakat sekitar.
                  Selaras dengan semangatnya, Club Vespa mengusung sebuah slogan yang menjadi moto hidupnya: "Jangan takut di jalanan, karena kita punya kawan". Slogan ini mencerminkan komitmen klub untuk selalu mendukung dan menjaga satu sama lain di setiap perjalanan, serta siap memberikan bantuan kepada sesama anggota dan masyarakat yang membutuhkan
            </p>
          </div>
        </div>

      </div>
</div>
</section>
      <br>
      <section id="visimisi" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h4>Visi & Misi</h4>
          <p>Visi:
Menjadi komunitas yang solid dan berkembang, menjadi tempat yang nyaman bagi para penggemar Vespa untuk berkumpul, berbagi pengalaman, dan saling mendukung satu sama lain.</p>

<p>Misi:
Membangun jaringan komunikasi yang kuat dan saling mendukung antara anggota.
Menyelenggarakan kegiatan-kegiatan berkala yang bermanfaat bagi anggota dan masyarakat sekitar.
Memberikan edukasi dan informasi terkini seputar Vespa dan dunia otomotif kepada anggota.
Menjaga dan memperkuat solidaritas antar sesama pengguna Vespa.
Berkontribusi positif dalam memajukan budaya otomotif di Indonesia.
Menjadi contoh komunitas yang berwawasan lingkungan dan berperan aktif dalam kegiatan sosial.</p>
        </div>
</div>
<br>
</section>
    </section><!-- End About Section -->
    <section id="galeri" class="">
      <div class="container">
        <h3>Galeri Club</h3>
        <div class="">
            <div class="">
                <div class="">
                <img src="layouts/img/gambar1.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title"></h4>
                        <p class="card-text text-truncate"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <br>
    </section>
     <!-- ======= Services Section ======= -->
     <section id="profil" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profile</h2>
          <p>Club vespa P01 bukan hanya sekedar club yang dibuat untuk senang-senang akan tetapi juga sebuah club kemasyarakatan dengan memegang teguh slogannya yaitu "jangan takun dijalnan karena kita punya kawan"</p>
        </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">Sewa Vespa</h4>
              <p class="description">Salah satu jasa yang ditawarkan oleh club vespa p01, dengan melaukan penyewaan dengan menkontak admin tertera</p>
            </div>
          </div>
<br>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">Gotong Royong</h4>
              <p class="description">Gotong royong dilakukan dengan sukarel, dilakukan ketika ada permohonan yang datang dengan menjelaskan apa yang perlu dilakukan atau teknis dilapangan</p>
            </div>
          </div>
          

        </div>
<br>
      </div>
    </section><!-- End Services Section -->
    <section id="data_anggota" class="data_anggota">
      <div class="container">
        <h3>Data Anggota</h3>
        <div class="row mt-5">
            <?php while($data = $queryanggota->fetch(PDO::FETCH_ASSOC)){?>
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card">
                <img src="layouts/img/<?php echo $data['gambar_anggota']; ?>" alt="" style="width: 100%; height: 300px">
                    <div class="card-body text-center">
                        <h4 class="card-title"><?php echo $data['anggota_name']; ?></h4>
                        <p class="card-text text-truncate"><?php echo $data['alamat_anggota']; ?></p>
                        <p class="card-text"><?php echo $data['status_anggota']; ?></p>
                        <a href="#" class="btn btn-light">Cek Profil</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Putrawan</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Tanjungbalai</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>putra.p01@gmail.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>08223400900</p>
              </div>

            </div>

          </div>

        </div>
        </div>
            </section>
</body>
</html>