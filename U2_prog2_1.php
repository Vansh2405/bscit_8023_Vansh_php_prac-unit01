<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Array Sorter</title>
</head>
<body>
    <?php

        error_reporting(0);

    ?>

    <form method="get">

            Enter number of values: 
            <input type="text" name="n" required>
            <input type="submit" name="generate" value="Generate">
            
        </form>


        <form method = "get">

            <?php

                $n = $_GET['n'];
                for ($i = 0; $i < $n; $i++) {
                    echo "Value " . "<input type='text' name='arr[]'><br><br>";
                }
            ?>
                <input type="submit" name="submit" value="Submit">
        </form>

    <br><br>

    <?php
        
        $array = $_GET['arr'];
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