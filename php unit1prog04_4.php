<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month = "june";
        echo "NESTED IF"."</br>";
        if($month == "june"){
            echo "not valid"."</br>";
            if($month == "march "){
                echo "valid"."</br>";
            }
        }
        ?>
</body>
</html>