<?php

    print_r($_GET);
    require "studentclass.php";
    $s = new student("Afia", 3.84);

    echo $s->name . "<br>";
    echo "Her CGPA is: " . $s->getCgpa() . "<br>";
    echo "Is she passed? ";

    if ($s->isPass()) {
        echo "Passed.<br>";
    } else {
        echo "Failed.<br>";
    }
?>
