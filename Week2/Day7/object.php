<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Student
    {
        var $name;
        var $cgpa;
        function __construct($name, $cgpa)
        {
            $this->name = $name;
            $this->cgpa = $cgpa;
        }

        function hasHonors()
        {
            if ($this->cgpa >= 3.5) {
                return true;
            } else {
                return false;
            }
        }
    }
    $student1 = new Student("Selim", "4.00");
    $student2 = new Student("Salah Uddin", 3.6);

    echo $student2->hasHonors();
    ?>
</body>

</html>