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
               
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            <?php 
            require_once "config.php";
            if(isset($_SESSION["user_id"])) {
                $id = $_SESSION["user_id"];
                
                $sql = "SELECT user_firstname FROM user WHERE user_id = '$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                $name = $row['user_firstname'];
               
                
            
                echo "<li><a href='myAccount.php'>Account</a></li>";
                echo "<li><a href=\"myAccount.php\">$name</a></li>";
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            } else {
            echo "<li><a href=\"register.php\">Sign Up/In</a></li>";
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

    <section id="page-header" class="about-header">

        <h2>#KnowUs </h2>

        <p>Lorem ipsum dolor sit amet, consectetur </p>

    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis auteirure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


            <br><br>

        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a> </h1>
        
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Sell your old Controllers</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
<span>
    
</span>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Aston University, Aston triangle, Birmingham </p>
            <p><strong>Phone:</strong> +44 2222 365 /(+44) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
        </div>


        
    </footer>    


    <script src="script.js"></script>
</body>

</php>