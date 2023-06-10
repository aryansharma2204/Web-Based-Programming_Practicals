<?php
$text = "Hello, 123!";

// Define the pattern you want to match
$pattern = "/^[a-zA-Z0-9\s\.,!]+$/";

// Perform the pattern matching
if (preg_match($pattern, $text)) {
    echo "Text data matches the pattern.";
} else {
    echo "Text data does not match the pattern.";
}
?>
