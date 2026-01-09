<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //array
    $friends =  array('kevin', 'karen', 'oscar');
    echo $friends[1];
    $friends[4] = 'Selim';
    echo "<br>";
    echo $friends[4];

    //count array
    echo "<br>";
    echo count($friends);
    ?>

</body>

</html>