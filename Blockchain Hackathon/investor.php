<?php

include 'config.php';

session_start();

/*$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invest</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!--investor css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php //include 'header.php'; ?>

<div class="heading">
<h3>bussinesses to invest to</h3>
<p> <a href="index.html">home</a> / fund a business </p>
</div>

<section class="company">



<div class="box-container">

    <?php  
        $select_company = mysqli_query($conn, "SELECT * FROM `bussiness_info`") or die('query failed');
        if(mysqli_num_rows($select_company) > 0){
            while($fetch_company = mysqli_fetch_assoc($select_company)){
    ?>
    <form action="" method="post" class="box">
        <img class="image" src="uploaded_img/<?php echo $fetch_company['image']; ?>" alt="">
        <div class="name"><?php echo $fetch_company['name']; ?></div>
        <div class="amount">R<?php echo $fetch_company['amount']; ?></div>
        <div class="location"><?php echo $fetch_company['location']; ?></div>
        <div class="created"><?php echo $fetch_company['created']; ?></div>
        <div class="description"><?php echo $fetch_company['description']; ?></div>
        <div class="option"><?php echo $fetch_company['payment option']; ?></div>
        <div class="potential"><?php echo $fetch_company['potential']; ?></div>
        <!--<input type="hidden" name="product_name" value="<?php //echo $fetch_company['name']; ?>">
        <input type="hidden" name="product_amount" value="<?php //echo $fetch_company['amount']; ?>">
        <input type="hidden" name="product_image" value="<?php //echo $fetch_company['image']; ?>"> -->
        <div class="flex"><a href="checkout.php" class="btn">fund</a></div> 
    </form>
    <?php
        }
    }else{
        echo '<p class="empty">no bussinesses to invest to yet!</p>';
    }
    ?>
</div>

</section>

<?php //include 'footer.php'; ?>

<!-- investor js file link  -->
<script src="js/investor.js"></script>

</body>
</html>