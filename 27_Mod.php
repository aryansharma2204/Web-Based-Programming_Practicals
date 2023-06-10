<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$tableName = "your_table_name";
$columnName = "new_column_name";
$columnType = "VARCHAR(255)";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Alter table and add a new column
    $alterTableQuery = "ALTER TABLE $tableName ADD $columnName $columnType";
    $conn->exec($alterTableQuery);
    echo "Table modified successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
