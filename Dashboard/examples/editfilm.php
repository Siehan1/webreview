<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <?php
session_start();
include('cruduser.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Dashboard Bahasin Aja</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
     <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="../assets/css/demo.css" rel="stylesheet" />
 </head>

 <?php
$koneksi = koneksi();
$id = $_GET['id'];
$sql = "SELECT * from review where id ='$id'";
$result = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_array($result);
?>
 <body>
     <div class="wrapper">
         <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
             <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
 
         Tip 2: you can also add an image using data-image tag
     -->
             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a href="" class="simple-text">
                       Bahasin Aja
                     </a>
                 </div>
                 <ul class="nav">
                     <li>
                         <a class="nav-link" href="dashboard.php">
                             <i class="nc-icon nc-chart-pie-35"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="./tableuser.php">
                             <i class="nc-icon nc-circle-09"></i>
                             <p>Table User</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="./tablefilm.php">
                             <i class="nc-icon nc-notes"></i>
                             <p>Table Film</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="./tableactor.php">
                             <i class="nc-icon nc-single-02"></i>
                             <p>Table Actor</p>
                         </a>
                     </li>
                     <!-- <li class="nav-item active active-pro">
                         <a class="nav-link active" href="upgrade.html">
                             <i class="nc-icon nc-alien-33"></i>
                             <p>Upgrade to PRO</p>
                         </a>
                     </li> -->
                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#pablo"> Edit Film </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         <ul class="nav navbar-nav mr-auto">
                           
                         </ul>
                         <ul class="navbar-nav ml-auto">
                           
                             <li class="nav-item">
                                 <a class="nav-link" href="#pablo">
                                     <span class="no-icon"><i class="bi bi-power"></i> Log out</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">
             <div class="mb-3">
             <form action='editfilmquery.php' method='POST'>
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="Judul" style="width : 50%;" value="<?= $hasil['judul'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre" id="exampleFormControlInput1" placeholder="Genre" style="width : 50%;" value="<?= $hasil['genre'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Rating</label>
                    <input type="text" class="form-control" name="rating" id="exampleFormControlInput1" placeholder="Rating" style="width : 50%;" value="<?= $hasil['rating'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Durasi</label>
                    <input type="text" class="form-control" name="durasi" id="exampleFormControlInput1" placeholder="Durasi" style="width : 50%;" value="<?= $hasil['durasi'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" id="exampleFormControlInput1" placeholder="Umur" style="width : 50%;" value="<?= $hasil['umur'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Rilis</label>
                    <input type="text" class="form-control" name="rilis" id="exampleFormControlInput1" placeholder="Rilis" style="width : 50%;" value="<?= $hasil['rilis'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" name="sinopsis" id="exampleFormControlInput1" placeholder="Sinopsis" style="width : 50%;" value="<?= $hasil['sinopsis'] ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link</label>
                    <input type="text" class="form-control" name="link" id="exampleFormControlInput1" placeholder="Link" style="width : 50%;" value="<?= $hasil['link'] ?>">
                    </div>
                    <div class="mb-3">
                    <input type="hidden" class="form-control" name="id" id="exampleFormControlInput1" placeholder="Link" style="width : 50%;" value="<?= $hasil['id'] ?>">
                    </div>
                    <div class="mb-3">
                    <input type="hidden" class="form-control" name="gambar" id="exampleFormControlInput1" placeholder="Link" style="width : 50%;" value="<?= $hasil['gambar'] ?>">
                    </div>
                    <div class="">
                    <button class="btn btn-danger" name="submit" type="submit">Submit</button>
                    </div>
                    </form>     
 </body>
 <!--   Core JS Files   -->
 <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="../assets/js/plugins/bootstrap-switch.js"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="../assets/js/plugins/chartist.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="../assets/js/demo.js"></script>
 
 </html>
 