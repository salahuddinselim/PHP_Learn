UPDATE player 
SET club_name = 'PSL Club' 
WHERE id = 2;


DELETE FROM player 
WHERE id = 2;


SELECT * FROM player WHERE id = 1;

/*

for each loop
<?php
$players = ["Rohit", "Virat", "Babar"];

foreach ($players as $player) {
    echo $player . "<br>";
}
?>

for loop
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>

<?php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
?>


*/