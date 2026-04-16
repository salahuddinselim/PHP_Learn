<?php
$host = "localhost";
$dbname = "tournament";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!</br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
