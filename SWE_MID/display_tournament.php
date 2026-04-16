<?php
require_once 'config.php';

$sql = "select * from tournament";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: {$row['id']} -- Name: {$row['name']} -- Country: {$row['host_country']} -- Prize Money: {$row['prize_money']}</br>";
}
?>
<a href="index.html">Back</a>