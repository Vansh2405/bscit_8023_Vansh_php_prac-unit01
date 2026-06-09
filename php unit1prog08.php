<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    error_reporting(0);
?>

    <form method="get">
            value 1:<input type="text" name="arr[]"><br><br>
            value 2:<input type="text" name="arr[]"><br><br>
            value 3:<input type="text" name="arr[]"><br><br>

            <input type="submit" name="submit" value="submit">
    </form>

<?php
    $arr = $_GET['arr'];

    foreach ($arr as $value) {
        echo $value . "<br>";
    } 
?>
</body>
</html>
