

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
        <form action="" method="post" enctype="multipart/form-data">
        <h2>Register</h2>
    <div class="form-group3">
        <label for="customername">First Name</label>
            <input type="text" name="name" id="name" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="customersurname">Surname</label>
                <input type="text" name="customersurname" id="customersurname" class="registerInput" required>
    </div>

    <div class="form-group3">
            <label for="email">Email</label>
                <input type="email" name="email" id="email" class="registerInput" required>
    </div>

    <div class="form-group3">
        <label for="password1">Password</label>
            <input type="password" name="password" id="password" class="registerInput" required>
        </div>

<div class="form-group3">
    <label for="password2">Re-enter Password</label>
        <input type="password" name="password2" id="password2" class="registerInput" required>
</div>

<p>By creating an account you agree to our <a href="">Terms & Conditions</a></p>

<input type="submit" class="buttonregister" name="add-product" value="Register">
<a href="" class="btn">Return</a>
</form>
    </div>
</div>
<section id="adminFooter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Ctrlr.com</h4>
    </div>
</section>
    
    <script src="script.js"></script>
</body>

<?php
include "config.php";

$email = "";
$password = "";
$confirm_pass = "";
$firstname ="";
$middlename = "";
$lastname = "";
$address = "";
$user_des = "Customer";

$email_e = "";
$password_e = "";
$confirm_pass_e ="";
$firstname_e = "";
$middlename_e = "";
$lastname_e = "";
$address_e = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["email"]))){
        $email_e = "Please enter an email";

    }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["email"]))){
        $email_e = "Emails contain letters, numbers and underscores";

    }else{
        $sql = "SELECT id FROM users WHERE user_email = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = trim($POST["email"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_e = "Email already in use";

                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Error, please try again";
            }
            mysqli_stmt_close($stmt);

        }
    }

    if(empty(trim($_POST["password"]))){
        $password_e = "Please enter an password";

    }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["password"]))){
        $password_e = "Passwords only contain letters, numbers and underscores";

    }elseif(strlen(trim($_POST["password"]))>20 && strlen(trim($_POST["password"]))<5){
        $password_e = "Passsword must be between 5 and 20 characters";
    }else{
        $password = trim($_POST["password"]);
    }
    if(empty(trim($_POST["confirm_pass"]))){
        $confirm_pass_e = "Please confirm your password";
    }else{
        $confirm_pass = trim($_POST ["confirm_pass"]);
        if(empty($password_e) && ($password != $confirm_pass)){
            $confirm_pass_e = "Passwords do not match";
        }
    }

    if(empty(trim($_POST["firstname"]))){
        $firstname_e = "Please enter a firstname";

    }elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["firstname"]))){
        $firstname_e = "Firstnames only contain letters";
    }else{
        $firstname = trim($_POST["firstname"]);
    }

    if(empty(trim($_POST["lastname"]))){
        $lastname_e = "Please enter a lastname";

    }elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["lastname"]))){
        $lastname_e = "Lastnames only contain letters";
    }else{
        $lastname = trim($_POST["lastname"]);
    }

    if(empty(trim($_POST["address"]))){
        $address_e = "Please enter an address";

    }elseif(!preg_match('/^[a-zA-Z0-9]+$/', trim($_POST["address"]))){
        $address_e = "Addresses only contain letters";
    }else{
        $address = trim($_POST["address"]);
    }

    if(empty($email_e) && empty($password_e) && empty($confirm_pass_e) && empty($firstname_e) && empty($lastname_e) && empty($address_e)){
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_email, user_password, user_address, user_designation) VALUES (?, ?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "sssss" , $param_firstname, $param_lastname, $param_email, $param_password, $param_address, $param_userdes);
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_password = password_hash($password,PASSWORD_DEFAULT);
            $param_address = $address;
            $param_userdes = $user_des;

            if(mysqli_stmt_execute($stmt)){
                echo("Success!");
                header("location: about.php");

            }else{
                echo "Error, please try again";
            }

            mysqli_stmt_close($stmt);

        }
    
    }
    mysqli_close($link);
}

?> 