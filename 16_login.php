<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['admin'])) {
    header("Location: 16_dashboard.php"); // Redirect to the dashboard if already logged in
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the login credentials
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['admin'] = $username; // Set the admin session variable
        header("Location: 16_dashboard.php"); // Redirect to the dashboard on successful login
        exit();
    } else {
        $error = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
