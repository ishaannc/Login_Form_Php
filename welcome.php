<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
  header("location: login.php");
  exit;
}

?>

    
<!doctype html>
<html lang="en" >
  <head>
    <style>
      .carousel-inner{
            width:100%;
            height:500px;
        }
      .model{
          text-align: center;
          color: blue;
        }
    </style>
  <style>
      body{
        background-image: url(dashboardgif.gif);
        background-size: 100%;
        background-repeat: no-repeat;
        height: 100vh;
    }
    .card1{
      height: 220px;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    
    <?php

    require 'partials/_nav.php';

    ?>
    <!-- <h1 class='welcome'>Welcome - <?php echo $_SESSION['username']?></h1> -->
    
    <div class='container my-2'>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
  <p>Hey! How are you. You are logged in as <?php echo $_SESSION['username']?></p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to  <a href="/login_demo/logout.php">logout</a> using this link</p>
</div>

<div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="harley1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="harley2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="harley3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div>
  <h2 class="model" >Models of Harley</h2>
</div>


<div style="display:flex; justify-content: space-between;">
<div class="card" style="width: 18rem;">
  <img src="iron883.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">IRON 883</h5>
    <p class="card-text">The Harley-Davidson Iron 883 is powered by 883cc BS6 engine which develops a power of 50.9 bhp and a torque of 68 Nm. With both front and rear disc brakes, Harley-Davidson Iron 883 comes up with anti-locking braking system. This Iron 883 bike weighs 256 kg and has a fuel tank capacity of 12.5 liters.</p>
    <a href="https://www.harley-davidson.com/in/en/motorcycles/iron-883.html" class="btn btn-primary">More Information</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="fatboy.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">FatBoy</h5>
    <p class="card-text">Harley-Davidson Fat Boy is a cruiser bike available at a starting price of Rs. 22,11,145 in India. It is available in only 1 variant and 4 colours. The Harley-Davidson Fat Boy is powered by 1868cc BS6 engine which develops a power of 93.8 bhp and a torque of 155 Nm.</p>
    <a href="https://www.harley-davidson.com/in/en/motorcycles/fat-boy.html" class="btn btn-primary">More Information</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="sportster.jpg" class="card1" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sportster S</h5>
    <p class="card-text">Harley-Davidson Sportster S is a cruiser bike available at a starting price of Rs. 16,53,993 in India. It is available in only 1 variant and 3 colours. The Harley-Davidson Sportster S is powered by 1252cc BS6 engine which develops a power of 120.69 bhp and a torque of 125 Nm.</p>
    <a href="https://www.harley-davidson.com/in/en/motorcycles/sportster-s.html" class="btn btn-primary">More Information</a>
  </div>
</div>
</div>




</div>
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