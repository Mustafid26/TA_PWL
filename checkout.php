<?php 
include("koneksi.php"); 

if(isset($_POST['tambahData'])) {
  $id_hp = $_POST['merk'];
  $nama_pembeli = $_POST['nama_pembeli'];
  $alamat = $_POST['alamat'];
  $simpan = mysqli_query($koneksi, "INSERT INTO transaksi (nama_pembeli, alamat, id_hp) VALUES ('$nama_pembeli','$alamat','$id_hp')");
  if($simpan){
    ?>
      <script>
      alert('Barang berhasil Dicheckout silahkan cek di halaman checkout');
      window.location='checkout.php';
      </script>
    <?php
  }

}
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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="produk.php"
                    ><b>Produk</b></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase"
                    aria-current="page"
                    href="checkout.php"
                  >
                    <b>Checkout</b></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-uppercase active"
                    aria-current="page"
                    href="status.php"
                  >
                    <b>Status</b></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--Navbar End-->
      </div>
      <br>
      <br>
      <br>
      <div class="container-sm card col-md-8 mt-5">
        <div class="card-header">
            Form Pembelian
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form action="" method="POST" enctype="multipart/form-data">
                 <div class="mb-3">
                    <label class="form-label">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="mb-3">
                        <label for="merk">Merk</label>
                        <select name="merk" class="form-select" aria-label="Default select example">
                          <option value="">-Pilih-</option>
                          <?php
                          $query = mysqli_query($koneksi, "SELECT * FROM handphone");
                          while($data = mysqli_fetch_array($query)){
                              $harga_format = number_format ($data['harga_hp'],0,',','.');
                              echo "<option value = $data[id_hp] > $data[merk] Rp . $harga_format </option>";
                          }
                          ?>
                        </select>
                </div>
                <input type="submit" name="tambahData" value ="Submit" class="btn btn-primary">
        </form>
        <!-- End Form -->
        </div>
    </div>
    <br><br><br><br><br>
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
