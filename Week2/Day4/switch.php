<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="switch.php" method="get">
        Grade: <input type="text" name="grade"> <br>
        <input type="submit">
        <br>
    </form>
    <?php
    if (isset($_GET["grade"])) {
        $grade = $_GET["grade"];
        switch ($grade) {
            case "A":
                echo "You did a great job";
                break;
            case "B":
                echo "You did a good job";
                break;
            case "C":
                echo "You did a average job";
                break;
            case "D":
                echo "You need to improve";
                break;
            case "E":
                echo "You need to study hard";
                break;
            case "F":
                echo "We kicked you out of our institute";
                break;
            default:
                echo "No data found";
        }
    }
    ?>
</body>

</html>