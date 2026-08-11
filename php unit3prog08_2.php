<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0)
    ?>
    <form method="post">

        Enter Username:
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php

        if (isset($_POST["submit"])) {

                
            $name = $_POST["name"];

            if ($_COOKIE["username"]!=$name) {


                setcookie("username", $name, time() + (24 * 60 * 60), "/");

                echo "Welcome!!!<br><br>";
                echo "You are a new user.";

            } 


         else {

            echo "Welcome!!!<br><br>";
            echo "You are a repeated user.";
        }
    }
        ?>
        

</body>
</html>
