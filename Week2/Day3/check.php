<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function getMax($num1, $num2)
    {
        if ($num1 > $num2) {
            return $num1;
        } elseif ($num2 > $num1) {
            return $num2;
        } else
            return;
    }

    $value = getMax(20, 20);
    if ($value) {
        echo $value;
    } else
        echo "Those values are equal";
    ?>
</body>

</html>