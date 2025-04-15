<?php
    include('cruduser.php');
    if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $md5 = md5($password);
    $level=$_POST['level'];

    $data=tambahUser($nama, $email, $username, $md5, $level);
    if($data) {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Ditambah');
            window.location="tableuser.php";
        </script>
        <?php
    }
    ?> 
    <script type="text/javascript">
        alert ('Data Gagal DiTambahkan');
        window.location="tambahuser.php";
    </script>
    <?php
}
?>