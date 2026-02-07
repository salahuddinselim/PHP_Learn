<?php

$host = 'localhost';
$username = 'root';
$password = "";
$dbname = 'selim';

try {
    $pdo = new PDO(
        "mysql:host=$host,dbname=$dbname;",
        $username,
        $password
    );
} catch (PDOException $e) {
    echo "There is an error connecting database." . $e->getMessage();
}
