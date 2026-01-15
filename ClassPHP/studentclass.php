<?php
    echo "<br>" ."Hello World Afia madam Sona babu. <br>";
    class student{
        public string $name;
        public float $cgpa; 

        public function __construct($name, $cgpa){
            $this->name = $name;
            $this->cgpa = $cgpa;
        }

        public function getCgpa(){
            return $this->cgpa;
        }

        public function isPass(){
            return $this->cgpa >= 2.0;
        }
    }
?>