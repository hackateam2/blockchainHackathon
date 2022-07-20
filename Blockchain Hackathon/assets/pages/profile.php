<?php
//Updatign profile
if(isset($_POST["update"])){
  echo "Submitted";
}else{
  echo "Error";
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
    <link rel="stylesheet" href="../Blockchain Hackathon/assets/css/main.css">
    
</head>
<body>
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
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/wallet.html">Wallet</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Sign-up.php">Sign-Up</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Login.php">Login</a></li>
            </ul>
          </li>
        </ul>
        </div>
    </div>
  </nav>


        
    <div class="container">
        
          
          <form action="profile.php" method="POST" class='container container-light bg-light rounded p-5 mt-3'>
               <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                  Edit Profile
               </h2>
              <div class="row">
                    <div class="col mb-3">
                      <label class="fomr-label">First Name</label>
                      <input type="text" class='form-control' name='fname' placeholder='First Name'>
                    </div>
                    <div class="col mb-3">
                      <label class="fomr-label">Last Name</label>
                      <input type="text" class='form-control'name='lname' placeholder='Last Name'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Email</label>
                      <input type="email" class='form-control' name='email' placeholder='Email'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Contact Number</label>
                      <input type="tel" class='form-control' name='cnumber' placeholder='Contact Number'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Password</label>
                      <input type="password" class='form-control' name='password' placeholder='Password'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Confirm Password</label>
                      <input type="password" class='form-control' name='cpassword' placeholder='Confirm Password'>
                    </div>
            </div>
            <input type="button" value="Update Changes" name='update' class="btn btn-primary">
          </form>
          
          


          <!-- Find Funding for business -->
          <div class="row">
              <div class="col-lg g-3">
              <form action="" method="post" class='container container-light bg-light rounded p-5'>
                  <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                      Add A Business
                  </h2>
                  <div class="row">
                        <div class="col mb-3">
                          <label class="fomr-label">Business Name</label>
                          <input type="text" class='form-control' placeholder='First Name'>
                        </div>
                        <div class="mb-3">
                          <label class="fomr-label">Email</label>
                          <input type="email" class='form-control' placeholder='Email'>
                        </div>
                        <div class="mb-3">
                          <label class="fomr-label">Contact Number</label>
                          <input type="tel" class='form-control' placeholder='Contact Number'>
                        </div>
                        <div class="mb-3">
                          <textarea name="Business Description" class='form-control' rows="3" placeholder='Describe Business'></textarea>
                        </div>
                </div>
                <input type="button" value="Add Business" class="btn btn-primary">
              </form>
              </div>

              <!-- Wallet/Money Received for funding-->
              <!-- <div class="col-lg-6 g-3">
                Wallet
                <div class="onboard-container">
                  <div class="loader">
                      <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_lndg7fhf.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
                  </div>
                  <div class="up">
                      <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_kfzgxkvq.json"  background="transparent"  speed="1" loop  autoplay></lottie-player>
                  </div>
                  <div class="confetti">
                      <lottie-player class="success-anim" src="https://assets10.lottiefiles.com/packages/lf20_rovf9gzu.json"  background="transparent"  speed="1"></lottie-player>
                  </div>
                  <h1></h1>
                  <p class="desc"></p>
                  <a href="#" class="onboard"></a>
              </div>

                <div class="container" id="wallet">
                  <button class="btn btn-primary">Wallet</button>
                </div>
              </div> -->

          </div>

          
    </div>

    <!-- Display Businesses Added By user here -->

    <div class="container container-light bg-light shadow" id='businesses'></div>


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

    
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="/Blockchain Hackathon/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>