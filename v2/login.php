<?php

require 'connect.php';
    

    
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $result = mysqli_query($conn, "SELECT * from CTRLR WHERE email = '$email'");
    $row = mysqli_fetch_assoc ($result);

    if(mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            session_start();
            
            $_SESSION["id"] = $row["id"];

            header("Location: index.php");


        } else {
            echo "<script> alert(\"Wrong password\"); </script>";
            header("Location: login.php");
        }

    }
    else {
        echo "<script> alert(\"User not registered\"); </script>";
        header("Location: login.php");
    }
} else {

    header("Location: login.php");

}

?>