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
     <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index.php"
              >Kai<span class="text-primary">SHOP!</span></a
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#location">Lokasi</a>
                    </li>
                </ul>
                <a href="login.php" class="btn btn-brand ms-lg-3">Login</a>
            </div>
        </div>
    </nav>
    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Selamat Datang!</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">DISINI PUSATNYA SMARTPHONE!</h5> 
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
                        <h1 class="display-4 fw-semibold">Kenapa Memilih KaiSHOP?</h1>
                        <div class="line"></div>
                        <div class="row">
                          <div class="col-lg-4 col-md-10 col-10">
                              <div class="about-img">
                                  <img src="media/tentang.jpeg" alt="" class="img-fluid border border-dark">
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-10 col-10 ps-lg-0 mt-md-1">
                              <div class="about-text">
                                    <p class="tentang">Toko kami adalah destinasi yang sempurna bagi para pecinta teknologi yang ingin membeli hp berkualitas tinggi dengan harga yang bersaing. <br> Kami memiliki koleksi produk yang lengkap dari berbagai merek terkenal dan memberikan pelayanan yang ramah dan profesional kepada semua pelanggan kami.<br> Kami menawarkan pengalaman belanja yang aman dan nyaman, dan berusaha untuk memberikan pelayanan yang terbaik untuk memastikan kepuasan pelanggan kami.</p>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- PRODUK -->
    <section id="produk" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Produk Unggulan Kami</h1>
                        <div class="line"></div>
                        <div class="row">
                            <div class="about-text">
                                <!-- booking -->
                                <div class="booking">
                                <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-left: 120px">
                                    <div class="col" style="width: 22%">
                                    <div class="card text-center">
                                        <img
                                        src="media/samsungs12.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        />
                                        <div class="card-body">
                                        <h2 class="card-title">Samsung S12</h2>
                                        <h5 class="card-text">Rp. 18.000.000</h5>
                                        <h5 class="card-text">Stock 999+</h5>
                                        <i>Untuk Pembelian Silahkan Login</i>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col" style="width: 22%">
                                    <div class="card text-center">
                                        <img
                                        src="media/iphonexr.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        />
                                        <div class="card-body">
                                        <h2 class="card-title">iPhone <br> XR</h2>
                                        <h5 class="card-text">Rp. 3.000.000</h5>
                                        <h5 class="card-text">Stock 999+</h5>
                                        <i>Untuk Pembelian Silahkan Login</i>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col" style="width: 22%">
                                    <div class="card text-center">
                                        <img
                                        src="media/iphonexs.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        />
                                        <div class="card-body">
                                        <h2 class="card-title">iPhone <br> XS</h2>
                                        <h5 class="card-text">Rp. 2.000.000</h5>
                                        <h5 class="card-text">Stock 999+</h5>
                                        <i>Untuk Pembelian Silahkan Login</i>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col" style="width: 22%">
                                    <div class="card text-center">
                                        <img
                                        src="media/iphone14.jpg"
                                        class="card-img-top"
                                        alt="..."
                                        />
                                        <div class="card-body">
                                        <h2 class="card-title">iPhone <br> 14</h2>
                                        <h5 class="card-text">Rp. 14.000.000</h5>
                                        <h5 class="card-text">Stock 999+</h5>
                                        <i>Untuk Pembelian Silahkan Login</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h1 class="display-4 fw-semibold">Keunggulan KaiSHOP</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                          <i class="fa-solid fa-box"></i>
                        </div>
                        <h5 class="mt-4 mb-3">STOCK MELIMPAH!</h5>
                        <p>Tenang gaperlu khawatir di toko kami akan selalu menyiadakan produk-produk terbaru dan tentunya stock akan ada selalu!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <h5 class="mt-4 mb-3">CUSTOMER SERVICE SELALU SIAP</h5>
                        <p>Customer Service kami yang siap membantu anda untuk mengatasi masalah anda saat belanja.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                          <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h5 class="mt-4 mb-3">TRANSAKSI AMAN</h5>
                        <p>Transaksi kami tentunya sangat aman dan terpercaya, jika barang tidak sesuai 100% uang kembali.</p>
                        <br>
                    </div>
                </div>
        </div>
    </section>

    <section id="location" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Lokasi</h1>
                        <div class="line"></div>
                        <p>Bagi kamu yang ingin melihat produk langsung dan pengen bayar langsung ditempat bisa langsung datang ke offline store kami!</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63315.94686166011!2d110.45588556229168!3d-7.326166594118729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a787e692c9c69%3A0xf6a53e23a0c4462c!2sSalatiga%2C%20Salatiga%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1683139323393!5m2!1sen!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
