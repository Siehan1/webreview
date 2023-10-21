<?php
include('crudfilm.php');
$id=$_GET['id'];
$delete = hapusFilm($id);
if($delete) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location="tablefilm.php";
    </script>
    <?php
}
?>