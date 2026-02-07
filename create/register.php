<?php
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password'])) {

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, username, pass) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $username, $password]);

        echo "✅ Data stored successfully";
    } else {
        echo "❌ All fields are required";
    }
}
?>

<form action="register.php" method="post">
    <div>Name: <input type="text" name="name"></div>
    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <div><button type="submit">Submit</button></div>
</form>