<?php
require_once 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // get user by username
        $sql = "SELECT id, username, pass FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // verify password
            if (password_verify($password, $user['pass'])) {

                // session set
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                echo "Login successful";
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found";
        }
    } else {
        echo "All fields are required";
    }
}
?>

<form action="login.php" method="post">
    <div>Username <input type="text" name="username"></div>
    <div>Password <input type="password" name="password"></div>
    <div><button type="submit">Login</button></div>
</form>