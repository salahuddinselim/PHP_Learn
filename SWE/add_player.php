<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];

$sql = "INSERT INTO player (id, name, country) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$id, $name, $country]);

echo "Player Added Successfully!";
echo "<br><a href='index.html'>Back</a>";
