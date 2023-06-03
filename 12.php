<?php

// Start the session
session_start();

// Set session variables
$_SESSION['username'] = 'John Doe';
$_SESSION['email'] = 'johndoe@example.com';

// Access session variables
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";

// Modify session variables
$_SESSION['username'] = 'Jane Smith';

// Unset a session variable
unset($_SESSION['email']);

// Check if a session variable is set
if (isset($_SESSION['username'])) {
    echo "Username is set: " . $_SESSION['username'] . "<br>";
} else {
    echo "Username is not set.<br>";
}

// Destroy the session
session_destroy();

// Access session variables after destroying the session
echo "Username after session destroy: " . $_SESSION['username'] . "<br>";

?>
