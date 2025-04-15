<?php
require_once 'koneksi.php';

Function bacaActor($sql) {
    $data = array();
    $koneksi = koneksi();
    $hasil = mysqli_query($koneksi, $sql);
    //jika tidak ada record, hasil berupa null
    if(mysqli_num_rows($hasil)==0){
        mysqli_close($koneksi);
    }
    $i = 0;
    while ($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['id_film']=$baris['id_film'];
        $data[$i]['nama_aktor']=$baris['nama_aktor'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    //mysqli_close($koneksi);
    return $data;
}

Function bacaSemuaActor() {
    $sql = "select * from pemain";
    $data = bacaActor($sql);
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

Function hapusActor($id) {
    $koneksi = koneksi();
    $sql = "delete from pemain where id = '$id'";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function tambahActor($id, $id_film, $nama_aktor, $link) {
    $koneksi = koneksi();
    $sql = "insert into pemain values ('$id', '$id_film', '$nama_aktor', '$link')";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function ubahActor($id, $id_film, $nama_aktor, $link){
    $koneksi = koneksi();
    $sql = "UPDATE pemain SET id_film = '$id_film', nama_aktor = '$nama_aktor', link = '$link' WHERE id = '$id'";
    if(mysqli_query($koneksi, $sql)){
    $hasil = true;
    }else{
     $hasil = "Error mengubah record.. ". mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}
?>