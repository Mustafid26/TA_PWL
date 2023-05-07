<?php 
include("koneksi.php");
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit();
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
     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index-login.php"
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
                        <a class="nav-link" href="index-login.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status.php">Status</a>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-brand ms-lg-3">Logout</a>
            </div>
        </div>
      </nav>
      </div>
      <br>
      <br>
      <br>
        <!-- table data -->
        <div class="container-sm card mt-5 col-md-8 mb-5">
          <div class="card-body">
            <!-- table bootstrap -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Produk</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $no = 1;
                  $total_harga = 0;
                  $tampil = mysqli_query($koneksi, "SELECT * FROM transaksi 
                  INNER JOIN handphone ON transaksi.id_hp = handphone.id_hp ") or die (mysqli_error($koneksi));
                  $jumlah_data = mysqli_num_rows($tampil);
                  while($data = mysqli_fetch_array($tampil)) :
                    $harga_hp = $data['harga_hp'];
                    // menghitung total harga sewa berdasarkan durasi dan harga sewa per hari
                    
                    // Hitung total harga
                    $total_harga += $harga_hp;
                ?>
                  <th scope="row"><?=$no++;?></th>
                  <td><?=$data['merk']?></td>
                  <td>Rp. <?=number_format ($data['harga_hp'],0,',','.')?></td>
                  <td><?=$data['status']?></td>
                  <td>
                    <a
                    href="del.php?id=<?=$data['id_transaksi']?>"
                    onclick="return confirm('Apakah anda yakin ingin menghapus barang ini?')"
                    class="btn btn-danger"
                    ><i class="fa-solid fa-trash"></i></a>
                  </td>
              </tr>
              <?php endwhile; ?>
              </tbody>
              <?php
              if($jumlah_data >0) {
              echo '<tfoot>
                <tr>
                  <th colspan="2">Total Harga</th>
                  <th>Rp ' . number_format($total_harga, 0, ',', '.') . ' </th>
                  <th colspan="2"></th>
                </tr>
              </tfoot>';
              }
              ?>
            </table>
                  <?php
                    if($jumlah_data > 0){
                      echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Bayar
                      </button>';
                    }
                  ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Silahkan Pilih Metode Pembayaran Anda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="bayar.php" method="post" enctype="multipart/form-data">
                          <label for="">Metode Pembayaran</label>
                          <select class="form-select" name="bank" id="">
                            <option value="">-PILIH-</option>
                            <?php 
                            $tampil = mysqli_query($koneksi, "SELECT * FROM metodepembayaran ") or die (mysqli_error($koneksi));
                            while($data = mysqli_fetch_array($tampil)){
                              echo "<option value = $data[id_pembayaran] > $data[bank] Rek/No : $data[pembayaran] </option>";
                            }
                            ?>
                          </select>
                          <br>
                          <div class="mb-3">
                              <label class="form-label">Bukti Pembayaran</label>
                              <input type="file" name="xgambar" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Total</label>
                              <?php
                              echo'
                              <input type="number" class="form-control" placeholder = "Rp ' . number_format($total_harga, 0, ',', '.') . ' " readonly>'
                              ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submit" value ="Submit" class="btn btn-primary">
                        </div>
                    </form> 
                </div>
              </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
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
