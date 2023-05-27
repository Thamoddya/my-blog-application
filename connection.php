<?php
// $connection = new mysqli('localhost','root','1234','myblog');
// $connection = new PDO("mysqli:host=localhost;dbname=myblog", "root", "1234");

$dsn = "mysql:host=localhost;dbname=myblog;charset=utf8mb4";
$username = "root";
$password = "1234";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}
//Testing function