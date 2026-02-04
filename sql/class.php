<?php

class selim
{
    public $name;
    public $gpa;
    public $credit;
    function __construct($name, $gpa, $credit)
    {
        $this->name = $name;
        $this->gpa = $gpa;
        $this->credit = $credit;
    }

    function findCgpa()
    {
        $mul = $this->credit * $this->gpa;
        $cgpa = $mul / $this->credit;
        return $cgpa;
    }

    function printDetails()
    {
        echo "Name of the student: {$this->name} <br>";
        echo "Gpa: {$this->gpa} <br>";
        echo "Credit: {$this->credit} <br>";
    }
}

$s1 = new selim("Salah Uddin Selim", 3.9, 14);
$s1->printDetails();
echo "CGPA is: {$s1->findCgpa()}";
