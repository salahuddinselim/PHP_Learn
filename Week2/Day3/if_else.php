<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall) {
        echo "You are a tall male";
    } elseif ($isMale) {
        echo "You are male";
    } elseif ($isTall) {
        echo "You are tall.";
    } else {
        echo "You are Female";
    }

    echo "You are small in size";
    ?>
</body>

</html>