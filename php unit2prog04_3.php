<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Welcome to PHP";

        echo "String: " . $str . "<br>";
        echo "Word Count: " . str_word_count($str);
    ?>
</body>
</html>