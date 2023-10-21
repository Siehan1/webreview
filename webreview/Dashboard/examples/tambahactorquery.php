<?php
    include('crudactor.php');
    if(isset($_POST['submit'])){
    $id="";
    $id_film=$_POST['id_film'];
    $nama_aktor=$_POST['nama_aktor'];
    $link=$_POST['link'];

    $data=tambahActor($id, $id_film, $nama_aktor, $link);
    if($data) {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Ditambah');
            window.location="tableactor.php";
        </script>
        <?php
    }
    ?> 
    <script type="text/javascript">
        alert ('Data Gagal DiTambahkan');
        window.location="tambahactor.php";
    </script>
    <?php
}
?>