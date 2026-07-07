<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Operator:
    <select name="op">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select>

    <br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

    <?php
        function calculator($num1, $num2, $op)
        {
            switch ($op)
            {
                case "+":
                    return $num1 + $num2;

                case "-":
                    return $num1 - $num2;

                case "*":
                    return $num1 * $num2;

                case "/":
                    if ($num2 != 0)
                        return $num1 / $num2;
                    else
                        return "Division by zero is not allowed.";

                default:
                    return "Invalid Operator";
            }
        }

        if(isset($_POST['calculate']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $op = $_POST['op'];

            $result = calculator($num1, $num2, $op);

            echo "<br><b>Number 1:</b> " . $num1 . "<br>";
            echo "<b>Number 2:</b> " . $num2 . "<br>";
            echo "<b>Operator:</b> " . $op . "<br>";
            echo "<b>Result:</b> " . $result;
        }

    ?>

</body>
</html>

            
</body>
</html>