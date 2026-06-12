<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $d = mktime(11,14,54,8,12,2024);
        echo "Created date is " .date("d-m-y h:i:sa,$d");
    ?>
</body>
</html>
