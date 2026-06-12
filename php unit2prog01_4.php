<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(0);
?>


<form method="get">
    Enter number of laptops:
    <input type="number" name="n" required>
    <input type="submit" name="generate" value="Generate">
</form>

<?php
if (isset($_GET['generate'])) {
    $n = $_GET['n'];
?>


<form method="post">
    <input type="hidden" name="n" value="<?php echo $n; ?>">

    <?php
    for ($i = 0; $i < $n; $i++) {
        echo "<h4>Record " . ($i + 1) . "</h4>";

        echo "Company: <input type='text' name='company[]' required><br><br>";
        echo "Model: <input type='text' name='model[]' required><br><br>";
        echo "Price: <input type='number' name='price[]' required><br><br>";
    }
    ?>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
}
?>

<?php

if (isset($_POST['submit'])) {

    $company = $_POST['company'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $n = $_POST['n'];

    echo "<h2>Laptop Records</h2>";

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>Sr No.</th>
            <th>Company</th>
            <th>Model</th>
            <th>Price</th>
          </tr>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . $company[$i] . "</td>";
        echo "<td>" . $model[$i] . "</td>";
        echo "<td>" . $price[$i] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>