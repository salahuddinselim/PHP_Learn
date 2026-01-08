<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="calculator.php" method="get">
        <input type="number" name="number1">
        <br>
        <input type="number" name="number2">
        <input type="submit">
        <br>
    </form>
    <?php
    if (isset($_GET["number1"]) && isset($_GET["number2"])) {
        echo $_GET["number1"] + $_GET["number2"];
    }
    ?>
</body>


</html>