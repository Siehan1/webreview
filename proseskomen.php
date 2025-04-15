<?php
include "crud.php";
// $usernamelog = $_SESSION['username'];
// $hak_akses = $_SESSION['hak_akses'];

$username = $_SESSION['username'];
$komentar= $_POST["comment"];
$judul = $_SESSION['judul'];
$id = "";
$daftar = TambahKomentar($id, $judul, $komentar, $username);

if($daftar){
    echo "<script>window.history.go(-1);</script>";
    // echo "d";
}else{
     echo "<script>alert('tidak bisa menambah komentar');window.history.go(-1);</script>";
}
?>