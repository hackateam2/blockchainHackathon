<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Blockchain Hackathon/assets/css/style.css">
    
</head>
<body>
  <!-- Navbar -->
  <nav  class="sticky-top navbar navbar-expand-lg navbar-light bg-light border-bottom p-4 ">
    <div class="container-fluid">
       <a class="navbar-brand text-decoration-none link-dark" href="/Blockchain Hackathon/index.html">Fund<span class="text-primary">Raise</span></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active "><a href="/Blockchain Hackathon/index.html" class="nav-link text-decoration-none link-secondary">Home</a></li>
          <li class="nav-item "><a href="/Blockchain Hackathon/assets/pages/fundabusiness.php" class="nav-link text-decoration-none link-secondary">Fund a business</a></li>
          <li class="nav-item "><a href="/Blockchain Hackathon/assets/pages/AboutUs.php" class="nav-link text-decoration-none link-secondary">About Us</a></li>
          <li class="nav-item "><a href="/Blockchain Hackathon/assets/pages/Contact.php" class="nav-link text-decoration-none link-secondary">Contact</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/profile.php">Profile</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Sign-up.php">Sign-Up</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Login.php">Login</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


        <!-- Hero Section -->
    <div class="container mt-5">
        <h4>Fund A Business</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo iure eveniet hic magni perspiciatis eum reiciendis sequi illum excepturi ipsa magnam rerum officiis mollitia facere dolore ea, temporibus ex voluptatum.</p>
    </div>

    <!-- Main Content -->

<div class="container ">
  <div class="row g-3">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">

    <?php  
        $select_company = mysqli_query($conn, "SELECT * FROM `bussiness_info`") or die('query failed');
        if(mysqli_num_rows($select_company) > 0){
            while($fetch_company = mysqli_fetch_assoc($select_company)){
    ?>
    <form action="" method="post" class="card">
        <img class='card-img-top' src="uploaded_img/<?php echo $fetch_company['image']; ?>" alt="">
        <div class="card-body">
        <p class="card-text"><h5 class="card-title">Campany name: </h5><?php echo $fetch_company['name']; ?></p>
        <p class="card-text"><h5 class="card-title">Amount in ETH</h5><?php echo $fetch_company['amount']; ?></p>
        <p class="card-text"><h5 class="card-title">Location</h5><?php echo $fetch_company['location']; ?></p>
        <p class="card-text"><h5 class="card-title">Year Created</h5><?php echo $fetch_company['created']; ?></p>
        <p class="card-text"><h5 class="card-title">Description</h5><?php echo $fetch_company['description']; ?></p>
        <p class="card-text"><h5 class="card-title">Payment Option</h5><?php echo $fetch_company['payment option']; ?></p>
        <p class="card-text"><h5 class="card-title">Investment Potential</h5><?php echo $fetch_company['potential']; ?></p>
        <div class="flex"><a href="checkout.php" class='btn btn-primary'>fund</a></div>
        </div> 
    </form>
    <?php
        }
    }else{
        echo '<p class="empty">no bussinesses to invest to yet!</p>';
    }
    ?>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section -->
    <footer class="container-fluid container-light bg-light sticky-bottom mt-4">
      <div class="row">
        <div class="col-4">
          <h5 class="text-dark">Quick Links:</h5>
          <ul class="list-unstyled" >
          <li ><a  class="link-dark text-decoration-none" href="/Blockchain Hackathon/assets/pages/AboutUs.php">About Us</a></li>
            <li><a class="link-dark text-decoration-none" href="/Blockchain Hackathon/assets/pages/Contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-4">
          <h5 class="text-dark">Socials:</h5>
          <ul class="list-unstyled">
            <li><a href="#"><img src="/Blockchain Hackathon/assets/images/Twitter icon.png" alt="twitter-icon.png" width="30px"  ></a></li>
          </ul>
        </div>
        <div class="col-4">
          <small>© 2022 techKnights All Rights Reserved</small>
        </div>
      </div>
    </footer>
    
    <script src="js/investor.js"></script>
    <script src="/Blockchain Hackathon/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>