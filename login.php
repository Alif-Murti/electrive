<?php
session_start();
include_once("koneksi.php");
if ( isset($_SESSION["login"]) ) {
  }
  if (isset($_POST['username'])) 
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$sql = "SELECT * FROM admin WHERE username= '$username' and password='$password'";

		$result = mysqli_query($conn,$sql);
    
    if ($result) {

      $user_found = mysqli_num_rows($result);
      if ($user_found === 1) {
        
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: ./admin/index.php");
      } else {
        echo "<script>alert('Salah username atau password')</script>";
      }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
    <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light navbar_section">       
            <div class="container">
              <a class="navbar-brand fw-bold fs-4" href="#">Login</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
              </div>
              </div>
            </div>
    </nav>
    </div>

  <!-- Masthead -->
    <div class="masthead">
      <section class="header-section">
          <br>
          <br>
          <div class="container rounded bg-secondary p-3">
            <form method="post" action="">
            <div class="row-ml 3">
                <label for="staticEmail" class="col-sm-2 col-form-label fs-5 text-dark fw-bolder">Username</label>
                <div class="col-sm-3 mx-auto">
                  <input type="text" name="username" class="form-control" id="staticEmail">
                </div>
              </div>
              <div class="row-ml 3">
                <label for="inputPassword" class="col-sm-2 col-form-label fs-5 text-dark fw-bolder">Password</label>
                <div class="col-sm-3 mx-auto">
                  <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
                <br>
                <div class="row-ml 3">
                    <button type="submit" name="submit" class="btn btn-light border-4 fw-bold fs-5">Masuk</button>
                </div>
              </div>
          </form>
          </div>
          
      </section>
    </div>
    <!-- Masthead end -->

    <!-- copyright section start -->
    <div class="copyright text-center">
    	<p class="copyright_text">Copyright © 2021 All Rights Reserved.</p>
    </div>
  	<!-- copyright section end -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
