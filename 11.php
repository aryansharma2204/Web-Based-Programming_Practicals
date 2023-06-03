<?php

// Set a cookie
$cookieName = "username";
$cookieValue = "John Doe";
$expiryTime = time() + (86400 * 30); // Expiry set to 30 days

setcookie($cookieName, $cookieValue, $expiryTime, "/"); // Set the cookie

// Check if the cookie is set
if (isset($_COOKIE[$cookieName])) {
    echo "Cookie '" . $cookieName . "' is set.<br>";
    echo "Cookie value: " . $_COOKIE[$cookieName] . "<br>";
} else {
    echo "Cookie '" . $cookieName . "' is not set.<br>";
}

// Delete a cookie
$cookieToDelete = "username";

if (isset($_COOKIE[$cookieToDelete])) {
    setcookie($cookieToDelete, "", time() - 3600, "/"); // Set the expiry time to the past to delete the cookie
    echo "Cookie '" . $cookieToDelete . "' is deleted.<br>";
} else {
    echo "Cookie '" . $cookieToDelete . "' does not exist.<br>";
}

?>
