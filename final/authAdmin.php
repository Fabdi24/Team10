<?php

require 'config.php';
    

    
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $result = mysqli_query($conn, "SELECT * from admin WHERE username = '$username'");
    $row = mysqli_fetch_assoc ($result);

    if(mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            
            
            $_SESSION["username"] = $row["username"];

            header("Location:admin.php");
            

        } else {
            echo "<script> alert('Wrong password') </script>";
            header("Location: adminLogin.php");
        }

    }
    else {
        echo "<script> alert('User not registered') </script>";
        header("Location: adminlogin.php");
    }
} else {

    header("Location: adminlogin.php");

}
