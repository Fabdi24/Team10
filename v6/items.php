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
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a class="active" href="items.php">Products</a></li>
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
    require "config.php";
        
        
            $sql = ("SELECT id, name, description, colour, quantity, price FROM products");
            $result = mysqli_query($conn, $sql);
        echo"
        <div style='margin-left:10%; margin-right:5%;  min-width:80vw; min-height: 20vw;'>
        <div class ='scroll-div'>
            <div class ='scroll-object'>
                <table align ='center' border='10px' style='width:100%; min-width:800px; line-height:100px; background:grey'>
                    <tr>
                        <th colspan ='4'><h1> Products </h1></th>
                        <th colspan ='4'>
                        
                        <form class='search', method='post' ,  autocomplete='off'>
                            <input type='text' name='search' required/>
                            <button type='searchSubmit'> Search </button>

                        </form>
                        
                        
                        </th>
                    </tr>
                    <t>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Description </th>
                        <th> Colour </th>
                        <th> Quantity </th>
                        <th> Price(£) </th>
                        
                    </t>";
                    
                        if (isset($_POST['search'])){
                            $name = $_POST['search'];
                            $sql = ("SELECT id, name, description, colour, quantity, price FROM products where name = `$name`");
                           
                            $result = mysqli_query($conn, $sql);
                            while($rows=mysqli_fetch_assoc($result)) {
                                echo "
                            <tr style='text-align: center;'>
                            <td>{$rows['id']} </td>
                            <td>{$rows['name']} </td>
                            <td>{$rows['description']} </td>
                            <td>{$rows['colour']} </td>
                            <td>{$rows['quantity']} </td>
                            <td>{$rows['price']} </td>";
                            
                        
                            }
                        }

                    
                        while($rows=mysqli_fetch_assoc($result)) 
                        {
                            echo "
                        <tr style='text-align: center;'>
                            
                            <td>{$rows['id']} </td>
                            <td>{$rows['name']} </td>
                            <td>{$rows['description']} </td>
                            <td>{$rows['colour']} </td>
                            <td>{$rows['quantity']} </td>
                            <td>{$rows['price']} </td>";
                            
                        }
                            
                    echo" </tr>
                        
                    </table>
                </div>
            </div>
        </div>";
                    

        

        ?> 
                <a href="addItems.php" class="btnproduct">Add Product</a>
        </class>
    </div>
</div>
</div>

<section id="adminFooter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Ctrlr.com</h4>
    </div>
</section>
    
    <script src="script.js"></script>
</body>

</php>