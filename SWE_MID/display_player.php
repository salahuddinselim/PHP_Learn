<?php
require_once 'config.php';

$sql = "select * from player";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: {$row['id']} -- Name: {$row['name']} -- Country: {$row['country']} -- Club: {$row['club_name']}</br>";
}
?>
<a href="index.html">Back</a>