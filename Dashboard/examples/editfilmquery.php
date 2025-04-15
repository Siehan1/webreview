<?php
 
include "crudfilm.php";
$id=$_POST['id'];
$judul=$_POST['judul'];
$genre=$_POST['genre'];
$rating=$_POST['rating'];
$durasi=$_POST['durasi'];
$gambar=$_POST['gambar'];
$umur=$_POST['umur'];
$rilis=$_POST['rilis'];
$sinopsis=$_POST['sinopsis'];
$link=$_POST['link'];

$data=ubahFilm($id, $judul, $genre, $rating, $durasi, $gambar, $umur, $rilis, $sinopsis, $link);
if($data) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Diubah');
        window.location="tablefilm.php";
    </script>
    <?php
}
?> 
<script type="text/javascript">
    alert ('Data Gagal Diubah');
    window.location="editfilm.php";
</script>
<?php

?>