<?php
// connecting to Database
    echo "NOTE FROM DB.php";
    $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
    if (!$connection) {
        die("Connection failed");
    }
?>
