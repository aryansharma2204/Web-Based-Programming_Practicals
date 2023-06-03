<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: 16_login.php"); // Redirect to the login page if not logged in
    exit();
}

// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: 16_login.php"); // Redirect to the login page after logout
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
    <p>This is the admin dashboard.</p>
    <a href="?logout">Logout</a>
</body>
</html>
