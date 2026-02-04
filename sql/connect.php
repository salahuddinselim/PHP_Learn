<?php
$host = "localhost";
$username = "root";
$dbname = "selim";
$password = "";


try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print "Connected with the database here. the database name is : {$dbname}";
} catch (PDOException $e) {
    echo "doesn't connect properly" . $e->getMessage();
}
