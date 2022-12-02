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
<a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>

    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
           <?php 
            require "config.php";

            if(isset($_SESSION["user_id"])) {
                $id = $_SESSION["user_id"];
                //$name = $_SESSION["user_firstname"];
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
            
            
            <a href="shop.php" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php
        "><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

    <section id="hero">
        <h4>Welcome to <b><h3>Ctrlr.com</h3></b> </h4>
        <h2>Winter Exclusive deals</h2>
        <h1>On all products</h1>
        <p>Up to 40% off selected controllers + Free shipping</p>
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
            <h6>Sell your old controller</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Welcome to Tech Heaven</p>
        <div class="pro-container">
            <div class="pro">
            <a href="shop.php"><img src="img/products/f1.jpg" alt=""></a>
                <div class="des">
                    <span>Android</span>
                    <h4>Razer Kishi for Android</h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£79 </h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f2.jpg" alt=""></a>
                <div class="des">
                    <span>PC</span>
                    <h5>Logitech G29 Driving Force Gaming Steering Wheel - Playstation, PC</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£299</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f3.jpg" alt=""></a>
                <div class="des">
                    <span>PC, XBOX</span>
                    <h5>Razer Wolverine V2 - White - Wired Gaming Controller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£99</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f4.jpg" alt=""></a>
                <div class="des">
                    <span>PC</span>
                    <h5>Thrustmaster T.16000M FCS FLIGHT PACK</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£199</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f5.jpg" alt=""></a>
                <div class="des">
                    <span>PC, PS4, XBOX</span>
                    <h5>TSS HANDBRAKE Sparco Mod</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£329</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f6.jpg" alt=""></a>
                <div class="des">
                    <span>PS5</span>
                    <h5>PS5 Controller - Emrald Green skin</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£99</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f7.jpg" alt=""></a>
                <div class="des">
                    <span>XBOX</span>
                    <h5>Xbox Wireless Controller - Mineral Camo Special Edition</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£59</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/f8.jpg" alt=""></a>
                <div class="des">
                    <span>PS5</span>
                    <h5>Aim Orange Matt PS5 Controller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£99</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>



    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Exclusive Custom Designs</p>
        <div class="pro-container">
            <div class="pro">
                <a href="shop.php"><img src="img/products/n1.jpg" alt=""></a>
                <div class="des">
                    <span>PS5</span>
                    <h5>Yellow Green Fade - PS5 Controller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£99</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n2.jpg" alt=""></a>
                <div class="des">
                    <span>XBOX</span>
                    <h5>Xbox Series X Custom Controller - Zombie Edition</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£79</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n3.jpg" alt=""></a>
                <div class="des">
                    <span>XBOX</span>
                    <h5>Turtle Beach Recon Controller - Black</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£59</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n4.jpg" alt=""></a>
                <div class="des">
                    <span>PS5</span>
                    <h5>Red Street Camo - PS5 Controller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£99</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n5.jpg" alt=""></a>
                <div class="des">
                    <span>PS4</span>
                    <h5>Yellow pulse DR.AimKing edition - PS4 Controller</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£69</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n6.jpg" alt=""></a>
                <div class="des">
                    <span>Moza</span>
                    <h5>Moza Racing Sim FSR Steering wheel</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£580</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n7.jpg" alt=""></a>
                <div class="des">
                    <span>XBOX</span>
                    <h5>Ice and Fire Controller - Series S / X</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£59</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <a href="shop.php"><img src="img/products/n8.jpg" alt=""></a>
                <div class="des">
                    <span>PS5</span>
                    <h5>AimControllers RL9 Black / Red - Playstation</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>£219</h4>
                </div>
                <a href="shop.php"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>



    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW SKINS COLLECTION </h2>
           
        </div>
        <div class="banner-box banner-box3">
            <h2>CUSTOM CONTROLLERS</h2>
            <h3>Built for true performance</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <span></span>
    </section>

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
            <p>All products mentioned do not belong to us and are owned by the respective owners.</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</php
>
