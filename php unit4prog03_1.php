<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = new mysqli("localhost:3307", "root","","student1");
        $sql = "INSERT INTO student1(NAME, EMAIL, CITY)
                VALUES ('VANSH' , 'vansh@gamil.com', 'RAJKOT')";

        if(mysqli_query($conn,$sql)){
            echo "Record Inserted Successfullly.";
        }
        else{
            echo "Error";

        }
    ?>
</body>
</html>