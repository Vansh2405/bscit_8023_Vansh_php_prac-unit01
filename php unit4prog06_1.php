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
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM student1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1' cellpadding='8' cellspacing='0'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["NAME"] . "</td>";
                echo "<td>" . $row["EMAIL"] . "</td>";
                echo "<td>" . $row["CITY"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
        }
        
       
    ?>
        <form method="get">
            Enter number of ID: 
            <input type="number" name="ID" required>
            <input type="submit" name="Delete" value="Submit">
            
        </form>
    <?php
        error_reporting(0);
        
            if(isset($_GET['Delete']))
            {
                $id = $_GET['ID'];
            }
            $sql = "DELETE FROM student1 WHERE ID = '$id'";

            if($conn->query($sql))
            {
                echo "Record deleted successfully..";
            }
            else
            {
                echo "Error deleting..";
            }

        $conn->close();

    ?>
</body>
</html>