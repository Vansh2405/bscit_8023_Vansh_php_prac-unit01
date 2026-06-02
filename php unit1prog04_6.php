<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$month = "December";

if ($month == "December" || $month == "January" || $month == "February") {
    
    echo "It is Winter. ";

   
    if ($month == "December") {
        echo "Year is ending soon.";
    } else {
        echo "Winter has already started.";
    }

} else {
    echo "It is not Winter.";
}

?>
</body>
</html>