<?php

require_once "config.php";

if (!(isset($_SESSION["user_id"]))) {
    header("Location:register.php");
}




$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ctrlr.com</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
    
</head>

<body>

<section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="myAccount.php">My Account</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="#" class="active"><i class="far fa-shopping-bag"></i></a></li>
                <a id="close" href="#"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#cart</h2>

    </section>

    <main>
        
        <?php
      
        
        while($row_cart = mysqli_fetch_assoc($all_cart)){
            $sql = "SELECT * FROM products WHERE id =".$row_cart["product_id"];
            $total_products = $conn->query($sql);
            while($row = mysqli_fetch_assoc($total_products)){
    
        ?>
        <div class="card">
            <div class="image">
            <img <?php echo $row["image"]; ?>  alt="">
            </div>
        <div class ="caption">
            <p class="product_name"> <?php echo $row["name"]; ?></p>
            <p class="price">£<?php echo $row["price"]; ?></p> 
            <?php
            $name = $row["name"];
            $image = $row["image"];
            $price = $row["price"];
            $description = $row["description"];
            $quantity = $row["quantity"];
            $colour = $row["colour"];
            $product_id = $row["id"];
            
           
            
            $id = $_SESSION["user_id"];
            
            
            

            $insert = "INSERT INTO orders (user_id, product_id, product_name, product_description, product_colour, product_price, product_image)
            VALUES ('$id', '$product_id', '$name', '$description', '$colour', '$price', '$image')";
            
            $result3 = mysqli_query($conn, $insert);
            ?>
        </div>
        <button class="remove" data-id="<?php echo $row['id']; ?>">Remove from Cart</button>
</div>    

        <?php
        }
}
        ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for (var i = 0; i<remove.length; i++) {
            remove[i].addEventListener("click", function(event) {
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                
                var xml = new XMLHttpRequest();
               

                xml.open("GET","config.php?cart_id="+cart_id,true);
                xml.send();

            })
        }
    


    </script>

    <div>
    <?php
    
    if (isset($_POST['Submit'])) {

    
    $id = $_SESSION["user_id"];

    while($row_cart = mysqli_fetch_assoc($all_cart)){
    $sql = "SELECT * FROM products WHERE id =".$row_cart["product_id"];
    $total_products = $conn->query($sql);
    
    while($row = mysqli_fetch_assoc($total_products)){

    $name = $row["name"];
    $image = $row["image"];
    $price = $row["price"];
    $description = $row["description"];

    $colour = $row["colour"];
    $product_id = $row["id"];


    $insert_order = "INSERT INTO orders (user_id, user_id, product_id, product_name, product_description, product_colour, product_price, product_image)
    VALUES ('$id', '$product_id', '$name', '$description', '$colour', '$price', '$image')";

    $result_order = mysqli_query($conn, $insert_order);
    }

    if ($result_order) {
        echo("Success");
        
                $query = "TRUNCATE TABLE cart";
                mysqli_multi_query($conn, $query);
                
                
    } else {
        echo("Error");
    }
}

    }
?>
    <form action="cart.php" method="post">
        <button class="normal" type="submit" name="Submit" >Checkout</button>
    </form>

    <script> 
        


    </script>
    
    
</body>

</html>