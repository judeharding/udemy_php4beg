<?php include "db.php";?>
<?php include "functions.php";?>


<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET username = '$username', password  = '$password' WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query failed' .mysqli_error($connection));
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
            <form class="" action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control">
                </div>
                <div class="">
                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                </div>
                <div class="form-group">
                    <select class="" name="id" id="">
                        <?php showAllData(); ?>
                        <option value=""></option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
