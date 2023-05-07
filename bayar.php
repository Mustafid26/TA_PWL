<?php
include("koneksi.php");
if(isset($_POST['submit'])){
  $id_pembayaran = $_POST['bank'];
  //direktori simpan foto bukti
  $direktori      = "bukti/";
  $file_name      = $_FILES['xgambar']['name'];
  //memindahkan inputan foto ke dalam direktori
  move_uploaded_file($_FILES['xgambar']['tmp_name'],$direktori.$file_name);
  // memasukkan data ke dalam database
  $simpan = mysqli_query($koneksi, "INSERT INTO bayar (id_pembayaran, gambar) VALUES ('$id_pembayaran','$file_name')");
  if($simpan){
    ?>
    <script>
        alert("Pembayaran Anda berhasil dikirim, silahkan tunggu 1x24 jam untuk terverifikasi!");
        window.location='status.php';
    </script>
    <?php
  }
}
?>