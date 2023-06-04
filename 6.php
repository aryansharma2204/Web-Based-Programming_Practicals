<?php
// Sample array
$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "orange" => "orange",
    "grape" => "purple"
);

// rsort: Sorts the values of an array in descending order
rsort($fruits);
echo "Sorted using rsort: ";
print_r($fruits);

// asort: Sorts an array in ascending order, maintaining key-value associations
asort($fruits);
echo "Sorted using asort: ";
print_r($fruits);

// ksort: Sorts an array by keys in ascending order, maintaining key-value associations
ksort($fruits);
echo "Sorted using ksort: ";
print_r($fruits);

// arsort: Sorts an array in descending order, maintaining key-value associations
arsort($fruits);
echo "Sorted using arsort: ";
print_r($fruits);
?>
