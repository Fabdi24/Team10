<?php
require config.php;
require connect.php;

session_start();

if(isset($_SESSION['user_email'])){
    $_SESSION['msg'] = " You need to log in!";
    header("location : login.php");

}
if(isset($_GET["logout"])){
    session_destroy();
    unset($_SESSION['user_email']);
    header("location : login.php");
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
                <li><a class="active" href="blog.php">My Account</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
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
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("ecom3", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from orders where user_email= 'user_email' ", $connection);
while ($row1 = mysql_fetch_array($query)) {
    ?>
    <div class="form">
    <h2>---Details---</h2>
    <!-- Displaying Data Read From Database -->
    <span>E-mail:</span> <?php echo $row1['employee_email']; ?>
    <span>Product</span> <?php echo $row1['product']; ?>
    <span>Quantity:</span> <?php echo $row1['quantity']; ?>
    <span>Status:</span> <?php echo $row1['status']; ?>
    </div>
    <?php
    }
    ?>