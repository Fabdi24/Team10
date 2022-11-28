<?php
    require 'config.php';
    if (!empty($_SESSION["id"])) {
        header("Location: index.php");
    }

    if (isset($_POST['Submit'])) {
        require_once('connect.php');

        $email = $password = $confirm_pass = $firstname = $lastname = $address = $user_designation ='';
        
        $email = $_POST['email'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $user_designation = 'customer';
        
 
        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE user_email ='$email'");
        if (mysqli_num_rows($duplicate)> 0) {
            echo "<script> alert('Email has been taken'); </script>";
        } elseif ($password == $confirmPassword)
        { $password = md5($password);
        
        $sql = "INSERT INTO user (user_firstname, user_lastname, user_email, user_password, user_address, user_designation)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$address', '$user_designation')";
        
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo("Success!");
            header("Location: login.php");
        }
           
        }else if ($password != $confirmPassword) {
          echo  "<script> alert('Passwords do not match'); </script>";} }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS2TP</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <div class="dropdown">
            <button class="dropbutton">Mode</button>
            <div class="dropdownMenu">
                <button onclick="darkMode()">Darkmode</button>
                <button onclick="lightMode()">LightMode</button>
            </div>
          </div>
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <div class="containerProduct">
    <div class="pForm">
        <form action="register.php" method="post">
        <h2>Register</h2>
    <div class="form-group3">
        <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="lsurname">Surname</label>
                <input type="text" name="lname" id="lname" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="email">Email</label>
                <input type="email" name="email" id="email" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="address">Address</label>
                <input type="text" name="address" id="address" class="registerInput" required>
    </div>

    <div class="form-group3">
        <label for="password1">Password</label>
            <input type="password" name="password" id="password" class="registerInput" required>
        </div>

<div class="form-group3">
    <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" class="registerInput" required>
</div>

<p>By creating an account you agree to our <a>Terms & Conditions</a></p>

<button type="submit" class="buttonregister" name="Submit" value="Register"> Register </button>


</form>

<p> Already a user? <a href="login.php">Log in</a>  </p>
    </div>
</div>
<section id="adminFooter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Ctrlr.com</h4>
    </div>
</section>
    
    <script src="script.js"></script>
</body>

