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
  

        $sql = "SELECT MONTH(CURDATE()) AS Month,
                    MONTHNAME(CURDATE()) AS MonthName";

        $result = $conn->query($sql);

        if($result){
            while($row = $result->fetch_assoc()){
                echo "<b>MONTH : </b>".$row['Month']."<br>";
                echo "<b>MONTHNAME : </b>".$row['MonthName'];
            }
        }
        else{
            echo "Query Error : ".$conn->error;
        }

        $conn->close();
    ?>
</body>
</html>