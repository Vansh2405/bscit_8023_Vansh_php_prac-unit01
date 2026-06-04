<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $aa = array("krunal","bansi");
        $bb = array("jethiyo","daya");
        
        echo "MERGE ARRAY" . "</br>";
        
        $cc = array_merge($aa,$bb);
        foreach($cc as $c){
            echo $c ."</br>";
        }
    ?>
</body>
</html>