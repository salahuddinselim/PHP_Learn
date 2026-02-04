<?php require "connect.php";

$sql = "create table users(
    id int auto_increment primary key,
    name varchar(50) not null,
    gpa varchar(10) not null )";

$stmt = $pdo->prepare($sql);
$stmt->execute();
print "New table added in there.";
