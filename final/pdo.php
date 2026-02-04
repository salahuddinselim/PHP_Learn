<?php
$hostName = "localhost";
$database = "student";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$hostName;dbname=$database",
        $username,
        $password
    );
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected well!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

try {
    $name = "Salah Uddin Selim";
    $age = 25;

    $stmt  = $pdo->prepare("INSERT INTO student (name, age) VALUES (?, ?)");
    $stmt->execute([$name, $age]);
    echo "Data inserted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
