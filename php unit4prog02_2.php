<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try{
            $conn = new PDO("mysql:host=localhost:3307;dbname=TEST","root","");
            $conn -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE TABLE IF NOT EXISTS student1
            (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                NAME VARCHAR(150),
                EMAIL VARCHAR(150),
                CITY VARCHAR(150)
            )";

                $conn -> exec($sql);
                echo "Table Created Successfully.";


        }

            catch (PDOEXCEPTION $e){
                echo"Connection Failed".$e -> getMessage();

            }
            $conn = null;
    ?>
</body>
</html>