<?php 
require "config.php";

if(!(isset($_SESSION["username"]))) {
        header("Location:adminLogin.php");
            
}

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
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                
                <li><a href="admin.php">Dashboard</a></li>
                <li><a class="active" href="customer.php">Customer</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="items.php">Products</a></li>
                <?php 

            if(isset($_SESSION["username"])) {
               
            echo "<li><a href=\"logoutAdmin.php\">Logout</a></li>";

        }

?>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <div class="dropdown">
                    <button class="dropbutton">Mode</button>
                    <div class="dropdownMenu">
                        <button onclick="darkMode()">Darkmode</button>
                        <button onclick="lightMode()">LightMode</button>
                    </div>
                  </div>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <?php

    include "connect.php";
    
        
        
            $sql = ("SELECT user_id, user_firstname, user_lastname, user_email, user_address FROM user");
            $result = mysqli_query($conn, $sql);
        echo"
        <div style='margin-left:10%; margin-right:5%;  min-width:80vw; min-height: 20vw;'>
        <div class ='scroll-div'>
            <div class ='scroll-object'>
                <table align ='center' border='10px' style='width:100%; min-width:800px; line-height:100px; background:grey'>
                    <tr>
                        <th colspan ='3'><h1> Customers </h1></th>
                        <th colspan ='3'>
                        
                        <form class='search', method='post' ,  autocomplete='off'>
                            <input type='text' name='search' required/>
                            <button type='searchSubmit'> Search </button>

                        </form>
                        
                        
                        </th>
                    </tr>
                    <t>
                        <th> ID </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                        <th> Address </th>
                        
                    </t>";
                    
                        if (isset($_POST['search'])){
                            $name = $_POST['search'];
                            $sql = ("SELECT user_id, user_firstname, user_lastname, user_email, user_address FROM user where user_firstname = '$name' or user_lastname = '$name'");
                            $result = mysqli_query($conn, $sql);
                            while($rows=mysqli_fetch_assoc($result)) {
                                echo "
                            <tr style='text-align: center;'>
                            <td>{$rows['user_id']} </td>
                            <td>{$rows['user_firstname']} </td>
                            <td>{$rows['user_lastname']} </td>
                            <td>{$rows['user_email']} </td>
                            <td>{$rows['user_address']} </td>";
                            
                        
                            }
                        }

                    
                        while($rows=mysqli_fetch_assoc($result)) 
                        {
                            echo "
                        <tr style='text-align: center;'>
                            
                            <td>{$rows['user_id']} </td>
                            <td>{$rows['user_firstname']} </td>
                            <td>{$rows['user_lastname']} </td>
                            <td>{$rows['user_email']} </td>
                            <td>{$rows['user_address']} </td>";
                            
                        }
                            
                    echo" </tr>
                        
                    </table>
                </div>
            </div>
        </div>";
                    

        

        ?> 

<section id="adminFooter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Ctrlr.com</h4>
    </div>
</section>

    <script src="script.js"></script>
</body>




