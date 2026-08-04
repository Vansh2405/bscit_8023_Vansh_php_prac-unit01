<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //CREATE 
        if(isset($_POST['Create']))
        {
            $username = $_POST['username'];
            setcookie("username",$username,time()+24*60*60,"/");
            echo "<h3> Cookie Created Successfully </h3>";

        }

        //READ
        if(isset($_POST['Read']))
        {
            if(isset($_COOKIE['username']))
            {
                echo "<h3> Cookie Value :".$_COOKIE['username']."</h3>";
            }
            else
            {
                echo "<h3> Cookie Not Found :</h3>";  
            }                
            
        }

        //DELETE
        if(isset($_POST['Delete']))
        {
           
            setcookie("username","",time()-3600,"/");
            echo "<h3> Cookie Deleted Successfully </h3>";
        }

        //HEADER
        if(isset($_POST['Header']))
        {
            $username = $_POST['username'];
            setcookie("username",$username,time()+24*60*60,"/");
            header("Location: home.php");
            exit();
        }

            echo "<br> <a href = 'php unit3prog01 - 04.html'> Go Back </a>";
    ?>
</body>
</html>