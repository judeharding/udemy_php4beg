<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        $list = [343,34,323,23,54,232,453];

        echo max($list); // largest number
        echo "<br>";
        echo min($list); // smallest number
        echo "<br>";
        sort($list); // sorts smallest to largest
        print_r($list); // prints KEYS AND VALUES

        // http://php.net/manual/en/ref.array.php
    ?>

</body>
</html>
