<?php
include 'config.php';
$name = $_POST['name'];
$country = $_POST['country'];

$sql = "INSERT INTO player ( name, country) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$name, $country]);

echo "Player Added Successfully!";
echo "<br><a href='index.html'>Back</a>";
