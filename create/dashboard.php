<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "<h1>Hello, " . $_SESSION['username'] . "</h1>";
?>

<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>