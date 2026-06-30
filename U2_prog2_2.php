<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Array Sorter</title>
</head>
<body>
    
    
    <br><br>

    <?php
        $array = [25,37,65,45];
       
        echo "Your Input:<br>";
        foreach ($array as $number) {
            echo $number . " ";
        }
        
        echo "<br><br>";
        
        sort($array);
        echo "Sorted Result:<br>";
        foreach ($array as $number2) {
            echo $number2 . " ";
        }
    ?>

</body>
</html>