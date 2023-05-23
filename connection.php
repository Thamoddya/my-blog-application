<?php
// $connection = new mysqli('localhost','root','1234','myblog');
// $connection = new PDO("mysqli:host=localhost;dbname=myblog", "root", "1234");

$dsn = "mysql:host=knowladgeaddict-server.mysql.database.azure.com;dbname=knowladgeaddict-database;charset=utf8mb4";
$username = "qgghcxmjmf";
$password = "6U5M47DOX3UAN4Y3$";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}
