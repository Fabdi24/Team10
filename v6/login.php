
<?php 
require "config.php";
if(isset($_SESSION["user_id"])) {
  header("Location:index.php");
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
<section id="header">
<a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>

    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
           <?php 
            

            if(isset($_SESSION["user_id"])) {
                $id = $_SESSION["user_id"];
                //$name = $_SESSION["user_firstname"];
                $sql = "SELECT user_firstname FROM user WHERE user_id = '$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $name = $row['user_firstname'];
               
                
            
                echo "<li><a href='myAccount.php'>Account</a></li>";
                echo "<li><a href=\"myAccount.php\">$name</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            } else {
            echo "<li><a href=\"register.php\">Sign Up/In</a></li>";
            }
            ?>
            
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            
            
            <a href="shop.php" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php
        "><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
      
<body>
<div id="id01" class="modal">
  
  <form class="modal-content" method="post" action="auth.php" >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Email Address</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="Submit">Login</button>
    </div>
    </form>
    <div class="container" style="background-color:#f1f1f1">
      <p> Not Registered? <a href="login.php">Register here</a>  </p>
    </div>
  
</div>
<body> 