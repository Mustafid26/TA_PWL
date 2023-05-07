<?php
// memulai sesi
session_start(); 

// menghapus semua variabel sesi
$_SESSION = array();

// menghapus cookie sesi
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();

header("Location: index.php");
exit;
?>
