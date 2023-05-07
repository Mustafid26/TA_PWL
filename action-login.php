<?php
include("koneksi.php");
session_start();
$username = "";
$password = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from login where username = '".$username."' AND password = '".$password."' ";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($result);
    if(isset($row) && $row["usertype"]=="user"){
        $_SESSION["username"]=$username;
        header("location: index-login.php");
    }else {
        ?>
        <script>
            alert("Username/password anda salah!");
            window.location='login.php';
        </script>
        <?php
    }    
}
?>