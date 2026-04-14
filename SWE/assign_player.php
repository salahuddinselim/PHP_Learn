<?php
include 'config.php';

$player_id = $_POST['player_id'];
$club_name = $_POST['club_name'];

$sql = "UPDATE player SET club_name = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$club_name, $player_id]);

echo "Player Assigned Successfully!";
echo "<br><a href='index.html'>Back</a>";
