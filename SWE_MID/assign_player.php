<?php
require_once 'config.php';

$sql = 'insert into club(id, name) values(?,?)';
$stmt = $pdo->prepare($sql);
$id = $_GET['id'];
$club_name = $_GET['name'];
if ($stmt->execute([$id, $club_name]) === true) {
    echo "Data added successfully";
} else {
    echo "Data not added in the database";
}
?>
<br><br>
<a href="index.html">Back</a>