<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JualHape</title>

    <!-- favicon -->
    <link rel="icon" href="media/favicon.ico">

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="home">
    <div class="card text-center">
      <div class="card-header">
        <!--Navbar-->
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top"
        >
          <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index.php"
              >Record<span class="text-primary">JualanKU!</span></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="stock.php"
                    ><b>Stock</b></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="pembeli.php"
                  >
                    <b>Pembeli</b></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="transaksi.php"
                  >
                    <b>Transaksi</b></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
    <!--Navbar End-->
    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">JualanKU!</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">KITA MELAYANI RECORD PENJUALAN ANDA!</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="stock.php" class="btn btn-brand me-2">Tambah Stock</a>
                        <a href="pembeli.php" class="btn btn-brand me-2">Tambah Pembeli</a>
                        <a href="transaksi.php" class="btn btn-brand me-2">Tambah Transaksi</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>We love to craft digital experiances for brands rather than crap and more lorem ipsums and do crazy skills</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Awesome Services</h1>
                        <div class="line"></div>
                        <p>Melayani berbagai macam produk yang dijual dan melayani berbagai transaksi</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                          <i class="fa-solid fa-box"></i>
                        </div>
                        <h5 class="mt-4 mb-3">STOCK</h5>
                        <p>Berisi berbagai macam merk produk yang dijual</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <h5 class="mt-4 mb-3">PEMBELI</h5>
                        <p>Di dalam page pembeli terdapat daftar nama-nama pembeli handphone.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                          <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h5 class="mt-4 mb-3">TRANSAKSI</h5>
                        <p>Berisi tentang daftar transaksi yang telah dilakukan.</p>
                    </div>
                </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
              <?php
                $query2 = "SELECT COUNT(*) as jumlah FROM handphone";
                $pdo = connect();
                $statement2 = $pdo->query($query2);
                // Mengambil hasil query dan menampilkan jumlah data
                $row2 = $statement2->fetch(PDO::FETCH_ASSOC);
              ?>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4"><?php echo $row2['jumlah'] ?></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Total Stock</h6>
                </div>
                <?php
                  $query3 = "SELECT COUNT(*) as jumlah2 FROM pembeli";
                  $pdo = connect();
                  $statement3 = $pdo->query($query3);
                  // Mengambil hasil query dan menampilkan jumlah data
                  $row3 = $statement3->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4"><?php echo $row3['jumlah2'] ?></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Total Pembeli</h6>
                </div>
                <?php
                  $query4 = "SELECT COUNT(*) as jumlah3 FROM transaksi";
                  $pdo = connect();
                  $statement4 = $pdo->query($query4);
                  // Mengambil hasil query dan menampilkan jumlah data
                  $row4 = $statement4->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4"><?php echo $row4['jumlah3'] ?></h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Transaksi Berhasil</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">50+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Kurir</h6>
                </div>
            </div>
        </div>
    </section>


   <!-- Footer -->
   <footer class="text-center text-white" style="background-color: #f1f1f1;">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://twitter.com/Mustafid_mk"
            target=”_blank”
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
          ></a>
          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.instagram.com/kaisaalanaa/"
            target=”_blank”
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://github.com/Mustafid26"
            target=”_blank”
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-dark" href="#">Kaisalana</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer end -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://kit.fontawesome.com/f81734a008.js"
    crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
