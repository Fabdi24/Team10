<?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "ecom";

    $conn = new mysqli($server, $user, $pass, $db);


?>