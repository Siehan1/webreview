<?php
    include('crud.php');
    if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $md5 = md5($password);
    $level=$_POST['level'];

    $data=register($nama, $email, $username, $md5, $level);
    if($data) {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Ditambah');
            window.location="login.php";
        </script>
        <?php
    }
    ?> 
    <script type="text/javascript">
        alert ('Data Gagal DiTambahkan');
        window.location="register.php";
    </script>
    <?php
}
?>