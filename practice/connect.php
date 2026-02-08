<?php
$username = 'root';
$password = "SE171972";
$host = 'localhost';
$dbname = 'selim';

try {
    $pdo = new PDO(
        "mysql:host=$host,dbname=$dbname;",
        $username,
        $password
    );
} catch (PDOException $e) {
    echo "There is error in the connection." . $e->getMessage();
}
