<?php
include("_functions.php");
$conn = dbconn();

$sql = "SELECT * from artikel";
$result = mysqli_query($conn, $sql);

// fetch all articles
$artikel = mysqli_fetch_all($result, MYSQLI_ASSOC);

//fetch video
$sql2 = "SELECT * from video";
$result2 = mysqli_query($conn, $sql2);

// fetch all video
$video = mysqli_fetch_all($result2, MYSQLI_ASSOC);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />

  <!---Judul, icon dan link CSS-->
  <title>Kucing Gimoy</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="img/Logo Kucing Gimoy/head.png" />
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">


  <!--Accessibility (template)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <!--Menu-->
  <nav class="navbar bg-warning-subtle text-warning-emphasis py-3">
    <div class="container-fluid">
      <a class="navbar-brand mx-4" href="#">
        <img src="img/Logo Kucing Gimoy/logo.png" alt="Logo" style="width:60px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navmenu" class="collapse navbar-collapse pt-5">
        <div class="container">
          <h2>Cari <span style="font-weight: bold;" class="text-warning">Artikel</span> Pilihanmu!</h2>
          <p>Masukkan judul artikel yang ingin kamu cari disini:</p>
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Judul Artikel</th>
                <th>Link Artikel</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php
              $first = true;
              foreach ($artikel as $index => $article) :
              ?>
                <tr>
                  <a>
                    <td><?php echo $article['judul']; ?></td>
                    <td><a target="_blank" class="my-3 btn btn-warning text-light" href="<?php echo $article['link']; ?>" role="button">Baca Lebih!</a></td>
                  </a>
                </tr>
              <?php
                $first = false;
              endforeach;
              ?>
            </tbody>
          </table>

          <p>Artikel yang kamu cari tidak ada :( ? Hubungi kami! </p>
        </div>

        <script>
          $(document).ready(function() {
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>
      </div>
    </div>
  </nav>

  <!--Carousel-->
  <section id="carousel">
    <div class="container py-5 col-lg-8">
      <div class="pb-sm-4 text-center text-warning-emphasis">
        <h2 style="font-weight: bold;">Artikel <span class="text-warning">Kucing!</span></h2>
      </div>
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="card mb-3">
              <img src="https://images.tokopedia.net/img/KRMmCm/2022/10/3/0a703908-0216-4b05-a79e-70f3911c0d3d.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.tokopedia.com/blog/makanan-berbahaya-untuk-kucing-hbl/?utm_source=google&utm_medium=organic#:~:text=Selain%20karena%20mengandung%20kafein%2C%20cokelat,memberikan%20cokelat%20pada%20kucingmu%2C%20ya!">
                  <h5 style="font-weight: 700;" class="card-title">15 Makanan yang Tidak Boleh Dimakan <span class="text-warning">Kucing</span>, Bahaya!</h5>
                  <p style="font-weight: 400;" class="card-text">Banyak yang beranggapan jika kucing boleh diberi makan apa saja, terutama saat kucing menerima begitu saja makanan yang diberikan oleh manusia. Namun, faktanya kucing tidak boleh diberi makanan sembarangan agar kesehatannya tetap terjaga.</p>
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card mb-3">
              <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.liputan6.com/citizen6/read/4503092/8-alasan-memelihara-kucing-baik-untuk-kesehatanmu?page=2">
                <img src="https://cdn1-production-images-kly.akamaized.net/y5E-nFn2wlk7MwRobhbBGUHlS28=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3315302/original/005575500_1607063948-pexels-kelvin-valerio-617278.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 style="font-weight: 700;" class="card-title">8 Alasan Memelihara <span class="text-warning">Kucing</span> Baik untuk Kesehatanmu</h5>
                  <p class="card-text">Kucing selalu digambarkan sebagai hewan peliharaan yang cuek dengan pemiliknya, dan hanya benar-benar peduli pada dirinya sendiri.</p>
              </a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card mb-3">
            <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.idntimes.com/hype/fun-fact/dwi-kurniawati-lestari/7-fakta-unik-rusty-spotted-cat-ras-kucing-terkecil-di-asia-c1c2?page=all">
              <img src="https://cdn.idntimes.com/content-images/community/2019/02/q-3-55bb5e130813ba57cb5e70f53bfa7947.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 style="font-weight: 700;" class="card-title">7 Fakta Unik Rusty-Spotted Cat, Ras <span class="text-warning">Kucing</span> Terkecil di Asia </h5>
                <p class="card-text">Hewan lucu yang satu ini sudah hidup bersama dengan manusia sejak 6000 tahun SM, dan mulai dimanfaatkan sebagai pengusir tikus pada tahun 3500 SM di Mesir Kuno.</p>
            </a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card mb-3">
          <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.greenmatters.com/pets/can-sand-cats-be-pets">
            <img src="https://media.greenmatters.com/brand-img/IR0k6kDwV/1600x838/can-sand-cats-be-pets-1-1686074776394.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 style="font-weight: 700;" class="card-title">Bisakah <span class="text-warning">Kucing</span> Pasir Menjadi Hewan Peliharaan? Yang Perlu Diketahui Tentang Kucing Menggemaskan Ini</h5>
              <p class="card-text">Kucing pasir, yang berasal dari gurun di sebagian Afrika dan Asia, adalah hewan cantik yang terbiasa hidup di alam liar.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card mb-3">
          <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.merdeka.com/gaya/sudah-tahu-belum-kalau-13-makanan-ini-bisa-dimakan-kucing-14525-mvk.html">
            <img src="img/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 style="font-weight: bold;" class="card-title">Sudah tahu belum kalau 13 makanan ini bisa dimakan <span class="text-warning">kucing</span>?</h5>
              <p class="card-text">Kucing merupakan salah satu hewan peliharaan yang memiliki selera makan yang khas.</p>
          </a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card mb-3">
        <a target="_blank" class="text-warning-emphasis text-decoration-none text-black" href="https://www.gramedia.com/literasi/ciri-kucing-sakit/">
          <img src="https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/09/07174220/ezgif.com-gif-maker-2021-07-07T132731.026-1280x720-1.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 style="font-weight: 700;" class="card-title">20+ Ciri-ciri <span class="text-warning">Kucing</span> Sakit dan Cara Mangatasinya</h5>
            <p class="card-text">Ciri-ciri kucing sakit dapat kita kenali dari berbagai macam faktor, mulai dari perubahan penampilan, perilaku, aktivitas sampai kemampuannya dalam bersosialisasi.</p>
        </a>

      </div>
    </div>
    </div>

    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>

    </div>
  </section>

  <!-- pembatas liar -->
  <div class="p-3 bg-warning-subtle text-warning-emphasis rounded text-center">
    <h1 style="font-weight: 700;"><span class="text-warning">Kucing</span> di Alam Liar</h1>
    <p style="font-weight: 600;">Walaupun kucing adalah hewan yang kecil dan gemoy mereka tetap hewan liar tersukses di alam</p>
  </div>

  <!-- Kucing Hutan -->
  <section id="hutan" class="section bg-white text-success p-4">
    <div class="container">
      <div class="">
        <div class="pb-sm-2 text-center">
          <h2 style="font-weight: 700;"><span class="text-warning">Kucing</span> Hutan</h2>
        </div>
        <div class="row">
          <?php
          $first = true;
          foreach ($video as $index => $v) :
            if ($v['link_k_id'] != 1) {
              continue;
            }
          ?>
            <div class="col-lg-12 p-3">
              <div class="card bg-dark text-white">
                <iframe height="420" src="<?php echo $v['link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>

          <?php
          $first = true;
          foreach ($artikel as $index => $article) :
            if ($article['artikel_k_id'] != 1) {
              continue;
            }
          ?>
            <div class="col-lg-5">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php echo $article['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a target="_blank" id="animated" class="text-decoration-none text-black" href="<?php echo $article['link']; ?>">
                        <h5 style="font-weight: 700;" class="card-title text-success"><?php echo $article['judul']; ?></h5>
                        <p class="card-text text-warning-emphasis"><?php echo $article['subjudul']; ?></p>
                      </a>
                      <a target="_blank" class="my-3 btn btn-success" href="<?php echo $article['link']; ?>" role="button">Baca Lebih!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Kucing Gurun -->
  <section id="gurun" class="section bg-white p-4">
    <div class="container">
      <div class="">
        <div class="pb-sm-2 text-center">
          <h2 style="font-weight: 700;" class="text-warning">Kucing Gurun</h2>
        </div>
        <div class="row">
          <?php
          $first = true;
          foreach ($video as $index => $v) :
            if ($v['link_k_id'] != 2) {
              continue;
            }
          ?>
            <div class="col-lg-12 p-3">
              <div class="card bg-dark text-white">
                <iframe height="420" src="<?php echo $v['link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>

          <?php
          $first = true;
          foreach ($artikel as $index => $article) :
            if ($article['artikel_k_id'] != 2) {
              continue;
            }
          ?>
            <div class="col-lg-5">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php echo $article['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a id="animated" target="_blank" class="text-decoration-none text-warning-emphasis" href="<?php echo $article['link']; ?>">
                        <h5 style="font-weight: 700;" class="card-title text-warning"><?php echo $article['judul']; ?></h5>
                        <p class="card-text"><?php echo $article['subjudul']; ?></p>
                      </a>
                      <a class="my-3 btn btn-warning" href="<?php echo $article['link']; ?>" role="button">Baca Lebih!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Kucing Gunung Bersalju -->
  <section id="salju" class="section bg-white text-info p-4">
    <div class="container">
      <div class="">
        <div class="pb-sm-2 text-center">
          <h2 style="font-weight: 700;"><span class="text-warning">Kucing</span> Gunung Bersalju</h2>
        </div>
        <div class="row">
          <?php
          $first = true;
          foreach ($video as $index => $v) :
            if ($v['link_k_id'] != 3) {
              continue;
            }
          ?>
            <div class="col-lg-12 p-3">
              <div class="card bg-dark text-white">
                <iframe height="420" src="<?php echo $v['link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>

          <?php
          $first = true;
          foreach ($artikel as $index => $article) :
            if ($article['artikel_k_id'] != 3) {
              continue;
            }
          ?>
            <div class="col-lg-5">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php echo $article['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a id="animated" target="_blank" class="text-decoration-none text-warning-emphasis" href="<?php echo $article['link']; ?>">
                        <h5 style="font-weight: 700;" class="card-title text-info"><?php echo $article['judul']; ?></h5>
                        <p class="card-text"><?php echo $article['subjudul']; ?></p>
                      </a>
                      <a target="_blank" class="my-3 btn btn-info text-light" href="<?php echo $article['link']; ?>" role="button">Baca Lebih!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- pembatas jinak -->
  <div class="p-3 bg-warning-subtle text-warning-emphasis rounded text-center">
    <h1 style="font-weight: 700;"><span class="text-warning">Kucing</span> di Rumah</h1>
    <p style="font-weight: 600;">Setelah menerima manusia sebagai temannya, kucing menjadi aslah satu hewan ter-gemoy untuk dipelihara</p>
  </div>

  <!--Info Kucing-->
  <section id="fakta" class="section text-warning p-4">
    <div class="container">
      <div class="">
        <div class="pb-sm-2 text-center text-white">
          <h2 style="font-weight: 700;">Fakta Kucing</h2>
        </div>
        <div class="row">
          <?php
          $first = true;
          foreach ($artikel as $index => $article) :
            if ($article['artikel_k_id'] != 4) {
              continue;
            }
          ?>
            <div class="col-md-6 py-3 align-items-center">
              <div class="card">
                <img src="<?php echo $article['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 style="font-weight: 700;" class="card-title"><?php echo $article['judul']; ?></h5>
                  <p class="card-text"><?php echo $article['subjudul']; ?></p>
                  <a target="_blank" href="<?php echo $article['link']; ?>" class="btn btn-outline-warning">Baca Lebih!</a>
                </div>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Pelihara Kucing -->
  <section id="pelihara" class="section text-success p-4">
    <div class="container">
      <div class="">
        <div class="pb-sm-2 text-center text-warning">
          <h2 style="font-weight: 700;">Memelihara Kucing</h2>
        </div>
        <div class="row">
          <?php
          $first = true;
          foreach ($artikel as $index => $article) :
            if ($article['artikel_k_id'] != 5) {
              continue;
            }
          ?>
            <div class="col-md-6 py-3 align-items-center">
              <div class="card">
                <img src="<?php echo $article['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 style="font-weight: 700;" class="card-title"><?php echo $article['judul']; ?></h5>
                  <p class="card-text"><?php echo $article['subjudul']; ?></p>
                  <a target="_blank" href="<?php echo $article['link']; ?>" class="btn btn-warning text-white">Baca Lebih!</a>
                </div>
              </div>
            </div>
          <?php
            $first = false;
          endforeach;
          ?>
        </div>
      </div>
    </div>
  </section>



  <!-- footer -->
  <footer class="p-5 bg-warning-subtle text-warning-emphasis text-center position-relative">
    <div class="container">
      <p class="lead">Tugas Pemrograman Web Jurusan Teknik Informatika ITS 2023</p>
      <p class="lead">5025221191, Ahmad Fatih Ramadhani. dosen: Imam Kuswardayan, S.Kom, M.T</p>
      <a href="#" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1 text-warning"></i>
      </a>
    </div>
  </footer>
</body>

</html>