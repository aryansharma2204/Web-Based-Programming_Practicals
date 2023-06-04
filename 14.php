<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieving form data using $_POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    echo "<h3>Form Data (POST Method)</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieving form data using $_GET
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];

    echo "<h3>Form Data (GET Method)</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
}

// Retrieving form data using $_REQUEST (combines both GET and POST)
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    echo "<h3>Form Data (REQUEST Method)</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
}
?>
