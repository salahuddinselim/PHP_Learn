<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculator.php" method="get">
        First Number : <input type="number" step="0.1" name="num1"><br>
        Second Number: <input type="number" step="0.1" name="num2"><br>
        OP : <input type="text" name="op"><br>
        <input type="submit">
    </form>

    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && $_GET["op"]) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $op = $_GET["op"];
    }
    if ($op == '+') {
        $result = $num1 + $num2;
    } elseif ($op == '-') {
        $result = $num1 - $num2;
    } elseif ($op == '*') {
        $result = $num1 * $num2;
    } elseif ($op == '/') {
        $result = $num1 / $num2;
    } else {
        $result = $num1 % $num2;
    }

    echo "The Result is : {$result}";
    ?>
</body>

</html>