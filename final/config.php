<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "ecom3";

    $conn = new mysqli($server, $user, $pass, $db);



if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    
    
    $sql = "SELECT * FROM cart where product_id = $product_id";
    $result = $conn->query($sql);
    $total = "SELECT * FROM cart";
    
    $total_result = $conn->query($total);
    $cart_num = mysqli_num_rows($total_result);

    if(mysqli_num_rows($result) > 0) {
        $in_cart = "already in cart";
        echo "Already in cart";

    } else {
        $insert = "INSERT INTO cart(product_id) VALUES($product_id)";
        if($conn->query($insert) === true) {
            echo "Added to cart";
            $in_cart = "added to cart";
        } else { echo"<script>alert(`Error`)</script>";
        }

        }
    }

    if(isset($_GET["cart_id"])){
        $product_id = $_GET["cart_id"];
        $sql = "DELETE FROM cart where product_id =".$product_id;
        $sql2 = "DELETE FROM orders where product_id =".$product_id;

        
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        
        if ($conn->query($sql) === TRUE) {
            echo "Removed from Cart";
            header("Location: cart2.php");
        }
    }

?>