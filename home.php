<?php
    echo "<h2> Home page </h2>";
    if(isset($_COOKIE['username']))
    {
        echo "Welcome : " . $_COOKIE['username'];
    }
    else
    {
        echo "Cookie not found.";
    }

    echo "<br><br>";
    echo "<a href='php unit3prog01 - 04.html'> Go Back </a>";
?>