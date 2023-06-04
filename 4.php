<?php

// Menu-driven program
echo "Menu:\n";
echo "1. Option 1\n";
echo "2. Option 2\n";
echo "3. Option 3\n";
echo "4. Quit\n";

// User input
$choice = readline("Enter your choice (1-4): ");

// Switch-case statement
switch ($choice) {
    case '1':
        echo "You selected Option 1.\n";
        // Code for Option 1
        break;

    case '2':
        echo "You selected Option 2.\n";
        // Code for Option 2
        break;

    case '3':
        echo "You selected Option 3.\n";
        // Code for Option 3
        break;

    case '4':
        echo "Quitting the program. Goodbye!\n";
        // Code for Quit option or program termination
        break;

    default:
        echo "Invalid choice. Please try again.\n";
        break;
}

?>
