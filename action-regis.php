<?php
include("koneksi.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username   = $_POST['username'];
    $password    = $_POST['password'];
    // memasukkan data ke dalam database
    $simpan = mysqli_query($koneksi, "INSERT INTO login (username, password) VALUES ('$username','$password')");
    if($simpan){
        ?>
        <script>
            alert("Berhasil Register Silahkan Login Kembali");
            window.location='login.php';
        </script>
        <?php
    }
}
?>