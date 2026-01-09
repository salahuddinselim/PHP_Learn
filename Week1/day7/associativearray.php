<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associativearray.php" method="post">
        Student: <input type="text" name="student">
        <input type="submit">
    </form>
</body>

<?php

//key=>value

if (isset($_POST["student"])) {
    $grades = array("Jim" => "A+", "Pam" => "B+", "Oscar" => "C+");
    echo $grades[$_POST["student"]];
}
?>

</html>