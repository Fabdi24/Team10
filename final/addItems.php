<?php
    if (isset($_POST['Submit'])) {
        require_once('config.php');

        $name =  $price = $colour = $image = $description = $quantity ='';

        $name = $_POST['name'];
        $price = $_POST['price'];
        $colour = $_POST['colour'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $quantity = $_POST[`quantity`];

        

        $duplicate = mysqli_query($conn, "SELECT * FROM products WHERE name ='$name'");
        if (mysqli_num_rows($duplicate)> 0) {
            echo "<script> alert('Product has already been added'); </script>";
        }
        else {
            $sql = "INSERT INTO products (name, description, colour, quantity, price, image)
            VALUES (`$name`, `$description`, `$colour`, `$quantity`, `$price`, $image`)";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo("Success!");
                
        }


    }
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
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="items.php">Products</a></li>
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
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <div class="containerProduct">
    <div class="pForm">

        <form action="addItems.php" method="post" enctype="multipart/form-data">
        <h2>Add Product</h2>
    <div class="form-group3">
        <label for="name">Name</label>
            <input type="text" required name="name" id="name" class="productInput">
    </div>

    <div class="form-group3">
            <label for="price">Price</label>
                <input type="number" required name="price" id="price" class="productInput">
    </div>

    <div class="form-group3">
            <label for="name">Colour</label class="productInput1">
            <select name="colour" id="cars">
                <option value="black">black</option>
                <option value="white">white</option>
                <option value="red">red</option>
                <option value="yellow">yellow</option>
                <option value="green">green</option>
                <option value="blue">blue</option>
                <option value="purple">purple</option>
              </select>
    </div>

    <div class="form-group3">
        <label for="image">Image</label>
            <input type="file" required name="image" aimage id="image" class="proccept="image/jpg, image/jpeg, image/png" >
            
        </div>

<div class="form-group3">
    <label for="description">Description</label>
        <input type="text" required name="description" id="description" class="productInput">
</div>

<div class="form-group3">
    <label for="quantity">Quantity</label>
        <input type="number" required name="quantity" id="quantity" class="productInput">
</div>

<input type="submit" class="btn" name="Submit" value="Add Product">

<a href="items.php" class="btn">Return</a>
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

