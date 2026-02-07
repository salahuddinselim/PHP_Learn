<?php
require_once 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT id, username, pass FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // verify password  no need for final
            if (password_verify($password, $user['pass'])) {

                // session set need for the final 
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                echo "Login successful";
                header('location:dashboard.php');
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "No user with the username";
        }
    } else {
        echo "Give input first";
    }
}
?>

<form action="login.php" method="post">
    <div>Username <input type="text" name="username"></div>
    <div>Password <input type="password" name="password"></div>
    <div><button type="submit">Login</button></div>
</form>