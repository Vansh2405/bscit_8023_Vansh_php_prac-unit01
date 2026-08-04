<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            
            $conn = new mysqli("localhost:3307", "root", "", "student1");

            if ($conn){
                echo "Database Connected Successfully. <br><br>";
            }
            else{
                die("Connection Failed" . $conn->connect_error());
            }

            $sql = "SELECT * FROM student1 LIMIT 3";

            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc())
                {
                    echo "ID : " . $row["ID"] . "<br>";
                    echo "Name : " . $row["NAME"] . "<br>";
                    echo "Email : " . $row["EMAIL"] . "<br>";
                    echo "City : " . $row["CITY"] . "<br><br>";
                }
            }
            else{
                echo "No Records Found.";
            }
        ?>
</body>
</html>