<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $laptops = array(
        array("Dell", "Inspiron 15", 50000),
        array("HP", "Pavilion 14", 55000)
    );
        for($row=0;$row<2;$row++)
        {
            for($col=0;$col<3;$col++)
            {
                echo $laptops[$row][$col]."</br>";
            }
                echo "</br>";
        }

        
    ?>
</body>
</html>