<?php
require_once 'koneksi.php';
session_start();

Function cariUserDariUsername($username) {
    $koneksi = koneksiFilm();
    $sql = "SELECT * from user where username='$username'";
    $hasil = mysqli_query($koneksi, $sql);
    //jika tidak ada record, hasil berupa null
    if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil); 
        $data['nama']=$baris['nama'];
        $data['email']=$baris['email'];
        $data['username']=$baris['username'];
        $data['password']=$baris['password'];
        $data['level']=$baris['level'];
        mysqli_close($koneksi);
        return $data;
            
    }else {
        mysqli_close($koneksi);
        return null;
    }    
}

Function otentikasi($username, $password){
    $dataUser=array();
    $passmd5 = md5($password);
    $dataUser = cariUserDariUsername($username);
    if($dataUser !=null) {
        if($passmd5==$dataUser['password']) {
            return true;
        }else{
            return false;
        }
    }else {
        return false;
    }
}
Function register($nama, $email, $username, $password, $level) {
    $koneksi = koneksiFilm();
    $sql = "INSERT into user values ('$nama', '$email', '$username', '$password','$level')";
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
Function bacaSemuaFilm($sql) {
    $data = array();
    $koneksi = koneksiFilm();
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
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    //mysqli_close($koneksi);
    return $data;
}
function bacaFilmAction(){
    $data=array();
    $koneksi=koneksiFilm();

    $sql="SELECT * FROM review WHERE genre='action'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaFilmRomance(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review WHERE genre='Romance'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaFilmDrama(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review WHERE genre='Drama'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaFilmKomedi(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review WHERE genre='comedy'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaFilmHorror(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review WHERE genre='horror'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaSlideHero(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review ORDER BY rating DESC LIMIT 5";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaTopMovie(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review ORDER BY rating DESC LIMIT 10";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacalatestMovie(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review ORDER BY rilis ASC LIMIT 20";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaNewestMovie(){
    $data=array();
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review ORDER BY rilis DESC LIMIT 20";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaFilmDariJudul($judul){

    $data=array();
    $koneksi=koneksiFilm();
    $sql = "SELECT * FROM review WHERE judul LIKE '%".$judul."%'";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['genre']=$baris['genre'];
        $data[$i]['rating']=$baris['rating'];
        $data[$i]['durasi']=$baris['durasi'];
        $data[$i]['gambar']=$baris['gambar'];
        $data[$i]['umur']=$baris['umur'];
        $data[$i]['rilis']=$baris['rilis'];
        $data[$i]['sinopsis']=$baris['sinopsis'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}
function bacaActorDariFilm($judul){
    $data=array();
    $koneksi=koneksiFilm();
    // $sql="SELECT * FROM pemain WHERE judul='$judul'";
    $sql="SELECT * FROM pemain WHERE judul = '$judul' ";
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while($baris=mysqli_fetch_assoc($hasil)) {
        $data[$i]['id']=$baris['id'];
        $data[$i]['nama_aktor']=$baris['nama_aktor'];
        $data[$i]['link']=$baris['link'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function BacaSemuaKomentar($sql){
    $data = array();
    $koneksi = koneksiFilm();
    $hasil = mysqli_query($koneksi, $sql);
    $i=0;
    while ($baris=mysqli_fetch_assoc($hasil)){
        $data[$i]['id_komentar']=$baris['id_komentar'];
        $data[$i]['judul']=$baris['judul'];
        $data[$i]['username']=$baris['username'];
        $data[$i]['komentar']=$baris['komentar'];
        $data[$i]['tanggal']=$baris['tanggal'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function CariKomentarDariJudul($judul){
    $koneksi = koneksiFilm();
    $sql="SELECT * from komentar where judul = '$judul'";
    $hasil = mysqli_query($koneksi,$sql);
    return $hasil;
}


function TambahKomentar($id, $judul, $komentar, $username){
    $koneksi = koneksiFilm();
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("y/m/d h:i:s");
    $sql = "insert into komentar values('$id','$judul','$komentar','$username','$tanggal')";
    $data =  mysqli_query($koneksi,$sql);
    return $data;
}

function HapusKomentar($id){
    $koneksi = koneksiFilm();
    $delete = "delete from komentar where id = '$id'";
    $data =  mysqli_query($koneksi,$delete);
    return $data;
}

function EditKomentar($id_komentar, $id, $username, $komentar){
    $tanggal = date("y/m/d");
    $koneksi = koneksiFilm();
    $sql = "update komentar set 
                                id = '$id',
                                username = '$username',
                                komentar = '$komentar',
                                tanggal = '$tanggal'
                                WHERE id_komentar = '$id_komentar'";
    $data =  mysqli_query($koneksi,$sql);
    return $data;
}

function searchFilmApi($judul)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/?apikey=64f76c30&s='$judul'");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, true);

    if($result['totalResults']>10){
        $jumlah = 10;
    }else{
        $jumlah = $result['totalResults'];
    }

    if($result['Response']=='True'){
        $movies = $result['Search'];
        for($i=0;$i<$jumlah;$i++){
            $data[$i]['Title']=$movies[$i]['Title'];
            $data[$i]['Year']=$movies[$i]['Year'];
            $data[$i]['imdbID']=$movies[$i]['imdbID'];
            $data[$i]['Type']=$movies[$i]['Type'];
            $data[$i]['Poster']=$movies[$i]['Poster'];
        }
    }else{
        $data = null;
    }
    return $data;
    // $i = 0;
    // while($movies){
    //     $data[$i]['Title']=$movies[$i]['Title'];
    //     $data[$i]['Year']=$movies[$i]['Year'];
    //     $data[$i]['imdbID']=$movies[$i]['imdbID'];
    //     $data[$i]['Type']=$movies[$i]['Type'];
    //     $data[$i]['Poster']=$movies[$i]['Poster'];
    //     $i++;
    // }
}

function filmDetail($judul)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/?apikey=64f76c30&t='$judul'");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}
?>