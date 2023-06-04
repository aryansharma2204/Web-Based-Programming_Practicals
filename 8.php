<?php

// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width)
{
    $area = $length * $width;
    return $area;
}

// Function to check if a number is even or odd
function checkEvenOrOdd($number)
{
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

// Function to greet a person
function greet($name)
{
    echo "Hello, " . $name . "!\n";
}

// Example usage of user-defined functions

// Calculate the area of a rectangle
$rectangleArea = calculateRectangleArea(5, 8);
echo "Area of Rectangle: " . $rectangleArea . "\n";

// Check if a number is even or odd
$number = 10;
$result = checkEvenOrOdd($number);
echo $number . " is " . $result . "\n";

// Greet a person
greet("John");

?>
