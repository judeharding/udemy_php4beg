<?php
include "db.php";
?>

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
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET username = '$username', password  = '$password' WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query failed' .mysqli_error($connection));
        }
    }


    function deleteRows(){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query failed' .mysqli_error($connection));
        }
    }

?>
