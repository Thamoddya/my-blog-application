<?php


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
