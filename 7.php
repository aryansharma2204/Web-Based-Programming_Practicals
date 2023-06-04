<?php

// array_pad()
echo "array_pad():\n";
$array = [1, 2, 3];
$paddedArray = array_pad($array, 5, 0);
foreach ($paddedArray as $value) {
    echo $value . " ";
}
echo "\n\n";

// array_slice()
echo "array_slice():\n";
$array = [1, 2, 3, 4, 5];
$slicedArray = array_slice($array, 2, 2);
foreach ($slicedArray as $value) {
    echo $value . " ";
}
echo "\n\n";

// array_splice()
echo "array_splice():\n";
$array = [1, 2, 3, 4, 5];
$removedElements = array_splice($array, 2, 2);
echo "Modified Array: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "\nRemoved Elements: ";
foreach ($removedElements as $value) {
    echo $value . " ";
}
echo "\n\n";

// list()
echo "list():\n";
$array = ['John', 'Doe', 25];
list($firstName, $lastName, $age) = $array;
echo "First Name: " . $firstName . "\n";
echo "Last Name: " . $lastName . "\n";
echo "Age: " . $age . "\n";

?>
