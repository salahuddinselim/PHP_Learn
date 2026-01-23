<?php
echo "Welcome to the stage <br>";

#ways to connect to a mysql Database
# 1.mysqli extension
# 2.pdo

$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);
// echo "Connection is successful<br>";
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}
