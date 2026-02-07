<form action="register.php" method="post">
    <div>Name: <input type="text" name="name"></div>
    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <div><button>Submit</button></div>
</form>


<?php
if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['name'];
    $password = $_POST['name'];
} else {
    echo "No data is available";
}
$sql = "insert into users(name, username, password) values (?,?,?)";
?>