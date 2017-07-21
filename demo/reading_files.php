<?php
    $file = "example.txt";

        if ($handle = fopen($file, 'r')) {
            echo $content = fread($handle, 10); // 10 bytes = 10 characters
            // echo $content = fread($handle, filesize($file)); // give you ALL chars.
            fclose($handle); // closes file
        } else {
            echo "The app was not able to write on the file";
        }
?>
