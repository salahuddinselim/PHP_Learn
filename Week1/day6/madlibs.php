<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="madlibs.php" method="get">
        Color: <input type="text" name="color">
        <br>
        <input type="text" name="pluralNoun">
        <br>
        <input type="text" name="celebrity">
        <br>
        <input type="submit">
        <br>
    </form>
</body>
<?php
// if (isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])) {
//     $color = $_GET["color"];
//     $pluralNoun = $_GET["pluralNoun"];
//     $celebrity = $_GET["celebrity"];
//     echo "Roses are {$color} <br>";
//     echo "{$pluralNoun} are blue <br>";
//     echo "I love {$celebrity} <br>";
// }

$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are {$color} <br>";
echo "{$pluralNoun} are blue <br>";
echo "I love {$celebrity} <br>";

?>

</html>