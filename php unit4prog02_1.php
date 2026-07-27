<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = new mysqli("localhost:3307","root","","student1");
        if(!$conn){
            die("Connection Failed : " . mysqli_connect_error());
        }

        $sql = "CREATE TABLE IF NOT EXISTS student1
            (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                NAME VARCHAR(150),
                EMAIL VARCHAR(150),
                CITY VARCHAR(150)
            )";

            //CREATE TABLE IF NOT EXIST students
            if(mysqli_query($conn, $sql)){
                echo "Table Created Successfully.";
            }
            else{
                echo "Error : " . $conn->error;
            }

            $conn->close();
    ?>
</body>
</html>