<?php
    $file = "example.txt";
//fopen is a global that takes 2 params - file name and read/write
    $handle = fopen($file, 'w');

    fclose($handle); // closes file
?>
