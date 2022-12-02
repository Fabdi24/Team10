
<?php
    require "config.php";
    $sql = "SELECT * from products";
    $all_product = $conn->query($sql);

    


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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="myAccount.php">My Account</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
               
                if(isset($_SESSION["user_id"])) {
                    $id = $_SESSION["user_id"];
                    //$name = $_SESSION["user_firstname"];
                    $sql = "SELECT user_firstname FROM user WHERE user_id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['user_firstname'];
               
  
                echo "<li><a href=\"myAccount.php\">$name</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            } else {
            header("Location:register.php");
            }
            ?>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>



<main>
    <form class='search', method='post' ,  autocomplete='off'>
        <input type='text' name='search'/>
        <button type='searchSubmit'> Search </button>
        </form>

        <?php  
        if (isset($_POST['search'])){
            
            $name = $_POST['search'];
         
            $sql = ("SELECT * FROM products WHERE name LIKE '%$name%'");
                           
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo"

            <div class='card'>
                <div class='image'>
                <img {$row['image']} />
                </div>
                <div class =\"caption\">
                <p class=\"product_name\"> {$row['name']}</p>
                <p class=\"price\">£ {$row['price']}</p> 
             </div>
                <button class=\"add\" data-id=\"{$row['id']};\">Add to cart</button>
            </div>
            </div>";
        }
                      
    else {
    
    while($row = mysqli_fetch_assoc($all_product)){

    echo"
    <div class=\"card\">
        <div class=\"image\">
            <img {$row['image']} />
        </div>
        <div class =\"caption\">
        <p class=\"product_name\"> {$row['name']}</p>
        <p class=\price\">£ {$row['price']}</p> 
        </div>
        <button class=\"add\" data-id=\"{$row['id']}\">Add to cart</button>
        </div>
    </div>";
    }

?>
<?php

}


?>
</main>
<script>
        var product_id = document.getElementsByClassName("add");
        for(var i = 0; i<product_id.length; i++) {

            product_id[i].addEventListener("click",function(event){
                var target = event.target;
                var id = target.getAttribute("data-id");

                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        
                        

                    }

                }

                xml.open("GET", "config.php?id="+id,true);
                xml.send();
            })
        } 


</script>

<footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Aston University, Birmingham</p>
            <p><strong>Phone:</strong> +44 1234567890</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My account</h4>
            <a href="login.php">Sign In</a>
            <a href="cart.php">View Cart</a>
        </div>

        <div class="col">
            <p>All products mentioned do not belong to us and are owned by the respective owners such as Sony, Microsoft, Moza etc.</p>
        </div>
    </footer>

<body>
</html>
