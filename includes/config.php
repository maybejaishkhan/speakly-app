<?php
ini_set('session.gc_maxlifetime', 3600); // 1 hour
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "language-learning-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)";

$conn->query($sql);


// Check connection
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>