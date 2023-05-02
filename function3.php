<?php
require_once __DIR__ . "/koneksi.php";

function ambilData(){
    $connect = connect();
    $sql = "SELECT * FROM transaksi
    INNER JOIN pembeli ON transaksi.id_pembeli = pembeli.id_pembeli
    INNER JOIN handphone ON transaksi.id_hp = handphone.id_hp";
    $result = $connect->query($sql);
    return $result;
}
function ambilSatuData($id){
    $connect = connect();
    $sql = "SELECT * FROM `transaksi` WHERE id_transaksi =  $id";
    $result = $connect->query($sql);
    return $result;
}
function tambahData($tanggal,$id_pembeli,$id_hp){
    $connect = connect();
    $sql = "INSERT INTO `transaksi`(`tanggal`, `id_pembeli`, `id_hp`)  VALUES ('$tanggal','$id_pembeli','$id_hp')";
    $result = $connect->exec($sql);
    return $result;
}
function hapusData($id){
    $connect = connect();
    $sql = "DELETE FROM `transaksi` WHERE id_transaksi = $id";
    $result = $connect->exec($sql);

    return $result;
}
?>