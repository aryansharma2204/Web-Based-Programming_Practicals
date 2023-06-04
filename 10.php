<?php

// Define form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// Validation using filter_var()

// Validate name
if (empty($name)) {
    $nameError = "Name is required.";
} else {
    if (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z ]*$/")))) {
        $nameError = "Only letters and white space allowed.";
    }
}

// Validate email
if (empty($email)) {
    $emailError = "Email is required.";
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    }
}

// Validate age
if (empty($age)) {
    $ageError = "Age is required.";
} else {
    if (!filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 120)))) {
        $ageError = "Invalid age value.";
    }
}

// Display validation errors or success message
if (isset($nameError) || isset($emailError) || isset($ageError)) {
    // Display validation errors
    echo "Validation errors:\n";
    if (isset($nameError)) {
        echo "- " . $nameError . "\n";
    }
    if (isset($emailError)) {
        echo "- " . $emailError . "\n";
    }
    if (isset($ageError)) {
        echo "- " . $ageError . "\n";
    }
} else {
    // All form data is valid
    echo "Form data is valid.\n";
    // You can perform further actions here, such as saving the data to a database
}

?>
