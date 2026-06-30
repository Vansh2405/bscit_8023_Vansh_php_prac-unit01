<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = ["Menifest","it until it's real"];
        foreach($array as $ele){
            echo $ele;
        }
        $array_change_key_case($array, CASE_LOWER);

        $array_change_key_case($array, CASE_LOWER);

        foreach($array as $ele){
            echo $ele;
        }


        
    ?>
</body>
</html>