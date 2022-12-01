<?php
require "config.php";




if(!(isset($_SESSION['user_id']))){
    echo "You need to log in!";
    header("location:register.php");

}
if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION['user_email']);
    header("location:register.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Sign up or Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if(isset($_SESSION["user_id"])) {
                $id = $_SESSION["user_id"];
                
                $sql = "SELECT user_firstname FROM user WHERE user_id = '$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $name = $row['user_firstname'];
               
                
            
                
                echo "<li><a href='myAccount.php' class='active'>$name</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            } else {
            echo "<li><a href=\"register.php\">Sign Up/In</a></li>";
            }
            ?>
            
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
</body>

<section id ="orders">
    <p> Here is a list of previous orders. <p>
</section>

<?php

//MySQL Query to read data
$id = $_SESSION["user_id"];
$sql = ("SELECT * from orders where user_id = '$id' ");
$result = mysqli_query($conn, $sql);

while ($row1 = mysqli_fetch_array($result)) {
    ?>
    <div class="form">
    <h2>---Details---</h2>
    <!-- Displaying Data Read From Database -->
    <span>Product ID: </span> <?php echo $row1['product_id']; ?>
    <span>Product Name: </span> <?php echo $row1['product_name']; ?>
    <span>Product Colour: </span> <?php echo $row1['product_colour']; ?>
    <span>Product Price: </span> <?php echo $row1['product_price']; ?>
    </div>
    <?php
    }
    ?>