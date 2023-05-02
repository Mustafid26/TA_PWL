<?php
require_once __DIR__ ."/function2.php"; 

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $data = ambilSatuData($id)->fetch();
}else {
  header("location: stock.php");
}

if(isset($_POST['editData'])) {
    $nama_pembeli = $_POST['nama_pembeli'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
  editData($data['id_pembeli'],$nama_pembeli,$alamat,$no_hp);
  header("location: pembeli.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JualHape</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- favicon -->
    <!-- favicon -->
    <link rel="icon" href="media/favicon.ico">
</head>

<body>
<div class="card text-center">
  <div class="card-header">
    <!--Navbar-->
    <nav
          class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top"
        >
          <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#"
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
  <div class="card-body">
    <!-- Form tambah data -->
    <div class="container-sm card col-md-8 mt-5">
        <div class="card-header">
            Edit Stock
        </div>
        <div class="card-body">
            <!-- Start Form -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label for = "nama_pembeli" class="form-label">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli" value="<?php echo $data['nama_pembeli'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for = "alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value= "<?php echo $data['alamat'] ?>"required>
                </div>
                <div class="mb-3">
                    <label for = "no_hp" class="form-label">No Handphone</label>
                    <input type="number" name="no_hp" class="form-control" id="no_hp" value= "<?php echo $data['no_hp'] ?>"required>
                </div>
                <button type="submit" name="editData" class="btn btn-primary">Edit</button>
            </form>
            <!-- End Form -->
        </div>
    </div>
  </div>
    <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script
    src="https://kit.fontawesome.com/f81734a008.js"
    crossorigin="anonymous"
    ></script>
</body>

</html