<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $array = [22,34,5,78,99]; 
    echo "Your Input:<br>";
    foreach ($array as $number) {
        echo $number . " ";
    }

    echo "<br><br>";
    $a = $array;
    sort($a);
    echo "Sorted Result:<br>";
    foreach ($a as $number2) {
        echo $number2 . " ";
    }
    ?>
</body>
</html>