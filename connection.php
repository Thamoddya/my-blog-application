<?php

$dsn = "mysql:host=us100.srilankahosting.com;dbname=thamoddy_blog;chars=utf8mb4";
$username = "thamoddy_root";
$password = "ThamoddyaRashmitha1234@";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    exit();
}
