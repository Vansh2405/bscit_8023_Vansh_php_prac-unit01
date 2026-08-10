<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: php unit3prog06 login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h2>Welcome to Home Page</h2>

<p>
    Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
</p>

<p>You are successfully logged in.</p>

<a href="php unit3prog06 logout.php">Logout</a>

</body>
</html>