<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "TEST");

        if($conn->connect_error){
            die("Connection Failed : " . $conn->connect_error);
        }

        $sql = "SELECT MINUTE(NOW()) AS minute";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        echo "Current Minute: " . $row["minute"];

        $conn->close();
    ?>
</body>
</html>