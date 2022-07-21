<?php

include 'config.php';

session_start();

/*$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}*/

if(isset($_POST['add_information'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $amount = $_POST['amount'];
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;
    $location = $_POST['location'];
    $created = $_POST['created'];
    $description = $_POST['description'];
    $option = $_POST['option'];
    $potential = $_POST['potential'];

    $company = mysqli_query($conn, "SELECT name FROM `bussiness_info` WHERE name = '$name'") or die('query failed');

    if(mysqli_num_rows($company) > 0){
        $message[] = 'company alresdy exist';
    }else{
        $add_campany_query = mysqli_query($conn, "INSERT INTO `bussiness_info` (`name`, `amount`, `image`, `location`, `created`, `description`, `payment option`, `potential`) VALUES ('$name', '$amount', '$image', '$location', '$created', '$description', '$option', '$potential');") or die('query failed');

        if($add_campany_query){
            if($image_size > 2000000){
                $message[] = 'image size is too large';
            }else{
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'campany added successfully!';
            }
        }else{
            $message[] = 'campany could not be added!';
        }
    }
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_image_query = mysqli_query($conn, "SELECT image FROM `bussiness_info` WHERE id = '$delete_id'") or die('query failed');
    $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
    unlink('uploaded_img/'.$fetch_delete_image['image']);
    mysqli_query($conn, "DELETE FROM `bussiness_info` WHERE id = '$delete_id'") or die('query failed');
    header('location:grantee_page.php');
}

if(isset($_POST['update_information'])){

    $update_p_id = $_POST['update_p_id'];
    $update_name = $_POST['update_name'];
    $update_amount = $_POST['update_amount'];
    $update_location = $_POST['update_location'];
    $update_created = $_POST['update_created'];

    mysqli_query($conn, "UPDATE `bussiness_info` SET created = '$update_created', location = '$update_location', name = '$update_name', amount = '$update_amount' WHERE id = '$update_p_id'") or die('query failed');

    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_folder = 'uploaded_img/'.$update_image;
    $update_old_image = $_POST['update_old_image'];

    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'image file size is too large';
        }else{
            mysqli_query($conn, "UPDATE `bussiness_info` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
            move_uploaded_file($update_image_tmp_name, $update_folder);
            unlink('uploaded_img/'.$update_old_image);
        }
    }

    header('location:grantee_page.php');

}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>company</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- grantee css file link  -->
        <link rel="stylesheet" href="css/grantee.css">
    </head>

    <body>
    
    <?php //include 'grantee_header.php'; ?>

    <!-- product CRUD section starts  -->

    <section class="add-company">

        <h1 class="title">campany</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <h3>business information</h3>
            <input type="text" name="name" class="box" placeholder="enter the company name" required>
            <input type="number" min="0" name="amount" class="box" placeholder="enter the amount you need form the inverstor" required>
            <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" multiple="multiple" required><div id="preview"></div>
            <input type="text" name="location" class="box" placeholder="enter where is your campany located" required>
            <input type="text" name="created" class="box" placeholder="enter when was your company created" required>
            <input type="text" name="description" class="box" placeholder="enter the description of your company" required>
            <input type="text" name="option" class="box" placeholder="enter your more detailed payment option and how much are you willing to give back" required>
            <input type="text" name="potential" class="box" placeholder="what potential does your campany have or how much does it makes a month" required>
            <input type="submit" value="add_information" name="post" class="btn">
        </form>

    </section>

    <!-- product CRUD section ends -->

    <!-- show details  -->

    <section class="display">

        <div class="box-container">

            <?php
                $select_company = mysqli_query($conn, "SELECT * FROM `bussiness_info`") or die('query failed');
                if(mysqli_num_rows($select_company) > 0){
                    while($fetch_company = mysqli_fetch_assoc($select_company)){
            ?>
            <div class="box">
                <img src="uploaded_img/<?php echo $fetch_company['image']; ?>" alt="">
                <div class="name"><?php echo $fetch_company['name']; ?></div>
                <div class="amount">R<?php echo $fetch_company['amount']; ?></div>
                <a href="grantee_page.php?update=<?php echo $fetch_company['id']; ?>" class="option-btn">update</a>
                <a href="grantee_page.php?delete=<?php echo $fetch_company['id']; ?>" class="delete-btn" onclick="return confirm('delete this?');">delete</a>
            </div>
            <?php
                }
            }else{
                echo '<p class="empty">no information added yet!</p>';
            }
            ?>
        </div>

    </section>

    <section class="editting-campany-form">

        <?php
        if(isset($_GET['update'])){
            $update_id = $_GET['update'];
            $update_query = mysqli_query($conn, "SELECT * FROM `bussiness_info` WHERE id = '$update_id'") or die('query failed');
            if(mysqli_num_rows($update_query) > 0){
                while($fetch_update = mysqli_fetch_assoc($update_query)){
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
            <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
            <img src="uploaded_img/<?php echo $fetch_update['image']; ?>" alt="">
            <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="box" required placeholder="enter the company name">
            <input type="number" name="update_amount" value="<?php echo $fetch_update['amount']; ?>" min="0" class="box" required placeholder="enter the amount you need form the investor">
            <input type="text" name="update_location" value="<?php echo $fetch_update['location']; ?>" class="box" placeholder="enter where is your campany located" required>
            <input type="text" name="update_created" value="<?php echo $fetch_update['created']; ?>" class="box" placeholder="enter when was your company created" required>
            <input type="text" name="update_description" value="<?php echo $fetch_update['description']; ?>" class="box" placeholder="enter the description of your company" required>
            <input type="text" name="update_potential" value="<?php echo $fetch_update['potential']; ?>" class="box" placeholder="what potential does your campany have or how much does it makes a month" required>
            <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" value="update" name="update_information" class="btn">
            <input type="reset" value="cancel" id="close-update" class="option-btn">
        </form>
        <?php
                }
            }
            }else{
                echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
            }
        ?>

    </section>

    <!-- grantee js file link  -->
    <script src="js/grantee.js"></script>

    </body>
</html>