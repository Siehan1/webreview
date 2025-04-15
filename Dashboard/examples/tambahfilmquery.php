<?php
    include('crudfilm.php');
    if(isset($_POST['submit'])){
    $id="";
    $judul=$_POST['judul'];
    $genre=$_POST['genre'];
    $rating=$_POST['rating'];
    $durasi=$_POST['durasi'];
    $gambar="";
    $umur=$_POST['umur'];
    $rilis=$_POST['rilis'];
    $sinopsis=$_POST['sinopsis'];
    $link=$_POST['link'];

    $data=tambahFilm($id, $judul, $genre, $rating, $durasi, $gambar, $umur, $rilis, $sinopsis, $link);
    if($data) {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Ditambah');
            window.location="tablefilm.php";
        </script>
        <?php
    }
    ?> 
    <script type="text/javascript">
        alert ('Data Gagal DiTambahkan');
        window.location="tambahfilm.php";
    </script>
    <?php
}
?>