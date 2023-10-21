<?php
include('cruduser.php');
$email=$_GET['email'];
$delete = hapusUser($email);
if($delete) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location="tableuser.php";
    </script>
    <?php
}
?>