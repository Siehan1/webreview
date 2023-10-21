<?php
include('crud.php');
$username=$_POST['username'];
$password=$_POST['password'];
if(otentikasi($username, $password)){
    //set variabel sesion
    $_SESSION['username']=$username;
    $dataUser=array();//deklarasi array
    $dataUser=cariUserDariUsername($username);
    $_SESSION['namauser'] = $dataUser['nama'];
    $_SESSION['role'] = $dataUser['level'];
    if($_SESSION['role'] == 1){
        header('location:Dashboard/examples/dashboard.php');
    }else{
        header("location:index.php");
    }
}else{
    header("location:login.php?error");
}
?>