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
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
    <style>
.contentlogin{
  width: 400px;
  display: flex;
  flex-direction: column;
  margin: auto;
}
h1 {
  font-size:30pt;
}
input, button {
  height: 65px;
  font: 1.2rem;
  padding: 0 20px;
  border-radious: 5px;
  color:#AAA;
}
input{
  background: #2e2e2e;
  border : 0px;
  margin-bottom: 2px;
}
input[type=submit]{
  font-size:16pt;
  background: #E50914;
  border: 1px solid #4d4d4d;
  color: white;
  margin: 20px 0;
}
input[type=submit]:hover{
  background: #940000;
  border: 1px solid #4d4d4d;
  color: #aaa;
  margin: 20px 0;
}

.a{
  font-family: 'Roboto', sans-serif;
  margin: 20px auto;
  color: #AAA;
}
    </style>
</head>

<body>


    <!-- LOGIN SECTION -->

    <div class="section">
        <div class="container">
          <form action="prosesregister.php" method="post">
          <div class="contentlogin">
            <h1 align="center">SIGN IN</h1>
            <input type="text" name="nama" placeholder="nama"/>
            <input type="text" name="email" placeholder="email"/>
            <input type="text" name="username" placeholder="username"/>
            <input type="text" name="password" placeholder="password"/>
            <br>
            <input type="submit" name="submit" value="Register">
            <a class="a" href="login.php">Sudah Punya Akun ? Login</a>
          </div>
        </form>
        </div>
    </div>
    <!-- END LOGIN SECTION -->

</body>

</html>