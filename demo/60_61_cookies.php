<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7); // adding 1 week from today
setcookie($name,$value,$expiration);  //prebuilt funct w/ 3prams - defined above
// $varcook = $_COOKIE;
// echo $varcook;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    // if(isset($_COOKIE["SomeName"])) {
    //     $someOne = $_COOKIE["SomeName"];
    //     echo $someOne;
    // } else {
    //     $someOne = "";
    // }
    ?>
</body>
</html>
