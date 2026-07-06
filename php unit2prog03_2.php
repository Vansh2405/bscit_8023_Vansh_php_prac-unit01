<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = ["apple","banana","cherry"];

        $result = array_chunk($array, 2);

        foreach($result as $chunk) {
            foreach($chunk as $a) {
                echo $a . "<br>";
        }   
            echo "<br>";
        }
    ?>

</body>
</html>