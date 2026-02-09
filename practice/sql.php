<?php require_once 'connect.php';
$sql = 'SELECT username AS name FROM users WHERE id > 2 AND id < 6';

$stmt  = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($user as $k => $v) {
    echo "$k => ";
    print_r($v);
    echo "<br>";
}
