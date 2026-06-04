<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $num = array("panda","lion","tiger");
        echo "Array is :". $num[0] . "</br>";
        echo "Array is :". $num[1] . "</br>";
        echo "Array is :". $num[2] . "</br>";

        echo " REVERSE FUNCTION" . "</br>";
         
       $animal = array_reverse($num);
       echo $animal[0] . "</br>";
       echo $animal[1] . "</br>";
       echo $animal[2] . "</br>";
    ?>
</body>
</html>