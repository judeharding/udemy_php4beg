<?php
    $file = "example.txt";
//fopen is a global that takes 2 params - file name and read/write

    $handle = fopen($file, 'w');
        if ($handle = fopen($file, 'w')) {
            fwrite($handle, 'I love Php');
        } else {
            echo "The app was not able to write on the file";
        }
    fclose($handle); // closes file
?>
