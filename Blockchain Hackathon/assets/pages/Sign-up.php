<?php
include('config.php');
if(isset($_POST['submit'])){
  $fname = htmlspecialchars($_POST["fname"]);
  $lname = htmlspecialchars($_POST["lname"]);
  $email = htmlspecialchars($_POST["email"]);
  $cnumber = htmlspecialchars($_POST["cnumber"]);
  $password = htmlspecialchars($_POST["password"]);
  $cpassword = htmlspecialchars($_POST["cpassword"]);
  $country = htmlspecialchars($_POST["country"]);
  $taxNumber = htmlspecialchars($_POST["taxNumber"]);

  if($password == $cpassword){
     $sql = 'INSERT INTO users VALUES ($fname,$lname,$email,$country,$taxNumber,$cnumber,$cpassword)';
  }

  // $details =  $fname." ".$lname." ".$email." ".$cnumber." ".$password." ".$cpassword;
  // echo $details ;
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


    <div class="container mt-5">
    <form action="Sign-up.php" method="POST" class='container container-light bg-light rounded p-5'>
               <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                  Sign-Up
               </h2>
              <div class="row">
                    <div class="col mb-3">
                      <label class="fomr-label">First Name</label>
                      <input type="text" class='form-control' placeholder='First Name' name='fname'>
                    </div>
                    <div class="col mb-3">
                      <label class="fomr-label">Last Name</label>
                      <input type="text" class='form-control' placeholder='Last Name' name='lname'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Email</label>
                      <input type="email" class='form-control' placeholder='Email' name='email'>
                    </div>
                    <div class="mb-3">
                      <label for="fomr-label">Country of Origin</label>
                      <input type="text" name="country" id="" class='form-control' placeholder='Country of Origin'>
                    </div>
                    <div class="mb-3">
                      <label for="fomr-label">If you are a South African Citizen Enter Tax Identification Number Below</label>
                      <input type="text" name="taxNumber" id="" class='form-control' placeholder='Tax Identification Number'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Contact Number</label>
                      <input type="tel" class='form-control' placeholder='Contact Number' name='cnumber'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Password</label>
                      <input type="password" class='form-control' placeholder='Password' name='password'>
                    </div>
                    <div class="mb-3">
                    <label class="fomr-label">Confirm Password</label>
                      <input type="password" name="cpassword" class='form-control' id="password" placeholder='Confirm Password'>
                    </div>
                    </div>
                    <input type="submit" value="SignUp"  name='submit' class="btn btn-primary" id='btnSignUp'>

                    <div class="mb-3">
                        <p>Already Have An Account? Login <a href="/Blockchain Hackathon/assets/pages/Login.php">Here</a></p>
                    </div>
                    
                    
            </div>
            
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>