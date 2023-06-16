<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aryan2004";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the table exists
    $tableName = "users1";
    $checkTableQuery = "SHOW TABLES LIKE '$tableName'";
    $tableExists = $conn->query($checkTableQuery)->rowCount() > 0;

    if (!$tableExists) {
        // Create the table if it doesn't exist
        $createTableQuery = "CREATE TABLE $tableName (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL
        )";
        $conn->exec($createTableQuery);
        echo "Table created successfully!<br><br>";
    }

    // Insert records from the form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $insertQuery = "INSERT INTO $tableName (name, email) VALUES ('$name', '$email')";
        $conn->exec($insertQuery);
        echo "Record inserted successfully!<br><br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
