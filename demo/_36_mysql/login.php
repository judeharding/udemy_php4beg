<?php

    if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
        //mysqli_connect is the relational db driver and it takes 4parameters
        // servername, username, pwd, dbname
    if($connection) {
        echo "We are connected";
    } else {
        die("Database CONNECTION failed login.php");
    }

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

    }
?>
<!DOCTYPE html>
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
</html>
