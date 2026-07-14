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

        $sql = "SELECT DATE_SUB(CURDATE(), INTERVAL 7 DAY) AS subdate";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        echo "Date Before 7 Days: " . $row["subdate"];

        $conn->close();
    ?>
</body>
</html>