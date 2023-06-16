<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aryan2004";
$tableName = "users1"; // Replace with your table name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all records from the table
    $selectQuery = "SELECT * FROM $tableName";
    $stmt = $conn->prepare($selectQuery);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the records in an HTML table
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    foreach ($records as $record) {
        echo "<tr>";
        echo "<td>" . $record['id'] . "</td>";
        echo "<td>" . $record['name'] . "</td>";
        echo "<td>" . $record['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
