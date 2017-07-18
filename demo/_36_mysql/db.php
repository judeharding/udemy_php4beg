<?php
// connecting to Database
    $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
    if (!$connection) {
        die("Connection failed");
    }
?>
