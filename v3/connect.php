<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u-210152094');
define('DB_PASSWORD', '');
define('DB_NAME', 'u_210152094_ecom');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("error: could not connect " .
    mysqli_connect_error());

}

?>
