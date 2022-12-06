<?php

$showAlert =false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){


    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists == false;

    //check whether this user exists
    $existSql = "SELECT * FROM `users` WHERE username='$username'";
    
    $result=mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    
    if($numExistRows>0){
        //$exists = true;
        $GLOBALS['showError'] = "Username already exists";

    } else {
        //$exists = false;


       
        if ($password == $cpassword) {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
             $GLOBALS['showAlert'] = true;
            }

        } else {
            $GLOBALS['showError'] = "Password do not match";
        }
    }
}



?>

<!doctype html>
<html lang="en" >
  <head>
  <style>
      body{
        background-image: url(signupgif.gif);
        background-size: 100%;
        background-repeat: no-repeat;
        height: 100vh;
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php

        require 'partials/_nav.php' 
    ?>
    <?php
    if($GLOBALS['showAlert']){
        echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!!!!</strong> Your account is now created. You can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }

    if($GLOBALS['showError']){
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!!!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }
    ?>


    <div class="container">
        <h1 class="text text-center">Signup to our website</h1>

        <form action="/login_demo/signup.php" method="post" style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text " maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password</div>
  </div>
  <!-- <div class="mb-3 col-md-6">
    <label for="phone" class="form-label">Phone number</label>
    <input type="phone" class="form-control" id="phone">
  </div>
  <div class="mb-3 col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
  </div> -->
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    -->
  </body>
</html>