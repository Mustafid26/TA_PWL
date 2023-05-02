<?php
require_once __DIR__ . "/koneksi.php";

function ambilData(){
    $connect = connect();
    $sql = "SELECT * FROM `pembeli`";
    $result = $connect->query($sql);

    return $result;
}
function ambilSatuData($id){
    $connect = connect();
    $sql = "SELECT * FROM `pembeli` WHERE id_pembeli =  $id";
    $result = $connect->query($sql);

    return $result;
}
function tambahData($nama_pembeli,$alamat,$no_hp){
    $connect = connect();
    $sql = "INSERT INTO `pembeli`(`nama_pembeli`, `alamat`, `no_hp`)  VALUES ('$nama_pembeli','$alamat','$no_hp')";
    $result = $connect->exec($sql);

    return $result;
}
function editData($id,$nama_pembeli,$alamat,$no_hp){
    $connect = connect();
    $sql = "UPDATE `pembeli` SET `nama_pembeli`='$nama_pembeli',`alamat`='$alamat', `no_hp`='$no_hp' WHERE id_pembeli = $id";
    $result = $connect->exec($sql);

    return $result;
}
function hapusData($id){
    $connect = connect();
    $sql = "DELETE FROM `pembeli` WHERE id_pembeli = $id";
    $result = $connect->exec($sql);

    return $result;
}
?>