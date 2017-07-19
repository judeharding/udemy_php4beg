<?php
include "db.php";
?>

<!-- sql injections - entering  )' DROP Table ' ";    will delete a table from your db.
and what about names like O'Mally?  you need to escape the '
to prevent  sql injections
    ex.
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = $mysqli_real_escape_string($connection, $username);
    $password = $mysqli_real_escape_string($connection, $password);
this takes place on ALL fields BEFORE the INSERT INTO / VALUES query. -->

<?php
    // global $connection;
    function showAllData(){
        global $connection;
// inserting into database
        $query = "SELECT * FROM users";
// establishing the connection for the data entered
        $result = mysqli_query($connection, $query);
// testing to see if the result is actually generated
        if (!$result) {
            die('QUERY FAILED' . mysqli_error);
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }


    function updateTable(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "UPDATE users SET username = '$username', password  = '$password' WHERE id = $id";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query failed' .mysqli_error($connection));
            } else {
                echo "Record Updated";
            }
        }
    }


    function deleteRows(){
        if(isset($_POST['submit'])){
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "DELETE FROM users WHERE id = $id";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query failed' .mysqli_error($connection));
            } else {
                echo "Record Deleted";
            }
        }
    }

    function createRows(){
        if(isset($_POST['submit'])){
            global $connection;
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
    }

            // inserting into database
            $query = "INSERT INTO users(username, password) VALUES ('$username', '$password' )";
            // establishing the connection for the data entered
            $result = mysqli_query($connection, $query);
            // testing to see if the result is actually generated
            if (!$result) {
                die('QUERY FAILED' . mysqli_error);
            } else {
                echo "Record Created";
            }
        } else {
            echo "this can't be blank";
        }
    }


    function readRows(){
        global $connection;
        // reading  database
        $query = "SELECT * FROM users";
        // establishing the connection for the data entered
        $result = mysqli_query($connection, $query);
        // testing to see if the result is actually generated
        if (!$result) {
            die('QUERY FAILED' . mysqli_error);
        }
        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    }

?>
