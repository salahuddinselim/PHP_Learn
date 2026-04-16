<?php
require_once 'config.php';


$sql = 'insert into player(id,name,country) values(?,?,?)';
$id = $_GET['id'];
$name = $_GET['name'];
$country = $_GET['country'];

$stmt = $pdo->prepare($sql);

if ($stmt->execute([$id, $name, $country]) === true) {
    echo "Data added";
} else {
    echo "Error in there";
}
?>
<br><br>
<a href="index.html">Back</a>