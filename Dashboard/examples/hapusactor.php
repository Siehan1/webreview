<?php
include('crudactor.php');
$id=$_GET['id'];
$delete = hapusActor($id);
if($delete) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location="tableactor.php";
    </script>
    <?php
}
?>