<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "aryan2004";
$tableName = "users1";
$addColumn = "phone";
$modifyColumn = "email";
$deleteColumn = "id";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the column already exists before adding it
    $checkColumnSql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tableName' AND COLUMN_NAME = '$addColumn'";
    $stmt = $conn->query($checkColumnSql);
    $columnExists = $stmt->fetch();

    if (!$columnExists) {
        // Add a new column to the table
        $addColumnSql = "ALTER TABLE $tableName ADD COLUMN $addColumn INT";
        $conn->exec($addColumnSql);
        echo "Column added successfully!" . PHP_EOL;
    } else {
        echo "Column already exists. Skipping addition." . PHP_EOL;
    }

    // Modify an existing column in the table
    $modifyColumnSql = "ALTER TABLE $tableName CHANGE $modifyColumn modified_column_name VARCHAR(100)";
    $conn->exec($modifyColumnSql);
    echo "Column modified successfully!" . PHP_EOL;

    // Delete a column from the table
    $deleteColumnSql = "ALTER TABLE $tableName DROP COLUMN $deleteColumn";
    $conn->exec($deleteColumnSql);
    echo "Column deleted successfully!" . PHP_EOL;

} catch(PDOException $e) {
    echo "Error modifying table: " . $e->getMessage();
}

$conn = null;
?>
