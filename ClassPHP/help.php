<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World, Afia</h1>
    <?php
        echo"<h2>Afia loves Patuakhali medical.</h2>";
        echo"<span style='background-color: aqua;'>Colored Texted <br></span>";
        $name = "Afia Tasnim Ria";
        $age = 25;
        $versity = "United International University";
        $cgpa = 3.84;
        echo "Hi this is ". $name ."<br>";
        echo "My age is " . $age ."<br>";
        echo "My University is : " . $versity ."<br>";
        echo "CGPA: " . $cgpa ."<br>";
        ?>

        <?php
        $a = 10;
        $b = 20;
        echo $a + $b ."<br>";
        echo $a - $b ."<br>";
        echo $a * $b ."<br>";
        ?>

        <table border = "1">
            <tr>
                <th>Serial</th>
                <th>Squre</th>
                <th>Cube</th>
            </tr>
            <?php
            $n = 4;
            for($i = 1; $i<=$n; $i++)
            {
                echo "
                <tr>
                    <td> $i </td>
                    <td>" .$i * $i. "</td>
                    <td>" .$i * $i *$i ."</td>
                </tr>
                ";
            }
            ?>
        </table>
            <h1>Learning Abour Arrays</h1>
        <?php
            $names = ["Afia", "Tasnim", "Ria"];
            // echo $names;
            print_r ($names);
            echo "<br>";
            for($i = 0; $i<count($names); $i++)
            {
                echo "$names[$i] <br>";
            }
            
            echo "<h1>For Each Loop Learning</h1>";
            
            foreach($names as $x){
                echo "$x <br>";
            }

            echo "<h1>For Each Loop Learning using key value problem: </h1>";
            
            foreach($names as $k=>$v)
            {
                echo "$k=>$v <br>";
            }

            echo "<h1>Function Learning: </h1>";
            echo "Not Learning now";
            echo "<h1>Class Learning: </h1>";
        ?>

        <?php
        
        ?>
    
</body>
</html>