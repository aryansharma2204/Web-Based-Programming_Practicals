<?php

// Sample string to match against
$string = "Hello, World!";

// Regular expression pattern
$pattern = "/hello/i"; // i modifier for case-insensitive matching

// Using preg_match() to match the pattern against the string
if (preg_match($pattern, $string)) {
    echo "Match found!";
} else {
    echo "No match found.";
}

// Regular expression with metacharacters and operators
$pattern2 = "/^Hello, (W|w)orld!$/"; // ^ and $ to match the start and end of the string, (W|w) to match either 'W' or 'w'

if (preg_match($pattern2, $string)) {
    echo "Pattern2 matched!";
} else {
    echo "Pattern2 not matched.";
}

?>
