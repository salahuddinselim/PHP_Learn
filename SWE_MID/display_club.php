<?php
require_once 'config.php';

$sql = 'select * from club';
$stmt = $pdo->prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: {$row['id']} -- Name: {$row['name']} -- Host Country: {$row['host_country']} -- Tournament Name: {$row['tournament_name']}</br>";
}

?>

<a href="index.html">Back</a>