<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $var = "12345";
        echo "<b> Original Value : " . $var . "<br>" ;
        echo "<br> New Data Type :  </br> " . gettype($var) . "<br><br>";

        settype($var, "integer");
        echo "<b> After Type Casting : </b> " . $var . "<br>" ;
        echo "<br> New Data Type :  </br> " . gettype($var) . "<br><br>";

        settype($var, "double");
        echo "<b> After Converting to double : </b> " . $var . "<br>" ;
        echo "<br> New Data Type :  </br> " . gettype($var) . "<br><br>";
        
        settype($var, "integer");
        var_dump($var);
        echo "<br> New Data Type :  </br> " . gettype($var) . "<br><br>";
    ?>

</body>
</html>