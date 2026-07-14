<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "test";

        $conn = new mysqli($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
                
                echo "Database Connected Successfully!";
            }   
        $conn->close();
    ?>
</body>
</html>