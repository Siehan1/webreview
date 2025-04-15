<?php
 
include "crudactor.php";
$id=$_POST['id'];
$id_film=$_POST['id_film'];
$nama_aktor=$_POST['nama_aktor'];
$link=$_POST['link'];
$add = ubahActor($id, $id_film, $nama_aktor, $link);

$data=ubahActor($id, $id_film, $nama_aktor, $link);
if($data) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Diubah');
        window.location="tableactor.php";
    </script>
    <?php
}
?> 
<script type="text/javascript">
    alert ('Data Gagal Diubah');
    window.location="editactor.php";
</script>
<?php

?>