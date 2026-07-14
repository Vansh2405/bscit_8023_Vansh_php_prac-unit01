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
  

        $sql = "SELECT SYSDATE() AS SysDate,
                    CURRENT_TIMESTAMP() AS CurrentTimestamp";

        $result = $conn->query($sql);

        if($result){
            while($row = $result->fetch_assoc()){
                echo "<b>SYSDATE : </b>".$row['SysDate']."<br>";
                echo "<b>CURRENT_TIMESTAMP : </b>".$row['CurrentTimestamp'];
            }
        }
        else{
            echo "Query Error : ".$conn->error;
        }

        $conn->close();
    ?>
</body>
</html>