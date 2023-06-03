<?php

// Sample variables
$age = 25;
$isStudent = true;

// Nested if statement example
if ($age >= 18) {
    echo "You are eligible to vote.\n";

    if ($isStudent) {
        echo "You are also a student.";
    } else {
        echo "You are not a student.";
    }
} else {
    echo "You are not eligible to vote.";
}

?>
