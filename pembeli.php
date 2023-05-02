<?php
require_once __DIR__ . "/function2.php";  

if(isset($_POST['tambahData'])) {
  $nama_pembeli = $_POST['nama_pembeli'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  
  tambahData($nama_pembeli,$alamat,$no_hp);
  header("location: pembeli.php");
}
if(isset($_GET['id'])){
  $id = $_GET['id'];

  hapusData($id);
  header("location: pembeli.php");
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
                    class="nav-link text-uppercase"
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
        <!--Navbar End-->
      </div>
      <br>
      <br>
      <br>
      
      <div class="card-body">
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Tambah Data Pembeli
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data Pembeli</h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <!-- Form tambah data -->
                <div class="container-sm card col-md-10 mt-5">
                  <div class="card-header">Masukkan Data Pembeli</div>
                  <div class="card-body">
                    <!-- Start Form -->
                    <form action="" method="POST">
                      <div class="mb-3">
                        <label class="form-label">Nama Pembeli</label>
                        <input
                          type="text"
                          name="nama_pembeli"
                          class="form-control"
                          id="nama_pembeli"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input
                          type="text"
                          name="alamat"
                          class="form-control"
                          id="alamat"
                          required
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">No Hp</label>
                        <input
                          type="text"
                          name="no_hp"
                          class="form-control"
                          id="no_hp"
                          value="+62"
                          maxlength="12"  
                          required
                        />
                      </div>
                      <button
                        type="submit"
                        name="tambahData"
                        class="btn btn-primary mb-3"
                      >
                        Submit
                      </button>
                    </form>
                    <!-- End Form -->
                  </div>
                </div>

                <!-- End Form tambah data -->
              </div>
            </div>
          </div>
        </div>
        <!-- table data -->
        <div class="container-sm card mt-5 col-md-8">
          <div class="card-body">
            <!-- table bootstrap -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama Pembeli</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No Hp</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $nomor = 1; 
                    foreach(ambilData() as $data) { ?>
                <tr>
                  <th scope="row"><?php echo $nomor++ ?></th>
                  <td><?php echo$data['nama_pembeli'] ?></td>
                  <td><?php echo$data['alamat'] ?></td>
                  <td>+62<?php echo$data['no_hp'] ?></td>
                  <td>
                    <a
                      href="editpembeli.php?id=<?php echo $data['id_pembeli'] ?>"
                      class="btn btn-primary"
                      >Edit</a
                    >
                    <a
                      href="?id=<?php echo $data['id_pembeli'] ?>"
                      onclick="return confirm ('Yakin ingin menghapus?')"
                      type="button"
                      class="btn btn-danger"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end table data -->
      </div>
    </div>
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
