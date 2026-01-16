<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Movie
    {
        public $title;
        private $ratings;

        function __construct($title, $ratings)
        {
            $this->title = $title;
            $this->setRating($ratings);
        }

        function getRating()
        {
            return $this->ratings;
        }

        function setRating($ratings)
        {
            if ($ratings == "G" || $ratings == "PG" || $ratings == "PG-13" || $ratings == "NR") {
                $this->ratings = $ratings;
            } else {
                $this->ratings = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "PG-13");

    echo $avengers->getRating() . "<br>";
    $avengers->setRating("100");
    echo $avengers->getRating();
    ?>
</body>

</html>