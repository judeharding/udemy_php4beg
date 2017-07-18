<?php
            // connecting to Database
            $connection = mysqli_connect('localhost', 'root', 'root', 'login_app');
            if ($connection) {
                echo "we are connected";
            } else {
                die("Connection failed");
            }
            // inserting into database
            $query = "SELECT * FROM users";
            // establishing the connection for the data entered
            $result = mysqli_query($connection, $query);
            // testing to see if the result is actually generated
            if (!$result) {
                die('QUERY FAILED' . mysqli_error);
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
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
                <?php print_r($row); ?>
            </pre>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
