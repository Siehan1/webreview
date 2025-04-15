<?php
require_once 'koneksi.php';

Function bacaUser($sql) {
    $data = array();
    $koneksi = koneksi();
    $hasil = mysqli_query($koneksi, $sql);
    //jika tidak ada record, hasil berupa null
    if(mysqli_num_rows($hasil)==0){
        mysqli_close($koneksi);
    }
    $i = 0;
    while ($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['nama']=$baris['nama'];
        $data[$i]['email']=$baris['email'];
        $data[$i]['username']=$baris['username'];
        $data[$i]['password']=$baris['password'];
        $data[$i]['level']=$baris['level'];
        $i++;
    }
    //mysqli_close($koneksi);
    return $data;
}

Function bacaSemuaUser() {
    $sql = "select * from user";
    $data = bacaUser($sql);
    return $data;
}

// Function bacaSiswaPerJurusan($jurusan) {
//     $sql = "select * from siswa where Jurusan = '$jurusan'";
//     $data = bacaSiswa($sql);
//     return $data;
// }

// Function cariSiswaDariNis($cari) {
//     $sql = "select * from siswa where Nis = '$cari'";
//     $data = bacaSiswa($sql);
//     return $data;
// }

Function hapusUser($email) {
    $koneksi = koneksi();
    $sql = "delete from user where email = '$email'";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function tambahUser($nama, $email, $username, $password, $level) {
    $koneksi = koneksi();
    $sql = "insert into user values ('$nama', '$email', '$username', '$password', '$level')";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function ubahUser($nama, $email, $username, $password, $level){
    $koneksi = koneksi();
    $sql = "UPDATE `user` SET `nama`='$nama',`username` = '$username', `password` = '$password', `level`='$level' WHERE `email` = '$email'";
    if(mysqli_query($koneksi, $sql)){
    $hasil = true;
    }else{
     $hasil = "Error mengubah record.. ". mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}
?>