<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = ["apple","banana","apple","cherry","banana","apple"];

        $result = array_count_values($array);

        foreach($result as $fruit => $count) {
             echo $fruit . " = " . $count . "<br>";
        }
    ?>
</body>
</html>