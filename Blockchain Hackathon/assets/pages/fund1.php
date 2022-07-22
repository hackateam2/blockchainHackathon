<?php
// include 'config.php';

// session_start();

// /*$user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//     header('location:login.php');
// }*/

// if(isset($_POST['submit'])){

//     $address = mysqli_real_escape_string($conn, $_POST['address']);
//     $tax_id = $_POST['number'];
//     $amount = $_POST['amount'];

//     $order_query = mysqli_query($conn, "SELECT * FROM `fund` WHERE receiver_adress = '$address' AND Tax_id = '$tax_id' AND amount_in_ETH = '$amount'") or die('query failed');

//     if(mysqli_num_rows($order_query) > 0){
//         $message[] = 'already funded!'; 
//     }else{
//         mysqli_query($conn, "INSERT INTO `fund` (`receiver_adress`, `Tax_id`, `amount_in_ETH`) VALUES ('$address', '$tax_id', '$amount');") or die('query failed');
//         $message[] = 'funded successfully!';
//     }   
    
// }
if(isset($_POST["submit"])){
  echo"<script>alert('Not enough funds to perform transaction')</script>";
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
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/profile.php">Refentse</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Sign-up.php">Sign-Up</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Login.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


        <!-- Hero Section -->
        <div class="container mt-5">
        <h4>More about the business you are funding</h4>
        <div class="row g-3 mb-3">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card">
                <img class='card-img-top' src="/Blockchain Hackathon/assets\images\pexels-nappy-936043(1).jpg" alt="">
                <div class="card-body">
                  <h5 class="card-title">John Mane</h5>
                  <p class="card-text">John is starting a chain supermarket around his area </p>
                  <p class="card-text">John is trying to assist his neighboaring area by bringing the items they like just a walk away from where they stay</p>
                  <p class="card-text">John is looking to raise R250 000 rands, which will be added to the lump sump he already has at hand to build the supermarket.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- Main Content -->

    <div class="container ">
              <form action="fund1.php" method="post" class='container container-light bg-light rounded p-5'>
                  <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                      Fund Business
                  </h2>
                  <div class="row">
                        <div class="mb-3">
                          <label class="fomr-label">Receiver Address</label>
                          <input type="text" name='address' class='form-control' placeholder='3u5bD0D93BA4BUac754Ed26074218e8ea8ce6bd8jk' disabled>
                        </div>
                        <div class="mb-3">
                          <label class="fomr-label">Receiver's Tax Identification Number</label>
                          <input type="text" name='address' class='form-control' placeholder='758654258' disabled>
                        </div>

                        <div class="mb-3">
                          <label class="fomr-label">Tax Identification Number</label>
                          <input type="text" id='TIN' name='number' class='form-control' placeholder='Tax Identification Number'>
                        </div>
                        <div class="mb-3">
                          <label class="fomr-label">Amount in ETH</label>
                          <input type="number" name='amount' id='ETHAmount' class='form-control' placeholder='Amount'>
                        </div>
                    </div>
                <input type="submit" name='submit' value="Fund" class="btn btn-primary">
              </form>
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
    
    <script src="https://cdn.jsdelivr.net/gh/web3@.js@1.0.0-beta.36/dist/web3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.slim.min.js" crossorigin="anonymous"></script>
    <script src="/Blockchain Hackathon/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  
  </body>
</html>