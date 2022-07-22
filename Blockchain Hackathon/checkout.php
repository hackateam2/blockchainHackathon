<?php

include 'config.php';

session_start();

/*$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}*/

if(isset($_POST['fund_btn'])){

    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $tax_id = $_POST['number'];
    $amount = $_POST['amount'];

    $order_query = mysqli_query($conn, "SELECT * FROM `fund` WHERE receiver_adress = '$address' AND Tax_id = '$tax_id' AND amount_in_ETH = '$amount'") or die('query failed');

    if(mysqli_num_rows($order_query) > 0){
        $message[] = 'already funded!'; 
    }else{
        mysqli_query($conn, "INSERT INTO `fund` (`receiver_adress`, `Tax_id`, `amount_in_ETH`) VALUES ('$address', '$tax_id', '$amount');") or die('query failed');
        $message[] = 'funded successfully!';
    }   
    
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>checkout</title>

        <!-- font awesome cdn link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../Blockchain Hackathon/assets/css/style.css">
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
    
    <?php// include 'header.php'; ?>

    <div class="heading">
    <h3>Fund</h3>
    <p> <a href="index.html">home</a> / Fund </p>
    </div>

    <div class="container ">

    <form action="" method="post" class='container container-light bg-light rounded p-5'>
    <h2 class="text-center mb-5 shadow-sm p-3 display-4">Fund Business</h2>
        <div class="row">
            <div class="col mb-3">
                <label class="fomr-label">Receiver Address</label>
                <input type="text" name="address" required placeholder="ETH Address">
            </div>
            <div class="mb-3">
                <label class="fomr-label">Tax Identification Number</label>
                <input type="number" name="number" required placeholder="Tax Identification Number">
            </div>
            <div class="mb-3">
                <label class="fomr-label">Amount in ETH</label>
                <input type="text" name="amount" required placeholder="Amount">
            </div>
        </div>
        <input type="submit" value="Fund" class="btn" name="fund_btn" class="btn btn-primary">

</div>

    <?php //include 'footer.php'; ?>

    <!-- investor js file link  -->
    <script src="js/investor.js"></script>

    </body>
</html>