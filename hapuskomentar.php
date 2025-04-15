<?php
include 'crud.php';

$id = $_GET['id'];

$hapus = HapusKomentar($id);
if($hapus){
    echo "<script>window.history.go(-1);</script>";
}else{
     echo "<script>alert('tidak bisa menghapus komentar');window.history.go(-1);</script>";
}
?>