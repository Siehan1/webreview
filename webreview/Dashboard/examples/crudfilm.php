<?php
require_once 'koneksi.php';

Function bacaFilm($sql) {
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
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    //mysqli_close($koneksi);
    return $data;
}

Function bacaSemuaFilm() {
    $sql = "select * from review";
    $data = bacafilm($sql);
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

Function hapusFilm($id) {
    $koneksi = koneksi();
    $sql = "delete from review where id = '$id'";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function tambahFilm($id, $judul, $genre, $rating, $durasi, $gambar, $umur, $rilis, $sinopsis, $link) {
    $koneksi = koneksi();
    $sql = "insert into review values ('$id', '$judul', '$genre', '$rating', '$durasi','$gambar', '$umur', '$rilis', '$sinopsis', '$link')";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function ubahFilm($id, $judul, $genre, $rating, $durasi, $gambar, $umur, $rilis, $sinopsis, $link){
    $koneksi = koneksi();
    $sql = "UPDATE `review` SET `judul`='$judul',`genre` = '$genre', `rating` = '$rating', `durasi`='$durasi', `gambar`='$gambar', `umur`='$umur', `rilis`='$rilis', `sinopsis`='$sinopsis', `link`='$link' WHERE `id` = '$id'";
    if(mysqli_query($koneksi, $sql)){
    $hasil = true;
    }else{
     $hasil = "Error mengubah record.. ". mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
}
?>