<?php
//Updatign profile
if(isset($_POST["update"])){

  $fname = htmlspecialchars($_POST["fname"]);
  $lname = htmlspecialchars($_POST["lname"]);
  $email = htmlspecialchars($_POST["email"]);
  $cnumber = htmlspecialchars($_POST["cnumber"]);
  $password = htmlspecialchars($_POST["password"]);
  $cpassword = htmlspecialchars($_POST["cpassword"]);


}else{
  // echo "Error";
}

//Adding a business
if(isset($_POST["Add"])){
  $bname = htmlspecialchars($_POST["cname"]);
  $bemail = htmlspecialchars($_POST["bemail"]);
  $cnumber = htmlspecialchars($_POST["cnumber"]);
  $description = htmlspecialchars($_POST["description"]);
  $image = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_folder = 'uploaded_img/'.$image;
  $location = $_POST['location'];
  $created = $_POST['created'];
  $amount = $_POST['amount'];


  echo "Submitted" ;
}
else{
  // echo "error";
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
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/profile.php">Refentse</a></li>
              <!-- <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/wallet.html">Wallet</a></li> -->
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Sign-up.php">Sign-Up</a></li>
              <li><a class="dropdown-item text-decoration-none link-secondary " href="/Blockchain Hackathon/assets/pages/Login.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        </div>
    </div>
  </nav>


        
    <div class="container row">
        
          
          <form action="profile.php" method="POST" class='container container-light bg-light rounded p-5 mt-3 col-lg-8 col-sm-12'>
               <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                  Edit Profile
               </h2>
              <div class="row">
                  <div class="mb-3">
                    Balance: 0.00 ETH
                  </div>
                    <div class="col mb-3">
                      <label class="fomr-label">First Name</label>
                      <input type="text" class='form-control' name='fname' placeholder='Refentse'>
                    </div>
                    <div class="col mb-3">
                      <label class="fomr-label">Last Name</label>
                      <input type="text" class='form-control'name='lname' placeholder='Makgoba'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Email</label>
                      <input type="email" class='form-control' name='email' placeholder='refentse@mail.com'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Contact Number</label>
                      <input type="tel" class='form-control' name='cnumber' placeholder='0725587744'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Password</label>
                      <input type="password" class='form-control' name='password' placeholder='*******'>
                    </div>
                    <div class="mb-3">
                      <label class="fomr-label">Confirm Password</label>
                      <input type="password" class='form-control' name='cpassword' placeholder='*******'>
                    </div>
            </div>
            <input type="submit" value="Update Changes" name='update' class="btn btn-primary">
          </form>

          <!-- Find Funding for business -->
          <div class="row">
              <div class="m-5 g-3">
              <form action="profile.php" method="POST" class='container container-light bg-light rounded p-5'>
                  <h2 class="text-center mb-5 shadow-sm p-3 display-4">
                      Add A Business
                  </h2>
                  <div class="row">
                        <div class="mb-3">
                          <label for="business image"></label>

                        </div>
                        <div class="mb-3">
                          <label for="Company Image">Insert Your Image/Logo</label>
                        <input type="file" class='form-control' id='img' name="image" accept="image/jpg, image/jpeg, image/png" class="box" multiple="multiple" required><div id="preview"></div>
                        </div>
                        <div class="col mb-3">
                          <label class="fomr-label">Business Name</label>
                          <input type="text" name="cname" id='bname' class="form-control" placeholder="enter the company name" required></div>
                          <div class="mb-3">
                          <label class="fomr-label">Email</label>
                          <input type="email" class='form-control' id='email' name='bemail' placeholder='Email'>
                        </div>
                        <div class="mb-3">
                          <label class="fomr-label">Contact Number</label>
                          <input type="tel" class='form-control' id='cnumber' name='cnumber' placeholder='Contact Number'>
                        </div>
                        <div class="mb-3">
                          <label for="Location">Where is the business located</label>
                          <input type="text" class="form-control" id='location' name='location' placeholder='Where is the business located'>
                        </div>
                        <div class="mb-3">
                          <label for="Establishment">When was your business established?</label>
                          <input type="text" name='created' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="Amount">What is the amount of funds you are seeking from investors?</label>
                          <input type="text" name='amount' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="Stake">How much percentage are you willing to give to your investors?</label>
                          <input type="text" name='option' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="potential">How much revenue has been generated by your company ever since being established</label>
                          <input type="text" name='potential' class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="Description">Give a description of your business and your goal/vision</label>
                          <textarea name="Business Description" name='description' class='form-control' rows="3" placeholder='Describe Business'></textarea>
                        </div>
                </div>
                <input type="submit" name='Add' onclick='Add()' value="Add Business" class="btn btn-primary">
              </form>
              </div>



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

    
    <script src="https://cdn.jsdelivr.net/gh/web3@.js@1.0.0-beta.36/dist/web3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="/Blockchain Hackathon/assets/js/main.js"></script>
    <script>
      var contract;

      $(document).ready(function(){
         web3 = new web3(web3.currentProvider);

         var address = "0x5bD0D93BA5C0ac754Ed26064218e8ea8ce6bd4Ef";
         var abi = [
                    {
                      "inputs": [
                        {
                          "internalType": "uint256",
                          "name": "amount",
                          "type": "uint256"
                        }
                      ],
                      "name": "send",
                      "outputs": [],
                      "stateMutability": "nonpayable",
                      "type": "function"
                    },
                    {
                      "inputs": [],
                      "stateMutability": "nonpayable",
                      "type": "constructor"
                    },
                    {
                      "inputs": [
                        {
                          "internalType": "uint256",
                          "name": "amount",
                          "type": "uint256"
                        }
                      ],
                      "name": "withdraw",
                      "outputs": [],
                      "stateMutability": "nonpayable",
                      "type": "function"
                    },
                    {
                      "inputs": [
                        {
                          "internalType": "address",
                          "name": "",
                          "type": "address"
                        }
                      ],
                      "name": "balance",
                      "outputs": [
                        {
                          "internalType": "uint256",
                          "name": "",
                          "type": "uint256"
                        }
                      ],
                      "stateMutability": "view",
                      "type": "function"
                    },
                    {
                      "inputs": [],
                      "name": "sender",
                      "outputs": [
                        {
                          "internalType": "address",
                          "name": "",
                          "type": "address"
                        }
                      ],
                      "stateMutability": "view",
                      "type": "function"
                    },
                    {
                      "inputs": [],
                      "name": "walletBalance",
                      "outputs": [
                        {
                          "internalType": "uint256",
                          "name": "",
                          "type": "uint256"
                        }
                      ],
                      "stateMutability": "view",
                      "type": "function"
                    }
                  ];
         contract = new web3.eth.Contract(abi,address);

         contract.method.walletBalance().callthen((function(balance){
          $("#balance").html(balance);
         }))
      })
    </script>
  </body>
</html>