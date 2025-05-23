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
<style>
    a
    {
        color:black;
    }
    a:hover
    {
        color:red;
    }
</style>
<?php
$sql="select * from user";
$data = bacaSemuaUser();
if($data==null) {echo"Record Tidak Ditemukan";}
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
                     <a href="http://www.creative-tim.com" class="simple-text">
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
                     <a class="navbar-brand" href="#pablo"> Table User </a>
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
                                     <span class=""><i class="bi bi-power"></i> Log out</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card strpied-tabled-with-hover">
                                 <div class="card-header ">
                                     <h4 class="card-title">Data User</h4>
                                     <p class="card-category"><a href ="tambahuser.php"><i class="bi bi-plus-circle"></i> Tambah User</a></p>
                                 </div>
                                 <div class="card-body table-full-width table-responsive">
                                     <table class="table table-hover table-striped">
                                         <thead>
                                             <th>Nama</th>
                                             <th>Email</th>
                                             <th>Username</th>
                                             <th>Password</th>
                                             <th>Level</th>
                                             <th>Action</th>
                                         </thead>
                                         <?php
                                            foreach($data as $film) {
                                                $nama = $film['nama'];
                                                $email = $film['email'];
                                                $username = $film['username'];
                                                $password = $film['password'];
                                                $level = $film['level'];
                                                

                                                echo"
                                                <tr align='left'>
                                                    <td>$nama</td>
                                                    <td>$email</td>
                                                    <td>$username</td>
                                                    <td>$password</td>
                                                    <td>$level</td>
                                                    <td> <a href='edituser.php?email=$film[email]';><i class='bi bi-pencil-square'></i>&nbsp;&nbsp;&nbsp;</a><a href='hapususer.php?email=$film[email]';><i class='bi bi-trash'></i></a></td>
                                               
                                                </tr>";
                                            }
                                            ?>
                                     </table>
                                 </div>
                             </div>
                         </div>
                         <!-- <div class="col-md-12">
                             <div class="card card-plain table-plain-bg">
                                 <div class="card-header ">
                                     <h4 class="card-title">Table on Plain Background</h4>
                                     <p class="card-category">Here is a subtitle for this table</p>
                                 </div>
                                 <div class="card-body table-full-width table-responsive">
                                     <table class="table table-hover">
                                         <thead>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Salary</th>
                                             <th>Country</th>
                                             <th>City</th>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>1</td>
                                                 <td>Dakota Rice</td>
                                                 <td>$36,738</td>
                                                 <td>Niger</td>
                                                 <td>Oud-Turnhout</td>
                                             </tr>
                                             <tr>
                                                 <td>2</td>
                                                 <td>Minerva Hooper</td>
                                                 <td>$23,789</td>
                                                 <td>Curaçao</td>
                                                 <td>Sinaai-Waas</td>
                                             </tr>
                                             <tr>
                                                 <td>3</td>
                                                 <td>Sage Rodriguez</td>
                                                 <td>$56,142</td>
                                                 <td>Netherlands</td>
                                                 <td>Baileux</td>
                                             </tr>
                                             <tr>
                                                 <td>4</td>
                                                 <td>Philip Chaney</td>
                                                 <td>$38,735</td>
                                                 <td>Korea, South</td>
                                                 <td>Overland Park</td>
                                             </tr>
                                             <tr>
                                                 <td>5</td>
                                                 <td>Doris Greene</td>
                                                 <td>$63,542</td>
                                                 <td>Malawi</td>
                                                 <td>Feldkirchen in Kärnten</td>
                                             </tr>
                                             <tr>
                                                 <td>6</td>
                                                 <td>Mason Porter</td>
                                                 <td>$78,615</td>
                                                 <td>Chile</td>
                                                 <td>Gloucester</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> -->
             <!-- <footer class="footer">
                 <div class="container-fluid">
                     <nav>
                         <ul class="footer-menu">
                             <li>
                                 <a href="#">
                                     Home
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     Company
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     Portfolio
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     Blog
                                 </a>
                             </li>
                         </ul>
                         <p class="copyright text-center">
                             ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer> -->
         </div>
     </div>
     <!--   -->
     <!-- <div class="fixed-plugin">
     <div class="dropdown show-dropdown">
         <a href="#" data-toggle="dropdown">
             <i class="fa fa-cog fa-2x"> </i>
         </a>
 
         <ul class="dropdown-menu">
             <li class="header-title"> Sidebar Style</li>
             <li class="adjustments-line">
                 <a href="javascript:void(0)" class="switch-trigger">
                     <p>Background Image</p>
                     <label class="switch">
                         <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                     </label>
                     <div class="clearfix"></div>
                 </a>
             </li>
             <li class="adjustments-line">
                 <a href="javascript:void(0)" class="switch-trigger background-color">
                     <p>Filters</p>
                     <div class="pull-right">
                         <span class="badge filter badge-black" data-color="black"></span>
                         <span class="badge filter badge-azure" data-color="azure"></span>
                         <span class="badge filter badge-green" data-color="green"></span>
                         <span class="badge filter badge-orange" data-color="orange"></span>
                         <span class="badge filter badge-red" data-color="red"></span>
                         <span class="badge filter badge-purple active" data-color="purple"></span>
                     </div>
                     <div class="clearfix"></div>
                 </a>
             </li>
             <li class="header-title">Sidebar Images</li>
 
             <li class="active">
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-1.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-3.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="..//assets/img/sidebar-4.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-5.jpg" alt="" />
                 </a>
             </li>
 
             <li class="button-container">
                 <div class="">
                     <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                 </div>
             </li>
 
             <li class="header-title pro-title text-center">Want more components?</li>
 
             <li class="button-container">
                 <div class="">
                     <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                 </div>
             </li>
 
             <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
 
             <li class="button-container">
                 <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                 <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
             </li>
         </ul>
     </div>
 </div>
  -->
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
 