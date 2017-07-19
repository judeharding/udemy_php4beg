<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation();?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">

	<?php

	/*  Step 1 - Create a database in PHPmyadmin
		Step 2 - Create a table like the one from the lecture
		Step 3 - Insert some Data
		Step 4 - Connect to Database and read data
*/
?>
<?php
// connecting to Database
    $connection = mysqli_connect('localhost', 'root', 'root', 'pract_app');
    if (!$connection) {
        die("Connection failed");
    } else {
        echo "NOTE FROM DBxx.php" . "<br>";
    }
?>

<?php
        if(isset($_POST['submit'])){
            echo "got it";
            $username = $_POST['username'];
            $password = $_POST['password'];
    // checking for data in both fields{
            echo "USERS NAME IS " . $username . "<br>";
            echo "USERS PASSWORD IS " . $password . "<br>";
    // inserting into database
            $query = "INSERT INTO users(username, password) VALUES ('$username', '$password' )";
            // establishing the connection for the data entered
            $result = mysqli_query($connection, $query);
        }
?>

<?php
// reading records in db
        if(isset($_POST['view'])){
            echo "VIEW ROW button pushed" . "<br>";
            $query = "SELECT * FROM users";
    // establishing the connection for the data entered
            $result = mysqli_query($connection, $query);
    // testing to see if the result is actually generated
            if (!$result) {
                die('QUERY FAILED' . mysqli_error);
            }
    // grabbing id, un, pw
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];
                echo "<option value='$id'>$id</option>";
                echo "<option value='$username'>$username</option>";
                echo "<option value='$password'>$password</option>";
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

        <div class="container">
            <div class="col-sm-6">
                <h1 class="text-center">Create</h1>
                <form action="7.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"class="form-control">
                    </div>
                    <div class="">
                        <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
                    </div>
                    <div class="">
                        <input class="btn btn-secondary" type="submit" name="view" value="VIEW ROWS">
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>

<!-- sql injections - entering  )' DROP Table ' ";    will delete a table from your db.
and what about names like O'Mally?  you need to escape the '
to prevent  sql injections
    ex.
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
this takes place on ALL fields BEFORE the INSERT INTO / VALUES query. -->


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
