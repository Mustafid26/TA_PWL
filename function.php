<?php
require_once __DIR__ . "/koneksi.php";

function ambilData(){
    $connect = connect();
    $sql = "SELECT * FROM `handphone`";
    $result = $connect->query($sql);

    return $result;
}
function ambilSatuData($id){
    $connect = connect();
    $sql = "SELECT * FROM `handphone` WHERE id_hp =  $id";
    $result = $connect->query($sql);

    return $result;
}
function tambahData($merk,$harga_hp,$spesifikasi,$kondisi){
    $connect = connect();
    $sql = "INSERT INTO `handphone`(`merk`, `harga_hp`, `spesifikasi`, `kondisi`)  VALUES ('$merk','$harga_hp','$spesifikasi','$kondisi')";
    $result = $connect->exec($sql);

    return $result;
}
function editData($id,$merk,$harga_hp,$spesifikasi,$kondisi){
    $connect = connect();
    $sql = "UPDATE `handphone` SET `merk`='$merk', `harga_hp`='$harga_hp', `spesifikasi`='$spesifikasi',`kondisi`='$kondisi' WHERE id_hp = $id";
    $result = $connect->exec($sql);

    return $result;
}
function hapusData($id){
    $connect = connect();
    $sql = "DELETE FROM `handphone` WHERE id_hp = $id";
    $result = $connect->exec($sql);

    return $result;
}
?>