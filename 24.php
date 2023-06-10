<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $databaseName = "your_database_name";
    $sql = "CREATE DATABASE $databaseName";
    $conn->exec($sql);
    echo "Database created successfully!";
} catch(PDOException $e) {
    echo "Error creating database: " . $e->getMessage();
}

$conn = null;
?>
