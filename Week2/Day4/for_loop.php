<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $index = 10;
    for ($i = 0; $i <= $index; $i++) {
        echo "Salah Uddin Selim. {$i} <br>";
    }

    $luckyNumber = array(1, 2, 4, 3, 10);
    for ($i = 0; $i < count($luckyNumber); $i++) {
        echo "$i = $luckyNumber[$i] <br>";
    }
    ?>
</body>

</html>