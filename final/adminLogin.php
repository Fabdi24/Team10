<?php 
require "config.php";

if(isset($_SESSION["username"])) {
    header("Location:admin.php");
        
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
            <li><a class="active">Admin</a></li>
            
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
  
  <form class="modal-content" method="post" action="authAdmin.php" >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="Submit">Login</button>
    </div>
    </form>
    
  
</div>
<body> 