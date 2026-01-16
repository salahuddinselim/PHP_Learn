<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Chef
    {
        function makeChicken()
        {
            echo "The chef makes chicken <br>";
        }

        function makeSalad()
        {
            echo "The chef makes salad <br>";
        }

        function makeSpecialDish()
        {
            echo "The chef makes BBQ ribs <br>";
        }
    }
    $chef = new Chef();

    class ItalianChef extends Chef
    {
        function makePizza()
        {
            echo "Italian chef makes pizza <br>";
        }
    }

    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    $italianChef->makePizza();
    ?>
</body>

</html>