<?php
 
include "cruduser.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$username=$_POST['username'];
$md5 = md5($password);
$level="";
$add = ubahUser($nama, $email, $username, $md5, $level);

$data=ubahUser($nama, $email, $username, $md5, $level);
if($data) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Diubah');
        window.location="tableuser.php";
    </script>
    <?php
}
?> 
<script type="text/javascript">
    alert ('Data Gagal Diubah');
    window.location="edituser.php";
</script>
<?php

?>