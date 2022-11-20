<?php
include "connect.php";

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

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>


</body>


</html>