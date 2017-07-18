<?php
    if(isset($_POST['submit'])){
        // echo "got it";
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username;
        echo $password;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form class="" action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control">
                </div>
                <div class="">
                    <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
</body>
</html>









<!-- OR CODE -->
 <?php

    // if(isset($_POST['submit'])) {
    //
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
        //mysqli_connect is the relational db driver and it takes 4parameters
        // servername, username, pwd, dbname
    // if($connection) {
    //     echo "We are connected";
    // } else {
    //     die("Database CONNECTION failed login.php");
    // }

    // $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    // $result = mysqli_query = ($connection, $query);
    // if(!result){
        // die("query failed" . mysqli_error());
    // }
//    if($username && $password) {
//    echo $username;
//    echo $password;
//
//    } else {
//
//        echo "this field cannot be blank";
//
    // }

    // }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html> -->
