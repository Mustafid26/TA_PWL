<?php
include ("koneksi.php");
mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi = '$_GET[id]'") or die (mysqli_error($koneksi));
echo "<script>window.location='status.php';</script>"; 
?>