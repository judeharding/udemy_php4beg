<?php
include "db.php";
?>
*/ vid 48 @ 9:50 /*
<?php
    global $connection;
    function showAllData(){
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

?>
