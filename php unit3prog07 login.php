<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if ($username == "admin" && $password == "1234") {

       
        $_SESSION["username"] = $username;

       
        header("Location: php unit3prog06 home.php");
        exit();

    } else {
        echo "<p style='color:red;'>Invalid Username or Password</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="">

    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>