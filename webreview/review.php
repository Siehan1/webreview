<?php
include "crud.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Flix
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        /* The dropdown container */
        .dropdown {
        float: left;
        overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        margin: 0; /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
        color: red;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: black;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        float: none;
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
        background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: block;
        }
        /* Search */

        /* Style the search field */
        form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 400px;
        height:35px;
        background: black ;
        opacity: 50%;
        color:white;
        border-radius: 50px 0px 0px 50px;
        }

        /* Style the submit button */
        form.example button {
        float: left;
        width: 50px;
        height:35px;
        padding: 5px;
        background: black ;
        opacity: 50%;
        color:  ;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none; /* Prevent double borders */
        cursor: pointer;
        border-radius: 0px 50px 50px 0px;
        color:white;
        }

        form.example button:hover {
        background: #C0392B;
        }

        /* Clear floats */
        form.example::after {
        content: "";
        clear: both;
        display: table;
        }

        /* Pagination */
        .pagination {
        list-style: none;
        display: inline-block;
        padding: 0;
        margin: 5% 0 0 37%;
        }
        .pagination li {
        display: inline;
        text-align: center;
        }
        .pagination a {
        float: left;
        display: block;
        font-size: 14px;
        text-decoration: none;
        padding: 5px 12px;
        color: #fff;
        margin-left: -1px;
        border: 1px solid transparent;
        line-height: 1.5;
        }
        .pagination a.active {
        cursor: default;
        }
        .pagination a:active {
        outline: none;
        }
        .modal-2 li:first-child a {
        -moz-border-radius: 50px 0 0 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px 0 0 50px;
        }
        .modal-2 li:last-child a {
        -moz-border-radius: 0 50px 50px 0;
        -webkit-border-radius: 0;
        border-radius: 0 50px 50px 0;
        }
        .modal-2 a {
        border-color: #212529;
        color: #999;
        background: #212529;
        }
        .modal-2 a:hover {
        border-color: #E34E48;
        background: #E34E48;
        color: #fff;
        }
        .modal-2 a.active, .modal-2 a:active {
        border-color: #E34E48;
        background: #E34E48;
        color: #fff;
        }

        .feed{
          margin: 0 auto;
          width: 1100px;
          padding: 0px 0 0 0;
        }

        .post{
          width: 100%;
          background-color: #181616;
          margin: 0 auto;
          min-height: 100px;
          padding: 12px 18px;
        }

        .post__top{
          display: flex;
          align-items: center;
          justify-content: space-between;
        }

        .post__top-left{
          display: flex;
          align-items: center;
        }

        .post__profile-img{
          height: 40px;
          width: 40px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 10px;
        }

        .post__profile-name{
          color: whitesmoke;
          text-decoration: none;
          font-size: 16px;
          font-weight: bold;
        }
        .post__profile-name:hover{
          text-decoration: underline;
        }

        .post__date-posted{
          font-size: 14px;
          color: whitesmoke;
        }


        /* Content */
        .post__content{
          padding: 14px 8px;
          border-bottom: 1px solid #efefef;
        }
        .p{
          font-size: 16px;
          color: whitesmoke;
        }

        /* Comment Section */

        .post__comments{
          padding: 16px 0;
          margin-top: 10px;
          border: 1px solid #ececec;
          border-radius: 3px;
          padding: 12px 12px;
        }

        .comment-create{
          display: flex;
          align-items: center;
          border-radius: 3px;
        }
        .comment__profile-img{
            height: 34px;
          width: 34px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 8px;
        }
        .input{
          width: 85%;
          box-sizing: border-box;
          border-radius: 3px;
          padding: 6px 14px;
          background-color: #eee;
          height: 34px;
          border: none;
        }

        .submit{
          width: 10%;
          box-sizing: border-box;
          border-radius: 3px;
          padding: 6px 14px;
          margin-left:20px;
          background-color: #eee;
          height: 34px;
          border: none;
        }
        .comment{
          display: flex;
          margin: 20px 0;
          align-items: center;
          border-radius: 3px;
        }
        .comment__text{
          background-color: #eee;
          font-size: 14px;
          padding: 8px 6px;
        }

        .comment-name{
          text-decoration: none;
          font-size: 14px;
          font-weight: bold;
          color: whitesmoke;
        }
        .comment-name:hover{
          text-decoration: underline
        }
        .comment__content{
        }

    </style>
    
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                <i class='bx bx-movie-play bx-tada main-color'></i><span class="main-color">B</span>ahasin<span class="main-color">A</span>ja
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li>
                        <!-- The form -->
                        <form class="example" action="search.php" method="post">
                        <input type="text" placeholder="Search.." name="search" required>
                        <button type="submit" name="cari"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Genre
                            <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                            <a href="genre.php?action">Action</a>
                            <a href="genre.php?romance">Romance</a>
                            <a href="genre.php?drama">Drama</a>
                            <a href="genre.php?comedy">Comedy</a>
                            <a href="genre.php?horror">Horror</a>
                            </div>
                        </div>
                    </li>
                    <?php if (isset($_SESSION['username'])) {
                              echo "<li><a>$_SESSION[namauser]</a></li>";
                             echo"<li><a href='logout.php'>Log out</a></li>";
                        } else {
                            echo"<li><a href='login.php'>Log in</a></li>";
                        }
                        ?>
                    <!-- <li>
                        <a href="#" class="btn btn-hover">
                            <span>Sign in</span>
                        </a>
                    </li> -->
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->


    <?php
    $judul = $_GET['judul'];
    $koneksi=koneksiFilm();
    $sql="SELECT * FROM review WHERE judul = '$judul'";
    $hasil = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($hasil);
    $id = $data['id'];
    ?>
    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="card">
            <div class="card-thumbnail">
            <img src="images/<?= $data['gambar']?>" alt="Poster Film">
            </div>
            <div class="card-body">
            <span class="card-title"><?= $data['judul']?></span>
            <h2>
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp;<?= $data['rilis']?></span> 
                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  &nbsp;<?= $data['durasi']?></span> 
                <span><i class="fa fa-folder" aria-hidden="true"></i>  &nbsp;<?= $data['genre']?></span>
                <span><i class="fa fa-star" aria-hidden="true"></i>  &nbsp;<?= $data['rating']?></span>
            </h2>
            
            <div class="card-description"><?= $data['sinopsis']?></div>

            <div class='card-description'>
            Cast :
            <?php
             $data = bacaActorDariFilm($judul);
             if($data==null) {echo"Record Tidak Ditemukan";}
             foreach ($data as $aktor) {
                 $id = $aktor['id'];
                 $nama_aktor = $aktor['nama_aktor'];
                 $link = $aktor['link'];
                echo"<a href='$link'>$nama_aktor, </a>";}
                ?>
                <!-- Cast : Satria, Fachriy, Gemilang, Annas, Shaehyan -->
            </div>
            <?php
            $judul = $_GET['judul'];
            $_SESSION['judul']=$judul;
            $koneksi=koneksiFilm();
            $sql="SELECT * FROM review WHERE judul = '$judul'";
            $hasil = mysqli_query($koneksi, $sql);
            $data = mysqli_fetch_assoc($hasil);
            ?>
            <button class="trailer"><a href="<?= $data['link']?>" target='_blank'><i class="fas fa-play"></i> Watch Trailer</a></button>
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->
    <br>
    <br>
    <br>
    <div class="container">
    <div class="section-header">
                Komentar
            </div>
            </div>     
    <!-- COMMENT SECTION -->
    <div class="feed">
  <div class="post">
  <?php
        $data = CariKomentarDariJudul($judul);
        if($data==null){
        }
        foreach ($data as $komen){
            $id = $komen['id'];
            $judul = $komen['judul'];
            $username = $komen['username'];
            $komentar = $komen['komentar'];
            $tanggal = $komen['tanggal'];

            echo"<div class='post__top'>
              <div class='post__top-left'>
                <img class='post__profile-img' src='https://www.vut.ac.za/wp-content/uploads/2016/02/blank-profile-picture-973460_1280-283x189.png' alt=''>
                <a class='post__profile-name' href=''>$username</a>
              </div>
              <div>
                <span class='post__date-posted'>$tanggal</span>
                </span>
              </div>
            </div>
            <div class='post__content'>
              <p class='p'>$komentar</p>
            </div><br>";
            
            if(isset($_SESSION['username'])){
              $log = $_SESSION['username'];
              if($username == $log){
                // echo "<a href='hapuskomentar.php?id=$id' >hapus komentar</a>";
              }
            }
          }
          if(isset($_SESSION['username'])){
            ?>
      <div class="post__comments">
    <form action="proseskomen.php" method="post">
      <div class="comment-create">
              <img class="comment__profile-img" src="https://www.vut.ac.za/wp-content/uploads/2016/02/blank-profile-picture-973460_1280-283x189.png" alt="">
        <input class="input" type="text" name="comment" placeholder="Add a comment" required/>
        <input class="submit" type="submit" name="tbhkomen" value="Submit">
      </div>
    </form>
    </div>
        <?php }?>
  </div>
</div>
    <!-- END COMMENT SECTION -->
        

        <!-- FOOTER SECTION -->
        <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i class='bx bx-movie-play bx-tada main-color'></i><span class="main-color">B</span>ahasin<span class="main-color">A</span>ja
                        </a>
                        <p>
                            BAHASIN AJA merupakan situs penyedia layanan review film dan serial tv. Sama seperti penyedia website review film dan serial tv lainnya seperti imdb, MRQE, Flixster , Film.com,, Rotten Tomatoes , dan lainnya. BAHASIN AJA berusaha untuk menyediakan layanan review film kepada para rakyat Indonesia yang belum mampu berbahasa inggris seperti yang disebut diatas.
                        </p>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/davyfchryr/?next=%2F" target="_blank" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Navigasi</b></p>
                                <ul class="footer-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Genre</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Genre</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Romance</a></li>
                                    <li><a href="#">Drama</a></li>
                                    <li><a href="#">Comedy</a></li>
                                    <li><a href="#">Horror</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <div class="copyright">
        Copyright 2021 <a href="https://www.youtube.com/channel/UCnNgtK4tGlWcceXVzoyTg8Q" target="_blank">
            Tuat Tran Anh</a>
    </div>
    <!-- END COPYRIGHT SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>