<?php
    if(isset($_POST['submit'])){
        // echo "got it";
        $username = $_POST['username'];
        $password = $_POST['password'];
// checking for data in both fields
        if ($username && $password) {
            // echo $username;
            // echo $password;
            // connecting to Database

            $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
            if ($connection) {
                echo "we are connected";
            } else {
                die("Connection failed");
            }

            // inserting into database
            $query = "INSERT INTO users(username, password) VALUES ('$username', '$password' )";
            // establishing the connection for the data entered
            $result = mysqli_query($connection, $query);
            // testing to see if the result is actually generated
            if (!$result) {
                die('QUERY FAILED' . mysqli_error);
            }
        } else {
            echo "this can't be blank";
        }
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
            <form class="" action="login_create.php" method="post">
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
