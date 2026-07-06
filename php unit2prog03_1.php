<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [
            "One" => "apple",
            "Two" => "banana",
            "Three" => "cherry"
        ];

        $result = array_change_key_case($array, CASE_UPPER);

        foreach($result as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    ?>
</body>
</html>